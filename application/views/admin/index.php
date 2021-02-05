<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
   </div>

<!-- Area Chart -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Grafik Pengunjung</h6>
    </div>
    <div class="card-body">
        <div class="chart-area">
        <canvas id="myAreaChart"></canvas>
        </div>
    <hr>
    <!-- Styling for the area chart can be found in the <code>/js/demo/chart-area-demo.js</code> file. -->
    </div>
</div>

<!-- Rating Web -->
<div class="row mb-5">
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
<!-- Card Header - Dropdown -->
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rating Web</h6>
            </div>
<!-- Card Body -->
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>
        </div>
    </div>

<!-- Tabel Berita -->
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rating Acara</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <input type="email" class="form-control" id="cariTransaksi" placeholder="Ketikan disini...">
                    </div>
                    <div class="form-group col-md-6">
                        <select class="custom-select col-6" id="pilihan" name="pilihan">
				        <option selected>Pilih Kategori...</option>			
				        <option value="1">Rating Terendah</option>
                        <option value="2">Rating Tertinggi</option>
			            </select>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nama Acara</th>
                            <th scope="col">Jumlah Responden</th>
                            <th scope="col">Jumlah Like</th>
                            <th scope="col">Jumlah Dislike</th>
                            <th scope="col">Presentase Acara</th>
                        </tr>
                    </thead>
                    <tbody id="tBodyTransaksi">              
                        <tr>
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

            
