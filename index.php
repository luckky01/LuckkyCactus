<?php 
$routes = [];
session_start();

require_once '_constructs/db.php';
require_once '_class/modules/utils.php';
require_once '_class/modules/data.php';
require_once '_class/modules/user.php';

route('/', function(){
    $db = new Database();
    $pdo = $db->getConnect(); 
    $dataHandler = new Data($pdo, NULL); 
    $userManager = new Users($pdo); 
    $useAuth = $userManager->useAuth();
    $interface = new UIInterface();
    require_once '_modules/assets.php';
    foreach (['error' => 'danger', 'success' => 'primary'] as $data => $type) {
        if (isset($_SESSION[$data])) {
            $interface->ntdotjsx($_SESSION[$data], $type);
            unset($_SESSION[$data]);
        }
    }

    if (!isset($_SESSION['user_login'])) {
        include 'app/(root)/index.php';
    } else {        
        $role = $_SESSION['role'];
        $ViewMap = [
            'ADMIN' => 'app/admin/index.php',
            'USER'  => 'app/user/index.php',
        ];
        include $ViewMap[$role];
        $interface->ConA('ออกจากระบบ', 'กดยืนยันเพื่อออกจากระบบ 🎯', 'danger', 'logout');
    }
});

function route(string $path, callable $callback){
    global $routes;
    $routes[$path] = $callback;
}

run();

function run() {
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $path => $callback) {
        if ($path != $uri) continue;
        $callback();
    }
}
?>