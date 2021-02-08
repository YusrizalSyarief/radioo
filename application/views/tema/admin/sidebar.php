<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>Dashboard Admin</title>
   <link href="<?= base_url('assets/admin/vendor/fontawesome-free/css/all.min.css')?>" rel="stylesheet" type="text/css">
   <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
   <link href="<?= base_url('assets/admin/css/sb-admin-2.min.css')?>" rel="stylesheet">
   <script src="<?= base_url('assets/admin/vendor/jquery/jquery.min.js')?>"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
   <script charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       

        <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('property'); ?>">
  <div class="sidebar-brand-icon">
    <!-- Icon -->
   <!--<i class="fas fa-laugh-wink"></i>    -->
     <img src="<?= base_url('./assets/logo/logoo.png'); ?>" style="width:70px;height:70px;">

  </div>
  <div class="sidebar-brand-text mx-3"></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider ">

<!-- Querry menu -->
<?php
// $role_id = $this->session->userdata('role_id');
$queryMenu = " SELECT `user_menu`.`id_menu`, `nama_menu` FROM `user_menu` JOIN `user_access_menu` ON `user_menu`.`id_menu` = `user_access_menu`.`id_menu` WHERE `user_access_menu`.`id_role` = 1 ORDER BY `user_access_menu`.`id_menu` ASC ";

$menu = $this->db->query($queryMenu)->result_array();
?>


<!-- Looping Menu -->
<?php foreach ($menu as $m) : ?>
<!-- <?php if($m['nama_menu'] == 'Konten') : ?> -->
<!-- <?php else : ?> -->
<div class="sidebar-heading">
  <?= $m['nama_menu']; ?>
</div>
<!-- <?php endif; ?> -->


<!-- Querry subMenu -->
<?php
$menuId = $m['id_menu'];
$querySubMenu = " SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`id_menu` = `user_menu`.`id_menu` WHERE `user_sub_menu`.`id_menu` = {$m['id_menu']} AND `user_sub_menu`.`sub_active` = 1 AND `user_sub_menu`.`id_menu` != 3 ";

$subMenu = $this->db->query($querySubMenu)->result_array();
$title = "dashboard";
?>
  <!-- Looping subMenu -->	
<?php foreach($subMenu as $sm) : ?>
<?php if($title == $sm['JUDUL_SUB']) : ?>
<li class="nav-item active">
  <?php else : ?>
    <li class="nav-item">
    <?php endif; ?>
      <a class="nav-link" href="<?= base_url($sm['URL']); ?>">
        <i class="<?= $sm['ICON']; ?>"></i>
        <span><?= $sm['JUDUL_SUB']; ?></span></a>
    </li>
  <?php endforeach; ?>

<?php endforeach; ?>
<hr class="sidebar-divider">



<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
        <!-- End of Sidebar -->