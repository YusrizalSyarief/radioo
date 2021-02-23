$(function() {

    $('.ModalTambahGaleri').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'btn btn-secondary dropdown-toggle');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahGaleri');
        $('#JudulGaleri').val("");
        $('#Kategori').val("");
        $('#DeskripsiGaleri').val("");
        

    });
    $('.ModalTambahGaleriYt').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'btn btn-secondary dropdown-toggle');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahGaleriYt');
        $('#UrlYt').val("");
        $('#JudulGaleriYt').val("");
        $('#KategoriYt').val("");
        $('#DeskripsiGaleriYt').val("");
        

    });

    $('.ModalTambahJadwal').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahJadwal');
        $('#Judul').val("");
        $('#Waktu').val("");
        $('#Tanggal').val("");
        $('#DeskripsiJadwal').val("");
        

    });
    $('.ModalTambahPenyiar').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Penyiar');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#outputPenyiar').attr('src', 'https://localhost/radioo/uploads/img/blank.png');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahPenyiar');
        $('#Nama').val("");
        $('#NoTlp').val("");
        $('#Biografi').val("");
        $('#ig').val("");
        $('#fb').val("");
        $('#twt').val("");
        
        

    });

    $('.ModalUbahGaleri').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Galeri');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'invisible');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahGaleri');
        
        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoGaleri',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id').val(data.ID_GALERI);
                $('#JudulGaleri').val(data.JUDUL);
                $('#Kategori').val(data.ID_KATEGORI);
                $('#DeskripsiGaleri').val(data.DESCK_GALERI);
                
            }
        });

    });

    $('.ModalUbahGaleriYt').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Galeri');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'invisible');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahGaleriYt');
        
        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoGaleri',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idYt').val(data.ID_GALERI);
                $('#UrlYt').val(data.NAMA_FILE);
                $('#JudulGaleriYt').val(data.JUDUL);
                $('#KategoriYt').val(data.ID_KATEGORI);
                $('#DeskripsiGaleriYt').val(data.DESCK_GALERI);
                
            }
        });

    });


    $('.ModalInfoGaleri').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoGaleri',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                
                $('#JudulGaleriInfo').val(data.JUDUL);
                $('#TanggalUploadInfo').val(data.TANGGAL);
                $('#DeskripsiGaleriInfo').val(data.DESCK_GALERI);
                
            }
        });
        
    });
    $('.ModalInfoTamu').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoTamu',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                
                $('#PesanTamu').val(data.PESAN);
                
                
            }
        });
        
    });
    
    $('.ModalInfoJadwal').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoJadwal',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#JudulInfo').val(data.JUDUL_JADWAL);
                $('#WaktuInfo').val(data.WAKTU);
                $('#TanggalInfo').val(data.TANGGAL_JADWAL);
                $('#DeskripsiJadwalInfo').val(data.DESCK_JADWAL);
                
            }
        });
        
    });

    $('.ModalUbahJadwal').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Jadwal');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahJadwal');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoJadwal',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idJadwal').val(data.ID_JADWAL);
                $('#Judul').val(data.JUDUL_JADWAL);
                $('#Waktu').val(data.WAKTU);
                $('#Tanggal').val(data.TANGGAL_JADWAL);
                $('#DeskripsiJadwal').val(data.DESCK_JADWAL);
                
            }
        });
        
    });

    $('.ModalUbahPenyiar').on('click', function() {
        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Penyiar');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahPenyiar');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoPenyiar',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idPenyiar').val(data.ID_PENYIAR);
                $('#outputPenyiar').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_PENYIAR);
                $('#Nama').val(data.NAMA_PENYIAR);
                $('#NoTlp').val(data.NO_TLP_PENYIAR);
                $('#Biogafi').val(data.DESCK);
                $('#ig').val(data.INSTAGRAM);
                $('#fb').val(data.FACEBOOK);
                $('#twt').val(data.TWITTER);
                
            }
        });
        
    });
    $('.ModalInfoPenyiar').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoPenyiar',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                //https://localhost/radioo/assets/user/img/events/event-2.jpg
                $('#FotoInfo').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_PENYIAR);
                $('#NamaInfo').val(data.NAMA_PENYIAR);
                $('#NoTlpInfo').val(data.NO_TLP_PENYIAR);
                $('#BiografiInfo').val(data.DESCK);
                $('#igInfo').html(data.INSTAGRAM);
                $('#igInfo').attr('href', data.INSTAGRAM);
                $('#fbInfo').html(data.FACEBOOK);
                $('#fbInfo').attr('href',data.FACEBOOK);
                $('#twtInfo').html(data.TWITTER);
                $('#twtInfo').attr('href',data.TWITTER);
                
            }
        });
        
    });
    $('.ModalGantiPass').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/radioo/admin/getInfoUser',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                
                
                $('#idGantiPass').val(data.ID_USER);
               
                
            }
        });
        
    });

    $('#Email').keyup( function() {
        

        const nilai = $(this).val();
        
        let output = '';
        
        //console.log(output);
        //
        $.ajax({

            url: 'http://localhost/radioo/admin/getCountUser',
            data: {nilai : nilai},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                if (data ==! 1) {
                    $(".validasiEmail").empty();
                    output = '<i class="fas fa-check fa-lg"></i>'
                    $(".validasiEmail").append(output);
                    $('.modal-footer button[type=submit]').attr('class', 'btn btn-primary ');
                } else {
                    $(".validasiEmail").empty();
                    output = '<i class="fas fa-times-circle fa-lg"></i>'
                    $(".validasiEmail").append(output);
                    $('.modal-footer button[type=submit]').attr('class', 'invisible')
                }
            }

        });

        
    });

    // pencarian jadwal
   $("#cariJadwal").keyup(function() {
    const nilai = $(this).val();
    $.ajax("http://localhost/radioo/admin/pencarianJadwal", {
       nilai: nilai
    }, function(data) {
       //let output = '';
       let btnAksi = '';
       let btnInfo = '';

    //    const monthNames = ["January", "February", "March", "April", "May", "June",
    //       "July", "August", "September", "October", "November", "December"
    //    ];

       //$("#tBodyJadwal").empty();
       data.map((data) => {
         
        
        btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalUbahJadwal" data-toggle="modal"
                     data-target="#formJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-pen"></i> Edit</button>
                    <a href="<?=base_url(); ?>admin/hapusJadwal/${data.ID_JADWAL}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`

        btnInfo = `<button href=""  class="btn btn-success ml-1 ModalInfoJadwal" data-toggle="modal"
                    data-target="#formInfoJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-info-circle"></i> Detail</button>`

         
        console.log(data);
            //  output += `
            //     <tr>
            //        <td>${index+1}</td>
            //        <td>${data.NAMA_UKM}</td>
            //        <td>${data.NAMA_ACARA}</td>
            //        <td>${tglAcara.getDate()} ${monthNames[tglAcara.getMonth()]} ${tglAcara.getFullYear()}</td>
            //        <td>${tglDisetujui.getDate()} ${monthNames[tglDisetujui.getMonth()]} ${tglDisetujui.getFullYear()}</td>
            //        ${statusRevisi}
            //        ${statusTpengajuan}
            //        <td>${statusTpengajuan2}</td>
            //     </tr>
            //  `;
          
       })
       //$("#tBodyTransaksi").append(output);
    }, "json");




 });
    


});
