

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Search User -->
<label for="exampleFormControlInput1">Cari Akun</label>
<div class="row">
   <div class="form-group col-md-6">
      <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
   </div>

</div>

<!-- btn tambah akun -->
<div class="row">
   <div class="form-group col-md-6">
      <a data-toggle="modal" data-target="#formModal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
      class="fas fa-user-plus"></i> Buat Akun Admin </a>
   </div>
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
                     <th scope="col">Aksi</th>
                  </tr>
               </thead>
               <tbody id="tBodyTransaksi">              
                  <tr>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>
                     <td>
                        <button href=""  class="btn btn-warning ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                           data-target="#formGantiPassword" data-id=""><i class="fas fa-pen"></i> Ganti Password</button>
                        <button href=""  class="btn btn-danger ml-1 tampilModalRevisiSPJ"><i class="fas fa-trash-alt"></i> Hapus</button>
                     </td>
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
               <div class="form-group ">
                  <img src="<?= base_url()?>assets/user/img/events/event-2.jpg" alt="..." class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                  <label for="exampleFormControlFile1">Ubah Foto</label><br>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UbahFoto" >
               </div>
               <div class="form-group">
                  <input type="text" class="form-control " id="username" name="username" placeholder="Nama">
               </div>
               <div class="form-group">
                  <input type="text" class="form-control " id="email" name="email" placeholder="Alamat email">
               </div>
               <div class="form-group">
                  <select class="custom-select custom-select-sm " style="  height: 40px;">
                     <option selected>Pilih Jenis</option>
                     <option value="1">Pocast</option>
                     <option value="2">Two</option>
                     <option value="3">Three</option>
                  </select>
               </div>
               <div class="form-group row">
                     <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control " id="password" name="password" placeholder="Password">
                     </div>
                  <div class="col-sm-6">
                     <input type="password" class="form-control " id="password2" name="password2" placeholder="Ulangi Password">
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
               <a class="btn btn-primary" href="login.html">Daftarkan</a>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- merubah password user -->
<div class="modal fade" id="formGantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
         <form class="user"method="post" action="">
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <input type="password" class="form-control " id="password" name="password" placeholder="Password">
                  </div>
               <div class="col-sm-6">
                  <input type="password" class="form-control " id="password2" name="password2" placeholder="Ulangi Password">
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
            <a class="btn btn-primary" href="login.html">Ubah Password</a>
         </div>
      </form>
      </div>
   </div>
</div>