<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?= $title; ?></title>

<!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
   <a data-toggle="modal" data-target="#formModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
   class="fas fa-user-plus"></i> Buat Akun Admin </a>
</div>

<!-- Search User -->
<label for="exampleFormControlInput1">Cari Akun</label>
<div class="row">
   <div class="form-group col-md-6">
      <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
   </div>
   <!-- <div class="form-group col-md-2">
      <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
   </div>
   <div class="form-group col-md-2">
      <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
   </div> -->
</div>

<!-- Tabel Berita -->
<div class="row mb-5">
   <div class="col-md-12">
      <div class="card shadow-sm">
         <div class="card-body">
            <div class="table-responsive">
               <table class="table">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">Nama</th>
                     <th scope="col">Role</th>
                     <th scope="col">Email</th>
                     <th scope="col">Dibuat Pada Tanggal</th>
                  </tr>
               </thead>
               <tbody id="tBodyTransaksi">              
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                  </tr>
               </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- End of Main Content -->

<!-- Modal Create Akun -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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