

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- Search User -->
<label for="exampleFormControlInput1">Cari Akun</label>
<div class="row">
   <div class="form-group col-md-6">
      <input type="email" class="form-control" id="cariUser" placeholder="Cari Berdasarkan Nama,Email & No Tlp">
   </div>

</div>
<!-- pesan error -->
<?php if ($this->session->flashdata('pesan')):?>

<div class="row mt-3">
    <div class="col-md-6">

        <?= $this->session->flashdata('pesan'); ?>

    </div>
</div>
<?php endif; ?>
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
                     <th scope="col">No Tlp</th>
                     <th scope="col">Aksi</th>
                  </tr>
               </thead>
               <tbody id="tBodyUser">  
               <?php foreach($z['0'] as $u): ?>            
                  <tr>
                     <td><?= $u['NAMA']?></td>
                     <td><?= $u['ROLE']?></td>
                     <td><?= $u['EMAIL']?></td>
                     <td><?= $u['NO_TLP']?></td>
                     <td>
                        <button href=""  class="btn btn-warning ml-1 ModalGantiPass" data-toggle="modal"
                           data-target="#formGantiPassword" data-id="<?= $u['ID_USER']; ?>"><i class="fas fa-pen"></i> Ganti Password</button>
                        <a href="<?=base_url(); ?>admin/hapusUser/<?= $u['ID_USER']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"></i> Hapus</button>
                     </td>
                  </tr>
                  <?php endforeach; ?>
               </tbody>
               </table>
               <?= $this->pagination->create_links(); ?>
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
            <form class="user"method="post" action="<?php echo base_url(); ?>admin/tambahUser"  enctype="multipart/form-data">
               <div class="form-group ">
                  <img src="<?= base_url()?>assets/user/img/blank.png" alt="..."  id="outputUser" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                  <label for="exampleFormControlFile1">Upload Foto</label><br>
                  <small class="form-text text-danger">Ukuran maksimal Foto 1000x1000 pixel potrait, Berformat JPG atau PNG, 10MB</small>
                  <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
               </div>
               <div class="form-group">
                  <input type="text" class="form-control " id="Nama" name="Nama" placeholder="Nama" maxlength="128" required>
               </div>
               <div class="form-group row">
               <div class="col-sm-11 mb-3 mb-sm-0">
                  <input type="email" class="form-control " id="Email" name="Email" placeholder="Alamat email" maxlength="128" required>
               </div>
               <div class="col-sm-1 validasiEmail">
               
               </div>
               </div>
               <div class="form-group">
               <small class="form-text text-danger">Min 9, Max 13</small>
                  <input type="number" class="form-control " id="NoTlpUser" name="NoTlpUser" placeholder="No TLp" maxlength="15" required>
               </div>
               <div class="form-group">
                  <select class="custom-select custom-select-sm " style="  height: 40px;" name="KategoriUser" required>
                        <?php foreach($z['1'] as $u): ?>
                           <option value="<?= $u['ID_ROLE']?>"><?= $u['ROLE']?></option>
                        <?php endforeach; ?>
                  </select>
               </div>
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                     <small class="form-text text-danger">Min 8</small>
                        <input type="password" class="form-control " id="Password" name="Password" placeholder="Password" maxlength="50" required>
                     </div>
                  <div class="col-sm-6">
                  <small class="invisible">s</small>
                     <input type="password" class="form-control " id="Password2" name="Password2" placeholder="Ulangi Password" maxlength="50" required>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
               <button class="btn btn-primary" type="submit">Daftarkan</button>
            </div>
         </form>
      </div>
   </div>
</div>

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputUser');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>