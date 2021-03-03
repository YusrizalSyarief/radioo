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
    $('#cbx').on('change', function() {
        

        let id = $(this).data('id');
        console.log(id);
        // $.post("https://localhost/radioo/admin/cbGaleri", {
        //     id: id
        //  }, function(data) {
        // //     let output = '';
        // //     let btnAksi = '';
        // //    let btnInfo = '';
        //     data.map((data) => {
        //        console.log(data); 
        //     }

        //     )
        
        // //     $("#tBodyJadwal").empty();
        // //     data.map((data) => {
             
             
        // //     btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalUbahJadwal" id="ModalUbahJadwal" data-toggle="modal"
        // //         data-target="#formJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-pen"></i> Edit</button>
        // //       <a href="https://localhost/radioo/admin/hapusJadwal/${data.ID_JADWAL}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`
    
        // //   btnInfo = `<button href=""  class="btn btn-success ml-1 ModalInfoJadwal" data-toggle="modal"
        // //        data-target="#formInfoJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-info-circle"></i> Detail</button>`
        // //   output += `
        // //             <tr>
        // //                <td>${data.JUDUL_JADWAL}</td>
        // //                <td>${data.NAMA_PENYIAR}</td>
        // //                <td>${data.TANGGAL_JADWAL}</td>
        // //                <td>${data.WAKTU}</td>
        // //                <td>${btnInfo}</td>
        // //                <td>${btnAksi}</td>
        // //            </tr>
        // //          `;
             
        // //          //console.log(output);
    
              
        // //    })
        // // $("#tBodyJadwal").append(output);
        // }, "json")
        
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