<!-- // this header  -->
<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
    <div class="container">
        <a href="" class="navbar-brand">
            <img src="assets/logo.png" alt=""> LuckkyCactus
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="ms-auto navbar-nav">
                <?php if (isset($useAuth['user'])) { ?>
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-content" data-content="content_cart"><i class="far fa-shopping-cart"></i></a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                            <?= $useAuth['user']['fname'] . " " . $useAuth['user']['lname']; ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#" class="dropdown-item nav-content" data-content="profile">โปรไฟล์</a></li>
                            <li><a href="#" class="dropdown-item  nav-content" data-content="content_history">ประวัติการสั่งซื้อ</a></li>
                            <li><button data-bs-toggle="modal" data-bs-target="#logout"
                                    class="dropdown-item text-danger">ออกจากระบบ</button></li>
                        </ul>
                    </li>
                <?php } else { ?>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#login">Login</button>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>

<?php if (isset($useAuth['user'])) {
    $role = $useAuth['user']['role']; ?>
    <div class="nav-scroller">
        <nav class="nav">
            <?php if ($role === "ADMIN") { ?>
                <a href="#" class="nav-link nav-content" data-content="content_user">จัดการผู้ใช้งาน</a>
                <a href="#" class="nav-link nav-content" data-content="content_shop">จัดการร้านอาหาร</a>
                <a href="#" class="nav-link nav-content" data-content="content_shop_type">จัดการประเภทร้านอาหาร</a>
            <?php } elseif ($role === "USER") { ?>
                <a href="#" class="nav-link nav-content" data-content="content_main">สินค้าทั้งหมด</a>
            <?php } ?>
        </nav>
    </div>
<?php } ?>