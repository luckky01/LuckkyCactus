<link rel="stylesheet" href="_modules/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="_modules/global.css">
<link href="https://pro.fontawesome.com/releases/v5.15.0/css/all.css" rel="stylesheet" />
<script src="_modules/bootstrap/js/bootstrap.bundle.js"></script>
<script src="_modules/jquery/jquery-3.7.1.min.js"></script>
<script src="_modules/element.js"></script>
<?php


include 'app/_components/Header.php';
if ($useAuth['user']) {
    include 'app/account/index.php';
} else {
    include '_modules/widgets.php';
}


?>