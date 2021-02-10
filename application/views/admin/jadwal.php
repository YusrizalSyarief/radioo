

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
        <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
    </div>
    <div class="form-group col-md-2">
        <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
    </div>
    <div class="form-group col-md-2">
        <input type="date" class="form-control" placeholder="Tanggal" aria-label="Username">
    </div>
</div>

<div class="row">
<div class="form-group col-md-6">
    <a data-toggle="modal" data-target="#formJadwal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
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
                            <th scope="col">No.</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Penyiar</th>
                            <th scope="col">Deskripsi Acara</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyTransaksi">              
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button href=""  class="btn btn-success ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                                    data-target="#formInfoJadwal" data-id=""><i class="fas fa-info-circle"></i> Detail</button>
                            </td>
                            <td>
                                <button href=""  class="btn btn-warning ml-1 tampilModalRevisiSPJ" data-toggle="modal"
                                    data-target="#formJadwal" data-id=""><i class="fas fa-pen"></i> Edit</button>
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

<!-- merubah password user -->
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
                <form class="user"method="post" action="">
                    <div class="form-group">
                        <input type="text" class="form-control " id="username" name="username" placeholder="Judul">
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control " id="tanggal" name="tanggal" >
                        </div>
                        <div class="col-sm-6">
                            <input type="time" class="form-control " id="waktu" name="waktu" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Jadwal</label>
                        <textarea class="form-control " id="DeskripsiJadwal" name="DeskripsiJadwal" rows="3"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="login.html">Ubah Password</a>
            </div>
                </form>
        </div>
    </div>
</div>

<!-- merubah password user -->
<div class="modal fade" id="formInfoJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info Jadwal</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
            </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="">
                    <div class="form-group">
                        <input type="text" class="form-control " id="username" name="username" placeholder="Judul" readonly>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" class="form-control " id="tanggal" name="tanggal" readonly>
                        </div>
                        <div class="col-sm-6">
                            <input type="time" class="form-control " id="waktu" name="waktu" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi Jadwal</label>
                        <textarea class="form-control " id="DeskripsiJadwal" name="DeskripsiJadwal" rows="3" readonly></textarea>
                    </div>
            </div>
            <div class="modal-footer">
            </div>
                </form>
        </div>
    </div>
</div>