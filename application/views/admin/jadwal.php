

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<!-- Search Berita -->
<div class="row">
    <div class="col-md-6">
        <label for="exampleFormControlInput1">Cari Jadwal</label>
    </div>
    <div class="col-md-6">
        <label for="exampleFormControlInput1">Cari Interval Waktu</label>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <input type="text" class="form-control" id="cariJadwal" placeholder="Berdasarkan Nama Acara & Penyiar">
    </div>
    <div class="form-group col-md-2">
        <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
    </div>
    <div class="form-group col-md-2">
        <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
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
    <a data-toggle="modal" data-target="#formJadwal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ModalTambahJadwal">
    <i class="fas fa-plus"></i> Tambah Jadwal </a>
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
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Penyiar</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Deskripsi Acara</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyJadwal">     
                    <?php foreach($z['0'] as $j): ?>         
                        <tr>
                            <td><?= $j['JUDUL_JADWAL']?></td>
                            <td><?= $j['NAMA_PENYIAR']?></td>
                            <td><?= $j['TANGGAL_JADWAL']?></td>
                            <td><?= $j['WAKTU']?></td>
                            
                            <td>
                                <button href=""  class="btn btn-success ml-1 ModalInfoJadwal" data-toggle="modal"
                                    data-target="#formInfoJadwal" data-id="<?= $j['ID_JADWAL']; ?>"><i class="fas fa-info-circle"></i> Detail</button>
                            </td>
                            <td>
                                <button href=""  class="btn btn-warning ml-1 ModalUbahJadwal" data-toggle="modal"
                                    data-target="#formJadwal" data-id="<?= $j['ID_JADWAL']; ?>"><i class="fas fa-pen"></i> Edit</button>
                                <a href="<?=base_url(); ?>admin/hapusJadwal/<?= $j['ID_JADWAL']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"><i class="fas fa-trash-alt"></i> Hapus</a>
                        
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

<!-- jadwal -->
<div class="modal fade" id="formJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="<?php echo base_url(); ?>admin/tambahJadwal">
                <input type="hidden" name='idJadwal' id='idJadwal' value="1">
                    <div class="form-group ">
                        <img src="<?= base_url()?>assets/user/img/blank.png" alt="..." id="outputJadwal" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                        <label for="exampleFormControlFile1">Upload Foto</label><br>    
                        <small class="form-text text-danger">Ukuran maksimal Foto 500x500 pixel, Berformat JPG atau PNG</small>
                        <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="Judul" name="Judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                    <select class="custom-select custom-select-sm " style="  height: 40px;" name="Penyiar">
                        
                            <?php foreach($z['1'] as $kg): ?>
                            <option value="<?= $kg['ID_PENYIAR']?>"><?= $kg['NAMA_PENYIAR']?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control " id="Tanggal" name="Tanggal" >
                        </div>
                        <div class="col-sm-6">
                        
                            <input type="time" class="form-control " id="Waktu" name="Waktu" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Jadwal</label>
                        <textarea class="form-control " id="DeskripsiJadwal" name="DeskripsiJadwal" rows="3"></textarea>
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

<!-- info jadwal -->
<div class="modal fade" id="formInfoJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Info Jadwal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Judul</label>
                        <input type="text" class="form-control " id="JudulInfo" name="JudulInfo"  readonly>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <label for="exampleFormControlTextarea1">Tanggal</label>
                            <input type="date" class="form-control " id="TanggalInfo" name="TanggalInfo" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleFormControlTextarea1">Waktu</label>
                            <input type="time" class="form-control " id="WaktuInfo" name="WaktuInfo" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Jadwal</label>
                        <textarea class="form-control " id="DeskripsiJadwalInfo" name="DeskripsiJadwalInfo" rows="3" readonly></textarea>
                    </div>
            </div>
            <div class="modal-footer">
            </div>
                </form>
        </div>
    </div>
</div>
<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('outputJadwal');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>