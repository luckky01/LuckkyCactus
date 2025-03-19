<!-- // this header  -->

<div class="header-banner">
  <p class="mb-0">🌵 ยินดีต้อนรับสู่ร้านค้ากระบองเพชรออนไลน์! โปรโมชั่นลดสูงสุด 20% วันนี้เท่านั้น! ช้อปเลยย 🌵</p>
</div>
<div class="header-banner2 wpb_wrapper">
  <p class="mb-0">
    websitecactus63@gmail.com
    <i class="mx-2"></i> +6662 279 3868
    <i class="bi bi-facebook mx-2"></i>
    <i class="bi bi-instagram mx-1"></i>
    <i class="mx-3"></i>
  </p>
</div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <!-- Logo Section -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="./asset/img/logo.png" class="rounded-circle" alt="Logo" width="40" height="40"> 
      <span class="ml-2 font-weight-bold">LuckkyCactus</span>
    </a>

    <!-- Navbar Toggle Button for Mobile View -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>

  <!-- Navbar Links -->
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">หน้าแรก <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">สินค้า</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="bi bi-basket"></i></a>
      </li>

      <!-- Dropdown for User Account -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="bi bi-person"></i> My account
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      
          <?php if (isset($_SESSION['username'])): ?>
            <a class="dropdown-item" href="../admin/logout.php">Logout</a>
          <?php else: ?>
            <a class="dropdown-item" href="login.php">Login</a>
            <a class="dropdown-item" href="register.php">Register</a>
          <?php endif; ?>
        </div>
      </li>
    </ul>
  </div>
</nav>
