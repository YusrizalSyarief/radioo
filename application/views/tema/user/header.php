<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="<?= base_url('./assets/logo/logoo.png'); ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="<?= base_url('assets/admin/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
    
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css"> -->
    
    <!-- Css Styles -->
    <link href="<?= base_url()?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/jam.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/nowfont.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/rockville.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>assets/user/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header">
        <div class="container" id="navbar">
            <div class="row">
                <div class="col-lg-2 col-md-2"> 
                    <div class="header__logo">
                        <img src="<?= base_url()?>assets/logo/logoo.png" alt="Logo_RSKP" style="width:120px;height:75px;">
                        <marquee class="navbar-nav navbar-dark" scrolldelay="70" title="Semoga Harimu Menyenangkan" style="color: yellow;">Disarankan untuk landscape bagi pengguna perangkat mobile</marquee>
                    </div>
                </div>
                <div class="col-lg-10 col-md-10">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                        
                        <!-- Ambil Role -->
                        <?php 
                        $queryMenu = " SELECT `user_menu`.`id_menu`, `nama_menu` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id_menu` = `user_access_menu`.`id_menu` WHERE `user_access_menu`.`id_role` = 1 ORDER BY `user_access_menu`.`id_menu` ASC ";
                        $menu = $this->db->query($queryMenu)->result_array();
                        ?>
                        <!-- Looping Role -->
                        <?php foreach ($menu as $m) : ?>
                        <!-- Ambil Data Sub Menu -->
                        <?php
                        $menuId = $m['id_menu'];
                        $querySubMenu = " SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`id_menu` = `user_menu`.`id_menu` WHERE `user_sub_menu`.`id_menu` = {$m['id_menu']} AND `user_sub_menu`.`sub_active` = 1 AND `user_sub_menu`.`id_menu` != 1 AND `user_sub_menu`.`id_menu` != 2 AND `user_sub_menu`.`id_menu` != 3";
                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>
                        <ul>
                        
                        <!-- Looping Sub Menu -->
                        <?php foreach($subMenu as $sm) : ?>
                        <?php if($title == $sm['JUDUL_SUB']) : ?>
                            <li class="active">
                        <?php else : ?>
                            <li>
                        <?php endif; ?>
                                <a href="<?= base_url($sm['URL']); ?>"><?= $sm['JUDUL_SUB']; ?></a>
                            </li>
                        <?php endforeach; ?>
                        <?php endforeach; ?>
                        
                        <?php 
                            if($this->session->userdata('ID_ROLE')){
                        ?>
                                <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow kecil">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="img-profile rounded-circle"
                                        src="<?= base_url(); ?>uploads/img/<?= $u['GAMBAR']; ?>" style="height:45px; weight:15px;">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                        data-target="#Profil" style="color: gray;">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item ModalUbahProfil" href="#"data-toggle="modal"
                                        data-target="#ubahPro" data-id="<?= $u['ID_USER']; ?>" style="color: gray;">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Ubah Profile
                                    </a>
                                    <?php if($u['ID_ROLE'] == 1 || $u['ID_ROLE'] == 2) : ?>
                                    <a class="dropdown-item" href="<?= base_url('admin'); ?>" style="color: gray;">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Kembali ke Admin
                                    </a>
                                    <?php else : ?>

                                    <?php endif;  ?>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" 
                                        data-target="#logoutModal" style="color: red;">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        <?php    
                            } else{
                        ?>
                            <li>
                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modalLogin">Login</button>
                            </li>
                        <?php    
                            } 
                        ?>
                        </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap">
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="user"method="post" action="<?= base_url('login'); ?>">
                    <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="emailL" name="emailL" placeholder="Alamat email">
                    </div>
                    <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="passwordL" name="passwordL" placeholder="Password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalRegister" style="float:left;">Buat Akun Baru</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit" id="loginB">Masuk</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Register Akun Baru</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                <form class="user"method="post" action="<?= base_url('user/register'); ?>">
                    <div class="form-group">
                        <small class="form-text text-danger">*Harus di isi!*</small>
                        <input type="text" class="form-control form-control-user" id="NamaU" name="NamaU" placeholder="Nama" value="<?= set_value('NamaU'); ?>">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-danger">*Harus di isi menggunakan email google!*</small>
                        <input type="text" class="form-control form-control-user" id="EmailU" name="EmailU" placeholder="Alamat Email" value="<?= set_value('EmailU'); ?>">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <small class="form-text text-danger">*Minimal 8 Karakter!*</small>
                            <input type="password" class="form-control form-control-user" id="passwordR" name="passwordR" placeholder="Password">
                        </div>
                        <div class="col-sm-6">
                            <small class="form-text text-danger">*Harus Sama dengan Password!*</small>
                            <input type="password" class="form-control form-control-user" id="passwordR2" name="passwordR2" placeholder="Ulangi Password">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalLogin" >Kembali ke Login</button>
                    <button class="btn btn-primary" type="submit" >Buat Akun</button>
                </div>
            </form>
            </div>
        </div>
    </div>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin logout ?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>" id="logoutB">Yakin</a>
                </div>
            </div>
        </div>
    </div>