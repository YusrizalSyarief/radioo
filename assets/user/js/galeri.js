$(function(){

    $('#coba1').on('click', function(){
        $("#judulKategori").html('Youtube');
        $("#judulKategori2").html('Youtube');
        const kategori = $(this).data("kategori");
        console.log(kategori);
    });

    $('#coba').on('click', function(){
        $("#judulKategori").html('Audio');
        $("#judulKategori2").html('Audio');
        const kategori = $(this).data("kategori");
        console.log(kategori);
    });

    $('#likeW').on('click', function(){
        const rate = $(this).data("likW");
        $("#ratingW").val('Audio');
        console.log(rate);
    });

    $('#dislikeW').on('click', function(){
        const rate = $(this).data("disW");
        $("#ratingW").val('tes');
        console.log(rate);
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

    // $("#myCheck").onclick(function() {
    //     const nilai = $(this).val();
    //     $.post("https://localhost/radioo/user/galeri", {
    //     nilai: nilai
    //     }, function(data) {
    //         let background = '';
    //         let judul = '';

    //         $("#tBodyJadwal").empty();
    //         $('#tanggalAwal').val("");
    //         $('#tanggalAkhir').val("");
    //         data.map((data) => {
    //             background = `<div class="youtube__item__pic set-bg" data-setbg="https://localhost/radioo/assets/user/img/youtube/youtube-1.jpg">
    //             <a href="${data.NAMA_FILE}" class="play-btn video-popup"><i class="fa fa-play"></i></a>
    //             </div>`

    //             judul = `<div class="youtube__item__text">
    //             <h4>${data.JUDUL}</h4>
    //             <p>${data.DESCK_GALERI}</p>
    //             </div>`
    //         })
    //     })
    // });

    // $.ajax({
    //     url: 'https://localhost/radioo/admin/getInfoGaleri',
    //     data: {id : id},
    //     method: 'post',
    //     dataType: 'json',
    // });

});