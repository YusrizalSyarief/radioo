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
                        </tr>
                    </thead>
                    <tbody id="tBodyTransaksi">              
                        <tr>
                            <td></td>
                            <td></td>
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