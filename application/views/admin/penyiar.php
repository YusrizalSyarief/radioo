

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
<div class="row">
    <div class="form-group col-md-6">
        <a data-toggle="modal" data-target="#formTambahPenyiar" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
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
                            <th scope="col">Foto</th>
                            <th scope="col">Nama Penyiar</th>
                            <th scope="col">Biografi Penyiar</th>
                            <th scope="col">Job</th>
                            <th scope="col">Media Sosial</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyTransaksi">              
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Facebook =      <br>
                                Instagram =     <br>
                                Twitter =
                            </td>
                            <td>
                                <button href=""  class="btn btn-success ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                                        data-target="#formInfoPenyiar" data-id=""><i class="fas fa-info-circle"></i> Detail</button>
                                <button href=""  class="btn btn-warning ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                                    data-target="#formTambahPenyiar" data-id=""><i class="fas fa-pen"></i> Edit</button>
                                <button href=""  class="btn btn-danger ml-1 "><i class="fas fa-trash-alt"></i> Hapus</button>
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

<!-- profil penyiar user -->
<div class="modal fade" id="formInfoPenyiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Penyiar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="user"method="post" action="">
            <div class="form-group ">
                <img src="<?= base_url()?>assets/user/img/events/event-2.jpg" alt="..." class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Nama</label>
                <input type="text" class="form-control " id="nama" name="nama"  readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">No Tlp</label>
                <input type="text" class="form-control " id="noTlp" name="noTlp"  readonly>
            </div>
            <div class="form-group">
                    <label for="exampleFormControlTextarea1">Biografi</label>
                        <textarea class="form-control " id="DeskripsiJadwal" name="DeskripsiJadwal" rows="3" readonly></textarea>
            </div>
            <div class="form-group">
                <i class="fab fa-facebook" style="font-size: 50px"></i><br>
                <i class="fab fa-instagram-square" style="font-size: 50px"></i><br>
                <i class="fab fa-twitter-square" style="font-size: 50px"></i>
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
            <form class="user"method="post" action="">
            <div class="form-group ">
                <img src="<?= base_url()?>assets/user/img/events/event-2.jpg" alt="..." class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                <label for="exampleFormControlFile1">Upload Foto</label><br>    
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UploadFoto" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="nama" name="nama" placeholder="Nama" >
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="username" name="username" placeholder="No Tlp" >
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Biografi</label>
                    <textarea class="form-control " id="DeskripsiJadwal" name="DeskripsiJadwal" rows="3" ></textarea>
            </div>
            <div class="form-group">
                <input type="text" class="form-control " id="fb" name="fb" placeholder="Url Facebook" ><br>
                <input type="text" class="form-control " id="fb" name="ig" placeholder="Url Ielegram" ><br>
                <input type="text" class="form-control " id="twt" name="twt" placeholder="Url Twitter" >
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="login.html">Tambah Penyiar</a>
            </div>
        </form>
        </div>
    </div>
</div>