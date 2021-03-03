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
    

    function kategori(){

        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");
        if (checkBox.checked == true){
          text.style.display = "block";
        } else {
           text.style.display = "none";
        }

    };

    // $('.ModalUbahProfil').on('click', function() {

    //     const id = $(this).data('id');
        
    //     $.ajax({
    //         url: 'https://localhost/radioo/user/getProfil',
    //         data: {id : id},
    //         method: 'post',
    //         dataType: 'json',
    //         success: function(data) {
    //             console.log(data);
    //             $('#idPro').val(data.ID_USER);
    //             $('#outputProfil').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR);
    //             $('#GambarPro').val(data.GAMBAR);
    //             $('#UrlYt').val(data.NAMA_FILE);
    //             $('#JudulGaleriYt').val(data.JUDUL);
    //             $('#KategoriYt').val(data.ID_KATEGORI);
    //             $('#DeskripsiGaleriYt').val(data.DESCK_GALERI);
                
    //         }
    //     });

    // });

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