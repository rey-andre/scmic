<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Goncengan">
  <title><?=$title?> | Indonesia Pintar</title>
  <link rel="shortcut icon" href="<?=base_url('')?>assets/user/images/indonesia.png">
  <link href="<?=base_url('')?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="<?=base_url('')?>assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?=base_url('')?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=site_url('dashboard')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-flag"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Portal</div>
      </a>

      <hr class="sidebar-divider my-0">

      <li class="nav-item <?php if($this->uri->segment(1) == "dashboard"){echo 'active';}?>">
        <a class="nav-link" href="<?=site_url('dashboard')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Data
      </div>

      <li class="nav-item <?php if($this->uri->segment(1) == "data-laporan"){echo 'active';}?>">
        <a class="nav-link" href="<?=site_url('data-laporan')?>">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Data Laporan</span>
        </a>
      </li>

      <li class="nav-item <?php if($this->uri->segment(1) == "data-galeri"){echo 'active';}?>">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseGaleri" aria-expanded="true" aria-controls="collapseGaleri">
          <i class="fas fa-fw fa-images"></i>
          <span>Data Galeri</span>
        </a>
        <div id="collapseGaleri" class="collapse <?php if($this->uri->segment(1) == "data-galeri"){echo 'show';}?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item <?php if($this->uri->segment(1) == "data-galeri" && $this->uri->segment(2) == ""){echo 'active';}?>" href="<?=site_url('data-galeri')?>">Lihat Data</a>
            <a class="collapse-item <?php if($this->uri->segment(1) == "data-galeri" && $this->uri->segment(2) == "tambah"){echo 'active';}?>" href="<?=site_url('data-galeri/tambah')?>">Tambah Data</a>
          </div>
        </div>
      </li>

      <hr class="sidebar-divider">

      <li class="nav-item">
        <a class="nav-link" href="<?=site_url('/')?>">
          <i class="fas fa-fw fa-home"></i>
          <span>Halaman Utama</span>
        </a>
      </li>

      <hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>

    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=ucfirst($this->session->userdata('nama'))?></span>
                <img class="img-profile rounded-circle"
                src="<?=base_url()?>assets/img/profile.svg">
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>