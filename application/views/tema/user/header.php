<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="DJoz Template">
    <meta name="keywords" content="DJoz, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
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
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div class="header__logo">
                        <img src="<?= base_url()?>assets/logo/logoo.png" alt="Logo_RSKP" style="width:120px;height:75px;">
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
                        <!-- <?= $m['nama_menu']; ?> -->

                        <!-- Ambil Data Sub Menu -->
                        <?php
                        $menuId = $m['id_menu'];
                        $querySubMenu = " SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`id_menu` = `user_menu`.`id_menu` WHERE `user_sub_menu`.`id_menu` = {$m['id_menu']} AND `user_sub_menu`.`sub_active` = 1 AND `user_sub_menu`.`id_menu` != 1 AND `user_sub_menu`.`id_menu` != 2 ";
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

                        <li><a data-toggle="modal" data-target="#modalLogin">Login</a></li>
                        </ul>

                               
                        </nav>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Modal Rating Web -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register Akun Baru</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
         <form class="user"method="post" action="">
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email">
            </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                  </div>
               <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Daftarkan</a>
         </div>
      </form>
      </div>
   </div>
</div>