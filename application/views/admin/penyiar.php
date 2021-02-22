

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<!-- Search Berita -->
<label for="exampleFormControlInput1">Cari Penyiar</label>
<div class="row">
    <div class="form-group col-md-6">
        <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
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
<div class="row">
    <div class="form-group col-md-6">
        <a data-toggle="modal" data-target="#formTambahPenyiar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ModalTambahPenyiar"><i
        class="fas fa-user-plus"></i> Tambah Penyiar </a>
    </div>
</div>
<!-- Tabel penyiar -->
<div class="row mb-5">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            
                            <th scope="col">Nama Penyiar</th>
                            <th scope="col">No Tlp</th>
                            <th scope="col">Biografi Penyiar</th>
                            <th scope="col">Media Sosial</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyTransaksi">  
                    <?php foreach($z as $p): ?>              
                        <tr>
                            <td><?= $p['NAMA_PENYIAR']?></td>
                            <td><?= $p['NO_TLP_PENYIAR']?></td>
                            <td>
                                <button href=""  class="btn btn-success ml-1 ModalInfoPenyiar" data-toggle="modal"
                                        data-target="#formInfoPenyiar"  data-id="<?= $p['ID_PENYIAR']; ?>"><i class="fas fa-info-circle"></i> Detail</button>
                            </td>
                            <td>Facebook = <?= $p['FACEBOOK']?>     <br>
                                Instagram =  <?= $p['INSTAGRAM']?>   <br>
                                Twitter = <?= $p['TWITTER']?>
                            </td>
                            <td>
                                
                                <button href=""  class="btn btn-warning ml-1 ModalUbahPenyiar" data-toggle="modal"
                                    data-target="#formTambahPenyiar" data-id="<?= $p['ID_PENYIAR']; ?>"><i class="fas fa-pen"></i> Edit</button>
                                <a href="<?=base_url(); ?>admin/hapusPenyiar/<?= $p['ID_PENYIAR']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus penyiar ini');"><i class="fas fa-trash-alt"></i> Hapus</a>
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

<!-- profil penyiar user -->
<div class="modal fade" id="formInfoPenyiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Info Penyiar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="user"method="post" action="">
            <div class="form-group ">
                <img src="<?= base_url()?>assets/user/img/events/event-2.jpg" id="FotoInfo" alt="..." class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nama</label>
                <input type="text" class="form-control " id="NamaInfo" name="NamaInfo"  readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">No Tlp</label>
                <input type="text" class="form-control " id="NoTlpInfo" name="NoTlpInfo"  readonly>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Biografi</label>
                        <textarea class="form-control " id="BiografiInfo" name="BiografiInfo" rows="3" readonly></textarea>
            </div>
            <div class="form-group">
                <i class="fab fa-facebook" style="font-size: 50px"></i><a href="" id="fbInfo" target="_blank"></a><br>
                <i class="fab fa-instagram-square" style="font-size: 50px"></i><a href="" id="igInfo" target="_blank"></a><br>
                <i class="fab fa-twitter-square" style="font-size: 50px"></i><a href="" id="twtInfo" target="_blank"></a>
            </div>
            </div>
            <div class="modal-footer">

            </div>
        </form>
        </div>
    </div>
</div>

<!-- Tambah penyiar  -->
<div class="modal fade" id="formTambahPenyiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Penyiar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="user"method="post" action="<?php echo base_url(); ?>admin/tambahPenyiar" enctype="multipart/form-data">
            <input type="hidden" name='idPenyiar' id='idPenyiar' value="1">
            <div class="form-group ">
                <img src="<?= base_url()?>assets/user/img/blank.png" alt="..." id="outputPenyiar" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                <label for="exampleFormControlFile1">Upload Foto</label><br>    
                <small class="form-text text-danger">Ukuran maksimal Foto 500x500 pixel, Berformat JPG atau PNG</small>
                <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="Nama" name="Nama" placeholder="Nama" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="NoTlp" name="NoTlp" placeholder="No Tlp" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Biografi</label>
                    <textarea class="form-control " id="Biogafi" name="Biografi" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="fb" name="fb" placeholder="Url Facebook" ><br>
                <input type="text" class="form-control " id="ig" name="ig" placeholder="Url Instagram" ><br>
                <input type="text" class="form-control " id="twt" name="twt" placeholder="Url Twitter" >
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary" type="submit" >Tambah Data</button>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputPenyiar');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>