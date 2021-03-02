

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
</div>

<!-- Search Berita -->
<label for="exampleFormControlInput1">Cari Galeri</label>
    <div class="row">
        <div class="form-group col-md-6">
            <input type="email" class="form-control" id="cariGaleri" placeholder="Cari Berdasarkan Judul & Kategori">
        </div>
        <div class="form-group col-md-2">
            <input type="date" class="form-control" placeholder="Tanggal" id="tanggalAwal">
        </div>
        <div class="form-group col-md-2">
            <input type="date" class="form-control" placeholder="Tanggal" id="tanggalAkhir">
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
<!-- btn tambah galeri -->
<div class="row">
    <div class="form-group col-md-6">
        <a data-toggle="modal" data-target="#formTambahGaleri" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm ModalTambahGaleri"><i
        class="fas fa-fw fa-photo-video"></i> Tambah Galeri </a>
        <a data-toggle="modal" data-target="#formKategoriGaleri" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm "><i
        class="fas fa-plus"></i> Tambah Kategori Galeri </a>
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
                            <th scope="col">Judul </th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Nama File</th>
                            <th scope="col">Isi galeri</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyGaleri">  
                    <?php foreach($z['0'] as $g): ?>            
                        <tr>
                            <td><?= $g['JUDUL']?></td>
                            <td><?= $g['TANGGAL']?></td>
                            <td><?= $g['NAMA_KATEGORI']?></td>
                            <td><?= $g['NAMA_FILE']?></td>
                            
                            <td>
                                
                                <?php if ($g['KATEGORI'] == 'youtube') : ?>
                                    <a href="<?=base_url(); ?>uploads/<?= $g['NAMA_FILE']; ?>"  class="btn btn-success  ml-1 ModalInfoGaleriYt" data-toggle="modal"
                                        data-target="#formInfoGaleri" data-id="<?= $g['ID_GALERI']; ?>"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a href="<?= $g['NAMA_FILE']; ?>"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>
                                <?php else: ?>
                                    <a href="<?=base_url(); ?>uploads/<?= $g['NAMA_FILE']; ?>"  class="btn btn-success  ml-1 ModalInfoGaleri" data-toggle="modal"
                                        data-target="#formInfoGaleri" data-id="<?= $g['ID_GALERI']; ?>"><i class="fas fa-info-circle"></i> Detail</a>
                                    <a href="<?=base_url(); ?>uploads/<?= $g['NAMA_FILE']; ?>"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>
                                <?php endif; ?>
                            </td>
                            <td>
                            <?php if ($g['KATEGORI'] == 'youtube') : ?>
                                <a href=""  class="btn btn-warning ml-1 ModalUbahGaleriYt" data-toggle="modal"
                                    data-target="#formTambahGaleriYt" data-id="<?= $g['ID_GALERI']; ?>"><i class="fas fa-pen"></i> Edit</a>
                            <?php else: ?>
                                <a href=""  class="btn btn-warning ml-1 ModalUbahGaleri" data-toggle="modal"
                                    data-target="#formTambahGaleri" data-id="<?= $g['ID_GALERI']; ?>" ><i class="fas fa-pen"></i> Edit</a>
                            <?php endif; ?>
                                <a href="<?=base_url(); ?>admin/hapusGaleri/<?= $g['ID_GALERI']; ?>"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus galeri ini');"><i class="fas fa-trash-alt"></i> Hapus</a>
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

<!-- Info Galeri -->
<div class="modal fade" id="formInfoGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Info Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="">
                    <div class="form-group thumnail">
                        <h6>Thumnail</h6>
                        <img src="<?= base_url()?>assets/user/img/blank.png" alt="..." id="outputGaleriInfo" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 400px; height: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Judul</label>
                        <input type="text" class="form-control " id="JudulGaleriInfo" name="JudulGaleriInfo" placeholder="" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Tanggal Upload</label>
                        <input type="text" class="form-control " id="TanggalUploadInfo" name="TanggalUploadInfo" placeholder="" readonly>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Galeri</label>
                        <textarea class="form-control " id="DeskripsiGaleriInfo" name="DeskripsiGaleriInfo" rows="10" readonly></textarea>
                    </div>
                    
            </div>
            <div class="modal-footer">
                
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambah Kategori Galeri -->
<div class="modal fade" id="formKategoriGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah Kategori Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?php echo base_url(); ?>admin/tambahKetegoriGaleri">
            
                    <div class="form-group">
                    <small class="form-text text-danger">Pastikan data benar, data tidak dapat dihapus dan dirubah, Max 30</small>
                        <input type="text" class="form-control " id="NamaKategori" name="NamaKategori" placeholder="Nama Ketegori" >
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Kategori Yang Telah Ditambahkan</label>
                        <select class="custom-select custom-select-sm " style="  height: 40px;" required>
                            
                                <?php foreach($z['1'] as $kg): ?>
                                <option value="<?= $kg['ID_KATEGORI']?>"><?= $kg['NAMA_KATEGORI']?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambah Galeri yt-->
