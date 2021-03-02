$(function(){

    $('#coba1').on('click', function(){
        
        $("#judulKategori").html('Youtube');
        $("#judulKategori2").html('Youtube');

    });

    $('#coba').on('click', function(){

        $("#judulKategori").html('Audio');
        $("#judulKategori2").html('Audio');

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

    

});