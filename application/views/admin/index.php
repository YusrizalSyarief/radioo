

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
<script>
$(document).ready(function () {
    const arrayTotalViewer = [];
   const monthViewer = [];

   let monthJan = 0;
   let monthFeb = 0;
   let monthMar = 0;
   let monthApr = 0;
   let monthMay = 0;
   let monthJun = 0;
   let monthJul = 0;
   let monthAug = 0;
   let monthSep = 0;
   let monthOct = 0;
   let monthNov = 0;
   let monthDec = 0;
   $.get("<?= site_url('admin/graphView')?>",function (response) {
    const data = JSON.parse(response);
      const currentYear = new Date().getFullYear();
      data.map((data) => {
         const jsDate = new Date(data.TANGGAL_IP).toString();
         let splited = jsDate.split(" ");
         if (splited[3] == currentYear) {
            if (splited[1] == "Jan") {
               monthJan += 1;
               if (monthViewer.includes("Jan") != true) {
                  monthViewer.push("Jan");
               }

            } else if (splited[1] == "Feb") {
               monthFeb += 1;
               if (monthViewer.includes("Feb") != true) {
                  monthViewer.push("Feb");
               }

            } else if (splited[1] == "Mar") {
               monthMar += 1;
               if (monthViewer.includes("Mar") != true) {
                  monthViewer.push("Mar");
               }

            } else if (splited[1] == "Apr") {
               monthApr += 1;
               if (monthViewer.includes("Apr") != true) {
                  monthViewer.push("Apr");
               }

            } else if (splited[1] == "May") {
               monthMay += 1;
               if (monthViewer.includes("May") != true) {
                  monthViewer.push("May");
               }

            } else if (splited[1] == "Jun") {
               monthJun += 1;
               if (monthViewer.includes("Jun") != true) {
                  monthViewer.push("Jun");
               }

            } else if (splited[1] == "Jul") {
               monthJul += 1;
               if (monthViewer.includes("Jul") != true) {
                  monthViewer.push("Jul");
               }

            } else if (splited[1] == "Aug") {
               monthAug += 1;
               if (monthViewer.includes("Aug") != true) {
                  monthViewer.push("Aug");
               }

            } else if (splited[1] == "Sep") {
               monthSep += 1;
               if (monthViewer.includes("Sep") != true) {
                  monthViewer.push("Sep");
               }

            } else if (splited[1] == "Oct") {
               monthOct += 1;
               if (monthViewer.includes("Oct") != true) {
                  monthViewer.push("Oct");
               }

            } else if (splited[1] == "Nov") {
               monthNov += 1;
               if (monthViewer.includes("Nov") != true) {
                  monthViewer.push("Nov");
               }

            } else if (splited[1] == "Dec") {
               monthDec += 1;
               if (monthViewer.includes("Dec") != true) {
                  monthViewer.push("Dec");
               }
            }
         };

      });

      if (monthJan != 0) {
        arrayTotalViewer.push(monthJan);
      }

      if (monthFeb != 0) {
        arrayTotalViewer.push(monthFeb);
      }

      if (monthMar != 0) {
        arrayTotalViewer.push(monthMar);
      }

      if (monthApr != 0) {
        arrayTotalViewer.push(monthApr);
      }

      if (monthMay != 0) {
        arrayTotalViewer.push(monthMay);
      }

      if (monthJun != 0) {
        arrayTotalViewer.push(monthJun);
      }

      if (monthJul != 0) {
        arrayTotalViewer.push(monthJul);
      }

      if (monthAug != 0) {
        arrayTotalViewer.push(monthAug);
      }

      if (monthSep != 0) {
        arrayTotalViewer.push(monthSep);
      }

      if (monthOct != 0) {
        arrayTotalViewer.push(monthOct);
      }

      if (monthNov != 0) {
        arrayTotalViewer.push(monthNov);
      }

      if (monthDec != 0) {
        arrayTotalViewer.push(monthDec);
      }
      console.log(data);
        var ctx = document.getElementById("myAreaChart");
        var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: monthViewer,
            datasets: [{
            label: "Viewer Website",
            lineTension: 0.3,
            backgroundColor: "rgba(78, 115, 223, 0.05)",
            borderColor: "rgba(78, 115, 223, 1)",
            pointRadius: 3,
            pointBackgroundColor: "rgba(78, 115, 223, 1)",
            pointBorderColor: "rgba(78, 115, 223, 1)",
            pointHoverRadius: 3,
            pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
            pointHoverBorderColor: "rgba(78, 115, 223, 1)",
            pointHitRadius: 10,
            pointBorderWidth: 2,
            data:arrayTotalViewer,
            }],
        },
        options: {
            maintainAspectRatio: false,
            layout: {
            padding: {
                left: 10,
                right: 25,
                top: 25,
                bottom: 0
            }
            },
            scales: {
            xAxes: [{
                time: {
                unit: 'date'
                },
                gridLines: {
                display: false,
                drawBorder: false
                },
                ticks: {
                maxTicksLimit: 7
                }
            }],
            yAxes: [{
                ticks: {
                maxTicksLimit: 2000,
                padding: 10,
                // Include a dollar sign in the ticks
                callback: function(value, index, values) {
                    return ' ' + number_format(value);
                }
                },
                gridLines: {
                color: "rgb(234, 236, 244)",
                zeroLineColor: "rgb(234, 236, 244)",
                drawBorder: false,
                borderDash: [2],
                zeroLineBorderDash: [2]
                }
            }],
            },
            legend: {
            display: false
            },
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            titleMarginBottom: 10,
            titleFontColor: '#6e707e',
            titleFontSize: 14,
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            intersect: false,
            mode: 'index',
            caretPadding: 10,
            callbacks: {
                label: function(tooltipItem, chart) {
                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                return datasetLabel + ' ' + number_format(tooltipItem.yLabel);
                }
            }
            }
        }
    });


   });
    
})

</script>
            
