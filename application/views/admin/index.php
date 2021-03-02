

<!-- Begin Page Content -->
<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
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
        <a data-toggle="modal" data-target="#formLinkStream" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm "><i
        class="fas fa-plus"></i> Tambah Link Stream </a>
    </div>
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
<!-- Tambah link Stream -->
<div class="modal fade" id="formLinkStream" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" >Tambah Link Stream</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user" method="post" action="<?php echo base_url(); ?>admin/tambahLinkStream">
            
                    <div class="form-group">
                    <small class="form-text text-danger">Pastikan data benar, data tidak dapat dihapus dan dirubah</small>
                        <input type="text" class="form-control " id="linkStream" name="linkStream" placeholder="Link Stream" required>
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

<!-- End of Main Content -->

            