<div class="modal fade" id="formTambahGaleriYt" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri Youtube</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?php echo base_url(); ?>admin/tambahGaleriYt" enctype="multipart/form-data">
                <input type="hidden" name='idYt' id='idYt' value="1">
                <input type="hidden" name='GambarYt' id='GambarYt' value="1">
                <div class="form-group ">
                    <img src="<?= base_url()?>assets/user/img/blank.png" alt="..." id="outputGaleri" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 400px; height: 200px;"><br>
                    <label for="exampleFormControlFile1">Upload Foto Thumnail</label><br>    
                    <small class="form-text text-danger">Ukuran maksimal Foto 1920x1080 pixel landscape, Berformat JPG atau PNG, 10MB</small>
                    <input type="file" class="form-control-file" id="UploadFoto" name="UploadFoto" accept="image/*" onchange="loadFile(event)" >
                </div>
                <div class="form-group ">
                    <input type="text" class="form-control " id="UrlYt" name="UrlYt" placeholder="Url Youtube" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="JudulGaleriYt" name="JudulGaleriYt" placeholder="Judul" required>
                </div>
                <div class="form-group">
                    <select class="custom-select custom-select-sm " style="  height: 40px;" name="KategoriYt" required>
                        <?php foreach($z['1'] as $kg): ?>
                        <option value="<?= $kg['ID_KATEGORI']?>"><?= $kg['NAMA_KATEGORI']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Galeri</label>
                    <textarea class="form-control " id="DeskripsiGaleriYt" name="DeskripsiGaleriYt" rows="10"  required></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <div class="dropdown float-left">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#" >Youtube</a>
                        <a class="dropdown-item ModalTambahGaleri" href="#" data-dismiss="modal" data-toggle="modal" data-target="#formTambahGaleri">Audio</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>

<!-- Tambah Galeri -->
<div class="modal fade" id="formTambahGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?php echo base_url(); ?>admin/tambahGaleri" enctype="multipart/form-data">
                <input type="hidden" name='id' id='id' value="1">
                <input type="hidden" name='AudioGaleri' id='AudioGaleri' value="1">
                <div class="form-group ">
                    <label for="exampleFormControlFile1">Upload file </label>
                    <small class="form-text text-danger">Harus berformat Mp3</small>
                    <input type="file" class="form-control-file" id="UploadFile" accept="audio/*" name="UploadFile" > 
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="JudulGaleri" name="JudulGaleri" placeholder="Judul" required>
                </div>
                <div class="form-group">
                    <select class="custom-select custom-select-sm " style="  height: 40px;" name="Kategori">
                        <?php foreach($z['1'] as $kg): ?>
                        <option value="<?= $kg['ID_KATEGORI']?>"><?= $kg['NAMA_KATEGORI']?></option>
                        <?php endforeach; ?>
                    </select>    
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Galeri</label>
                    <textarea class="form-control " id="DeskripsiGaleri" name="DeskripsiGaleri" rows="10" required></textarea>
                </div>
            </div>
            <div class="modal-footer">  
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <div class="dropdown float-left">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kategori
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item ModalTambahGaleriYt" href="#" data-dismiss="modal" data-toggle="modal" data-target="#formTambahGaleriYt">Youtube</a>
                        <a class="dropdown-item" href="#">Audio</a>    
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>    
            </form>
        </div>
    </div>
</div>

<script>
var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
    var output = document.getElementById('outputGaleri');
    output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>



