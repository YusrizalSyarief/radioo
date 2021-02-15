

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
            <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
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
<!-- btn tambah galeri -->
<div class="row">
    <div class="form-group col-md-6">
        <a data-toggle="modal" data-target="#formTambahGaleri" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-fw fa-photo-video"></i> Tambah Galeri </a>
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
                    <tbody id="tBodyTransaksi">  
                    <?php foreach($z['0'] as $g): ?>            
                        <tr>
                            <td><?= $g['JUDUL']?></td>
                            <td><?= $g['TANGGAL']?></td>
                            <td><?= $g['NAMA_KATEGORI']?></td>
                            <td><?= $g['NAMA_FILE']?></td>
                            
                            <td>
                                <a href="<?=base_url(); ?>uploads/<?= $g['NAMA_FILE']; ?>"  class="btn btn-success  ml-1 ModalInfoGaleri" data-toggle="modal"
                                        data-target="#formInfoGaleri" data-id="<?= $g['ID_GALERI']; ?>"><i class="fas fa-info-circle"></i> Detail</a>
                                <?php if ($g['KATEGORI'] == 'youtube') : ?>
                                    <a href="<?= $g['NAMA_FILE']; ?>"  class="btn btn-primary ml-1 ">Lihat Konten</a>
                                <?php else: ?>
                                    <a href="<?=base_url(); ?>uploads/<?= $g['NAMA_FILE']; ?>"  class="btn btn-primary ml-1 ">Lihat Konten</a>
                                <?php endif; ?>
                            </td>
                            <td>
                                <button href=""  class="btn btn-warning ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                                    data-target="#formTambahGaleri" data-id=""><i class="fas fa-pen"></i> Edit</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Info Galeri</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="">
            
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
                        <textarea class="form-control " id="DeskripsiGaleriInfo" name="DeskripsiGaleriInfo" rows="3" readonly></textarea>
                    </div>
                    
            </div>
            <div class="modal-footer">
                
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
            <form class="user"method="post" action="<?php echo base_url(); ?>admin/tambahGaleriYt">
                <div class="form-group ">
                <input type="text" class="form-control " id="UrlYt" name="UrlYt" placeholder="Url Youtube">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control " id="JudulGaleriYt" name="JudulGaleriYt" placeholder="Judul">
                </div>
                <div class="form-group">
                    <select class="custom-select custom-select-sm " style="  height: 40px;" name="KategoriYt">
                        
                            <?php foreach($z['1'] as $kg): ?>
                            <option value="<?= $kg['ID_KATEGORI']?>"><?= $kg['NAMA_KATEGORI']?></option>
                            <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Deskripsi Galeri</label>
                    <textarea class="form-control " id="DeskripsiGaleriYt" name="DeskripsiGaleriYt" rows="3" ></textarea>
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
                        <a class="dropdown-item" href="#" data-dismiss="modal" data-toggle="modal"  data-target="#formTambahGaleri">File</a>
                        
                    </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        </form>
        </div>
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
                    <div class="form-group ">
                        <label for="exampleFormControlFile1">Upload file </label>
                        <input type="file" class="form-control-file" id="UploadFile" name="UploadFile" > 
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " id="JudulGaleri" name="JudulGaleri" placeholder="Judul">
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
                        <textarea class="form-control " id="DeskripsiGaleri" name="DeskripsiGaleri" rows="3" ></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                        
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                    <div class="dropdown float-left">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Kategori
                            </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" data-dismiss="modal" data-toggle="modal"  data-target="#formTambahGaleriYt">Youtube</a>
                            <a class="dropdown-item" href="#">File</a>
                            
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>


