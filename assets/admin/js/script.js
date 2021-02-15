$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#formModalLabel').html('Tambah Data Pengajuan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        
    });


    $('.ModalInfoGaleri').on('click', function() {
        
        $('#exampleModalLabel').html('Wakakakak');

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
                $('#datepickerInfo').val(data.TGL_ACARA);
                $('#DeskripsiGaleriInfo').val(data.DESC_GALERI);
                
            }
        });
        
    });
    $('.tampilModalRevisi').on('click', function() {
        
        $('#formModalLabelRevisi').html('Revisi Proposal');
        $('.modal-footer button[type=submit]').html('Upload');
        $('.modal-body form').attr('action', 'http://localhost/proyekpisi/user/revisi');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/proyekpisi/user/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id_rev').val(data.ID_PENGAJUAN);
            }
        });
        
    });

    $('.tampilModalSpj').on('click', function() {
        $('#formModalLabelSpj').html('Upload SPJ');
        $('.modal-footer button[type=submit]').html('Upload');
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/proyekpisi/user/getspj',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id_rev').val(data.ID_TPENGAJUAN);
            }
        });
        
    });
        


    $('.tampilModalRevisiSPJ').on('click', function() {
        
        $('#formModalLabelSpj').html('Revisi SPJ');
        $('.modal-footer button[type=submit]').html('Upload');
        $('.modal-body form').attr('action', 'http://localhost/proyekpisi/user/revisiSpj');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/proyekpisi/user/getspj',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id_rev').val(data.ID_TPENGAJUAN);
            }
        });
        
    });



});
