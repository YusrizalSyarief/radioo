$(function() {

    $('.ModalTambahGaleri').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'btn btn-secondary dropdown-toggle');
        //$('.modal-footer button[type=submit]').attr('', 'invisible');
        
        

    });
    $('.ModalTambahGaleriYt').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'btn btn-secondary dropdown-toggle');
        //$('.modal-footer button[type=submit]').attr('', 'invisible');
        
        

    });

    $('.ModalTambahJadwal').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Galeri');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        //$('.modal-footer button[id=dropdownMenuButton]').attr('class', 'btn btn-secondary dropdown-toggle');
        //$('.modal-footer button[type=submit]').attr('', 'invisible');
        
        

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


});
