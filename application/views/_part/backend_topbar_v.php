 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  <!-- Topbar -->
  <nav class="navbar navbar-expand navbar-light warna topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">



      <div class="topbar-divider d-none d-sm-block"></div>

      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-white-600 small"><?= $this->session->userdata('username'); ?></span>
          <img class="img-profile rounded-circle" src="<?= base_url() ?>assets/profile/Pengaduan.png">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="<?= base_url('User/ProfileController') ?>">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profil
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= base_url('Auth/LogoutController') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Keluar
          </a>
        </div>
      </li>

    </ul>

  </nav>

  <style>
  .warna {
  background-color: #000;
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(10%, #1995AD), to(#1995AD));
  background-image: linear-gradient(180deg, #1995AD 10%, #1995AD 100%);
  background-size: cover;
  }
</style>
  <!-- End of Topbar -->
