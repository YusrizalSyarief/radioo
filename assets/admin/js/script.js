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
                $('#DeskripsiGaleri').val(data.DESC_GALERI);
                
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
                $('#DeskripsiGaleriYt').val(data.DESC_GALERI);
                
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
                $('#DeskripsiGaleriInfo').val(data.DESC_GALERI);
                
            }
        });
        
    });
    



});
