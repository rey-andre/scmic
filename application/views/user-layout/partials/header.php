<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?> | Indonesia Pintar</title>
    <link rel="shortcut icon" href="<?=base_url('')?>assets/user/images/indonesia.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?=base_url('')?>assets/user/fontawesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=base_url('')?>assets/user/css/style.css">
    <link href="https://cdn.jsdelivr.net/gh/Eonasdan/tempus-dominus@master/dist/css/tempus-dominus.css" rel="stylesheet" crossorigin="anonymous">
    <?php if($this->uri->segment(1) == "layanan") { ?>
    <link rel="stylesheet" href="<?=base_url('')?>assets/user/css/layanan.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php } else if($this->uri->segment(1) == "galeri") { ?>
    <link rel="stylesheet" href="<?=base_url('')?>assets/user/css/galeri.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php } else if($this->uri->segment(1) == "berita") { ?>
    <link rel="stylesheet" href="<?=base_url('')?>assets/user/css/berita.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    
    
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda akan keluar dari akun!</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?=site_url('logout')?>">Yakin</a>
                    </div>
            </div>
        </div>
    </div>
    <header class="header">
        <a href="<?=site_url('/')?>" class="logo text-decoration-none"> <img height="45" src="<?=base_url('')?>assets/user/images/indonesia.png" alt="scmic"> Smart City </a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="<?=site_url('/')?>" class="text-decoration-none">Smart City</a>
            <a href="<?=site_url('layanan')?>" class="text-decoration-none" >Layanan</a>
            <a href="<?=site_url('galeri')?>" class="text-decoration-none" >Galeri</a>
            <a href="<?=site_url('berita')?>" class="text-decoration-none" >Berita</a>
            <?php if ($this->session->userdata('email') == NULL) { ?>
                <a href="<?=site_url('login')?>" class="text-decoration-none" >Login</a>
            <?php } else { ?>
                <?php if ($this->session->userdata('role') == 'admin') { ?>
                <a href="<?=site_url('dashboard')?>" class="text-decoration-none" >Dashboard</a>
                <?php } ?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal" class="text-decoration-none" >Logout</a>
            <?php } ?>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="search-btn" class="fas fa-search"></div>
        </div>
    </header>
    <div class="search-form">
        <div id="close-search" class="fas fa-times"></div>
        <form action="">
            <input type="search" name="" placeholder="cari disini..." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div>