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

                        </ul>

                                <!-- <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="<?= base_url()?>assets/user/about.html">About</a></li>
                                        <li><a href="<?= base_url()?>assets/user/blog.html">Blog</a></li>
                                        <li><a href="<?= base_url()?>assets/user/blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?= base_url()?>assets/user/contact.html">Contact</a></li> -->
                            <!-- </ul> -->
                        </nav>
                        
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header Section End -->