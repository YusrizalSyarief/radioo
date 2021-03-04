  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Navbar -->
        <marquee class="navbar-nav navbar-dark" scrolldelay="70" title="Semoga Harimu Menyenangkan">Selamat Datang <?=$u['NAMA']?> </marquee>
        <ul class="navbar-nav ml-auto">

            
          
            
            
            
 
            

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$u['NAMA']?></span>
                    <img class="img-profile rounded-circle"
                        src="<?= base_url()?>uploads/img/<?=$u['GAMBAR']?>">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in "
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item ModalUbahProfile" href="#" data-toggle="modal"
                                    data-target="#formProfil" data-id="<?= $u['ID_USER']?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item ModalGantiPass" href="#" data-toggle="modal"
                                    data-target="#formGantiPassword" data-id="<?= $u['ID_USER']?>">
                        <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                        Ganti Pass
                    </a>
                    <a class="dropdown-item ModalGantiPass" href="#" data-toggle="modal"
                                    data-target="#formGantiPassword" data-id="<?= $u['ID_USER']?>">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Pindah Halaman User
                    </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->