$(function(){

    $('#coba1').on('click', function(){
        // $("#judulKategori").html('Youtube');
        // $("#judulKategori2").html('Youtube');
        const kategori = $(this).data("kategori");
        console.log(kategori);
    });

    $('#coba').on('click', function(){
        // $("#judulKategori").html('Audio');
        // $("#judulKategori2").html('Audio');
        const kategori = $(this).data("kategori");
        console.log(kategori);
    });

    $('#likeW').on('click', function(){
        
        $("#likeW").css("color","gray");
        $("#dislikeW").css("color","blue");
        $("#ratingW").val(1);
        
    });

    $('#dislikeW').on('click', function(){
    
        $("#dislikeW").css("color","gray");
        $("#likeW").css("color","blue");
        $("#ratingW").val(0);
        
    });

    $('#likeJ').on('click', function(){
        
        $("#likeJ").css("color","gray");
        $("#dislikeJ").css("color","blue");
        $("#ratingJ").val(1);
        
    });

    $('#dislikeJ').on('click', function(){
    
        $("#dislikeJ").css("color","gray");
        $("#likeJ").css("color","blue");
        $("#ratingJ").val(0);
        
    });

    $('.ModalUbahProfil').on('click', function() {

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/user/getProfil',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idPro').val(data.ID_USER);
                $('#outputProfil').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR);
                $('#GambarPro').val(data.GAMBAR);
                $('#namaR').val(data.NAMA);
                $('#emailR').val(data.EMAIL);
                $('#notlpR').val(data.NO_TLP);
                
            }
        });

    });

    $('.ModalRateAcara').on('click', function() {

        
        
        const id = $(this).data('id');
        $('#id').val(id);
        console.log(id);
        
    });

});