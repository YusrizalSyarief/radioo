$(function() {
    req();
    tgl();
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
        $('#outputGaleri').attr('src', 'https://localhost/radioo/assets/user/img/blank.png');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahGaleriYt');
        $('#UrlYt').val("");
        $('#JudulGaleriYt').val("");
        $('#KategoriYt').val("");
        $('#DeskripsiGaleriYt').val("");
        

    });

    $('.ModalTambahJadwal').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Jadwal');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#outputJadwal').attr('src', 'https://localhost/radioo/assets/user/img/blank.png');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahJadwal');
        $('#Judul').val("");
        $('#Waktu').val("");
        $('#Tanggal').val("");
        $('#DeskripsiJadwal').val("");
        

    });
    $('.ModalTambahPenyiar').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Tambah Penyiar');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#outputPenyiar').attr('src', 'https://localhost/radioo/assets/user/img/blank.png');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/tambahPenyiar');
        $('#Nama').val("");
        $('#NoTlp').val("");
        $('#Biografi').val("");
        $('#ig').val("");
        $('#fb').val("");
        $('#twt').val("");
        
        

    });


    // pencarian jadwal
    $("#cariJadwal").keyup(function() {
     const nilai = $(this).val();
     $.post("https://localhost/radioo/admin/pencarianJadwal", {
        nilai: nilai
     }, function(data) {
        let output = '';
        let btnAksi = '';
       let btnInfo = '';

    
        $("#tBodyJadwal").empty();
        $('#tanggalAwal').val("");
        $('#tanggalAkhir').val("");
        data.map((data) => {
         
            
        btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalUbahJadwal" id="ModalUbahJadwal" data-toggle="modal"
            data-target="#formJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-pen"></i> Edit</button>
          <a href="https://localhost/radioo/admin/hapusJadwal/${data.ID_JADWAL}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`

      btnInfo = `<button href=""  class="btn btn-success ml-1 ModalInfoJadwal" data-toggle="modal"
           data-target="#formInfoJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-info-circle"></i> Detail</button>`
      output += `
                <tr>
                   <td>${data.JUDUL_JADWAL}</td>
                   <td>${data.NAMA_PENYIAR}</td>
                   <td>${data.TANGGAL_JADWAL}</td>
                   <td>${data.WAKTU}</td>
                   <td>${btnInfo}</td>
                   <td>${btnAksi}</td>
               </tr>
             `;
         
             console.log(output);

          
       })
    $("#tBodyJadwal").append(output);
    }, "json").done(function(){
        req();
        //tgl();
    });

});

//pencarian galeri
$("#cariGaleri").keyup(function() {
    const nilai = $(this).val();
    $.post("https://localhost/radioo/admin/pencarianGaleri", {
       nilai: nilai
    }, function(data) {
       let output = '';
       let btnAksi = '';
      let btnInfo = '';

   
       $("#tBodyGaleri").empty();
       $('#tanggalAwal').val("");
        $('#tanggalAkhir').val("");
       data.map((data) => {
        console.log(data); 
        if (data.KATEGORI === 'youtube') {
            btnAksi = `<a href=""  class="btn btn-warning ml-1 ModalUbahGaleriYt" data-toggle="modal"
                        data-target="#formTambahGaleriYt" data-id="${data.ID_GALERI}"><i class="fas fa-pen"></i> Edit</a>
                        <a href="https://localhost/radioo/admin/hapusGaleri/${data.ID_GALERI}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus galeri ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`;
            btnInfo = `<a href=""  class="btn btn-success  ml-1 ModalInfoGaleriYt" data-toggle="modal"
                        data-target="#formInfoGaleri" data-id="${data.ID_GALERI}"><i class="fas fa-info-circle"></i> Detail</a>
                        <a href="${data.NAMA_FILE}"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>`
         } else {
            btnAksi = `<a href=""  class="btn btn-warning ml-1 ModalUbahGaleri" data-toggle="modal"
                        data-target="#formTambahGaleri" data-id="${data.ID_GALERI}" ><i class="fas fa-pen"></i> Edit</a>
                        <a href="https://localhost/radioo/admin/hapusGaleri/${data.ID_GALERI}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus galeri ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`;
            btnInfo = `<a href=""  class="btn btn-success  ml-1 ModalInfoGaleri" data-toggle="modal"
                        data-target="#formInfoGaleri" data-id="${data.ID_GALERI}"><i class="fas fa-info-circle"></i> Detail</a>
                        <a href="https://localhost/radioo/uploads/${data.NAMA_FILE}"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>`; 
         }
      
        output += `
               <tr>
                  <td>${data.JUDUL}</td>
                  <td>${data.TANGGAL}</td>
                  <td>${data.NAMA_KATEGORI}</td>
                  <td>${data.NAMA_FILE}</td>
                  <td>${btnInfo}</td>
                  <td>${btnAksi}</td>
              </tr>
            `;
        
            //console.log(output); 

         
      })
   $("#tBodyGaleri").append(output);
   }, "json").done(function(){
       req();
       //tgl();
   });

});

//pencarian penyiar 
$("#cariPenyiar").keyup(function() {
    const nilai = $(this).val();
    $.post("https://localhost/radioo/admin/pencarianPenyiar", {
       nilai: nilai
    }, function(data) {
       let output = '';
       let btnAksi = '';
      let btnInfo = '';

   
       $("#tBodyPenyiar").empty();
       data.map((data) => {
        
           
       btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalUbahPenyiar" data-toggle="modal"
                    data-target="#formTambahPenyiar" data-id="${data.ID_PENYIAR}"><i class="fas fa-pen"></i> Edit</button>
                    <a href="https://localhost/radioo/admin/hapusPenyiar/${data.ID_PENYIAR}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus penyiar ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`

     btnInfo = `<button href=""  class="btn btn-success ml-1 ModalInfoPenyiar" data-toggle="modal"
     data-target="#formInfoPenyiar"  data-id="${data.ID_PENYIAR}"><i class="fas fa-info-circle"></i> Detail</button>`
     output += `
               <tr>
                  <td>${data.NAMA_PENYIAR}</td>
                  <td>${data.NO_TLP_PENYIAR}</td>
                  <td>${btnInfo}</td>
                  <td>
                  Facebook = ${data.FACEBOOK}    <br>
                  Instagram =  ${data.INSTAGRAM}   <br>
                  Twitter = ${data.TWITTER}
                  
                  </td>
                  
                  <td>${btnAksi}</td>
              </tr>
            `;
        
            console.log(output);

         
      })
   $("#tBodyPenyiar").append(output);
   }, "json").done(function(){
       req();
       //tgl();
   });

});
//pencarian User
$("#cariUser").keyup(function() {
    const nilai = $(this).val();
    $.post("https://localhost/radioo/admin/pencarianUser", {
       nilai: nilai
    }, function(data) {
       let output = '';
       let btnAksi = '';
      
   
       $("#tBodyUser").empty();
       data.map((data) => {
        
           
       btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalGantiPass" data-toggle="modal"
                     data-target="#formGantiPassword" data-id="${data.ID_USER}"><i class="fas fa-pen"></i> Ganti Password</button>
                    <a href="https://localhost/radioo/admin/hapusUser/${data.ID_USER}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"></i> Hapus</button>`

     output += `
               <tr>
                  <td>${data.NAMA}</td>
                  <td>${data.ROLE}</td>
                  <td>${data.EMAIL}</td>
                  <td>${data.NO_TLP}</td>    
                  <td>${btnAksi}</td>
              </tr>
            `;
        
            console.log(output);

         
      })
   $("#tBodyUser").append(output);
   }, "json").done(function(){
       req();
   });

   

});
//pencarian Rate
$("#cariAcara").keyup(function() {
    const nilai = $(this).val();
    console.log(nilai);
    $.post("https://localhost/radioo/admin/pencarianAcara", {
       nilai: nilai
    }, function(data) {
       let output = '';
    
      
       console.log(data);
       $("#tBodyRate").empty();
       data.map((data) => {
        
        console.log(data);


        output += `
                <tr>
                    <td>${data.JUDUL_JADWAL}</td>
                    <td>${data.SUKA}</td>
                    <td>${data.TIDAK_SUKA}</td>
                    <td>
                    <button href=""  class="btn btn-success ml-1 ModalKomentar" data-toggle="modal"
                    data-target="#ModalKomentar" data-id="${data.ID_JADWAL}"><i class="fas fa-info-circle"></i> Detail</button>
                    </td>    
                    
                </tr>
                `;
        
            console.log(output);

         
     })
    $("#tBodyRate").append(output);
   }, "json").done(function(){
       req();
   });

   


});

});
function tgl(){
    $('#tanggalAkhir').on('change', function() {
        

        const awal = $('#tanggalAwal').val();
        const akhir = $(this).val();
        console.log(awal+" "+akhir);
        $.post("https://localhost/radioo/admin/pencarianJadwalTgl", {
            awal: awal,
            akhir: akhir 
         }, function(data) {
            let output = '';
            let btnAksi = '';
           let btnInfo = '';
    
        
            $("#tBodyJadwal").empty();
            data.map((data) => {
             
             
            btnAksi = `<button href=""  class="btn btn-warning ml-1 ModalUbahJadwal" id="ModalUbahJadwal" data-toggle="modal"
                data-target="#formJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-pen"></i> Edit</button>
              <a href="https://localhost/radioo/admin/hapusJadwal/${data.ID_JADWAL}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus jadwal ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`
    
          btnInfo = `<button href=""  class="btn btn-success ml-1 ModalInfoJadwal" data-toggle="modal"
               data-target="#formInfoJadwal" data-id="${data.ID_JADWAL}"><i class="fas fa-info-circle"></i> Detail</button>`
          output += `
                    <tr>
                       <td>${data.JUDUL_JADWAL}</td>
                       <td>${data.NAMA_PENYIAR}</td>
                       <td>${data.TANGGAL_JADWAL}</td>
                       <td>${data.WAKTU}</td>
                       <td>${btnInfo}</td>
                       <td>${btnAksi}</td>
                   </tr>
                 `;
             
                 //console.log(output);
    
              
           })
        $("#tBodyJadwal").append(output);
        }, "json").done(function(){
            req();
        });
        
    });

    $("#tanggalAkhir").on('change',function() {
        const awal = $('#tanggalAwal').val();
        const akhir = $(this).val();
        $.post("https://localhost/radioo/admin/pencarianGaleriTgl", {
           awal: awal,
           akhir: akhir
        }, function(data) {
           let output = '';
           let btnAksi = '';
          let btnInfo = '';
    
       
           $("#tBodyGaleri").empty();
           data.map((data) => {
            
            if (data.KATEGORI === 'youtube') {
                btnAksi = `<a href=""  class="btn btn-warning ml-1 ModalUbahGaleriYt" data-toggle="modal"
                            data-target="#formTambahGaleriYt" data-id="${data.ID_GALERI}"><i class="fas fa-pen"></i> Edit</a>
                            <a href="https://localhost/radioo/admin/hapusGaleri/${data.ID_GALERI}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus galeri ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`;
                btnInfo = `<a href=""  class="btn btn-success  ml-1 ModalInfoGaleriYt" data-toggle="modal"
                            data-target="#formInfoGaleri" data-id="${data.ID_GALERI}"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="${data.NAMA_FILE}"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>`
             } else {
                btnAksi = `<a href=""  class="btn btn-warning ml-1 ModalUbahGaleri" data-toggle="modal"
                            data-target="#formTambahGaleri" data-id="${data.ID_GALERI}" ><i class="fas fa-pen"></i> Edit</a>
                            <a href="https://localhost/radioo/admin/hapusGaleri/${data.ID_GALERI}"  class="btn btn-danger ml-1 " onclick="return confirm('apakah kamu yakin menghapus galeri ini');"><i class="fas fa-trash-alt"></i> Hapus</a>`;
                btnInfo = `<a href=""  class="btn btn-success  ml-1 ModalInfoGaleri" data-toggle="modal"
                            data-target="#formInfoGaleri" data-id="${data.ID_GALERI}"><i class="fas fa-info-circle"></i> Detail</a>
                            <a href="https://localhost/radioo/uploads/${data.NAMA_FILE}"  class="btn btn-primary ml-1 " target="_blank">Lihat Konten</a>`; 
             }
          
            output += `
                   <tr>
                      <td>${data.JUDUL}</td>
                      <td>${data.TANGGAL}</td>
                      <td>${data.NAMA_KATEGORI}</td>
                      <td>${data.NAMA_FILE}</td>
                      <td>${btnInfo}</td>
                      <td>${btnAksi}</td>
                  </tr>
                `;
            
                //console.log(output); 
    
             
          })
       $("#tBodyGaleri").append(output);
       }, "json").done(function(){
           req();
       });
    
    });
    
}

function req() {
    $('.ModalUbahGaleri').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Galeri');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-footer button[id=dropdownMenuButton]').attr('class', 'invisible');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahGaleri');
        
        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoGaleri',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#id').val(data.ID_GALERI);
                $('#AudioGaleri').val(data.NAMA_FILE);
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
                $('#outputGaleri').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_GALERI);
                $('#GambarYt').val(data.GAMBAR_GALERI);
                $('#UrlYt').val(data.NAMA_FILE);
                $('#JudulGaleriYt').val(data.JUDUL);
                $('#KategoriYt').val(data.ID_KATEGORI);
                $('#DeskripsiGaleriYt').val(data.DESCK_GALERI);
                
            }
        });

    });


    $('.ModalInfoGaleriYt').on('click', function() {
        
        $('.thumnail').show();
        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoGaleri',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#outputGaleriInfo').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_GALERI);
                $('#JudulGaleriInfo').val(data.JUDUL);
                $('#TanggalUploadInfo').val(data.TANGGAL);
                $('#DeskripsiGaleriInfo').val(data.DESCK_GALERI);
                
            }
        });
        
    });
    $('.ModalInfoGaleri').on('click', function() {
        
        $('.thumnail').hide();
        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoGaleri',
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
            url: 'https://localhost/radioo/admin/getInfoTamu',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                
                $('#PesanTamu').val(data.PESAN);
                
                
            }
        });
        
    });
    
    

    $('.ModalUbahJadwal').on('click', function() {

        $('.modal-header h5[id=exampleModalLabel]').html('Ubah Jadwal');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'https://localhost/radioo/admin/ubahJadwal');

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoJadwal',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idJadwal').val(data.ID_JADWAL);
                $('#outputJadwal').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_JADWAL);
                $('#GambarJadwal').val(data.GAMBAR_JADWAL);
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
            url: 'https://localhost/radioo/admin/getInfoPenyiar',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idPenyiar').val(data.ID_PENYIAR);
                $('#outputPenyiar').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_PENYIAR);
                $('#GambarPenyiar').val(data.GAMBAR_PENYIAR);
                $('#Nama').val(data.NAMA_PENYIAR);
                $('#NoTlp').val(data.NO_TLP_PENYIAR);
                $('#Biogafi').val(data.DESCK);
                $('#ig').val(data.INSTAGRAM);
                $('#fb').val(data.FACEBOOK);
                $('#twt').val(data.TWITTER);
                
            }
        });
        
    });
    $('.ModalUbahProfile').on('click', function() {

        

        const id = $(this).data('id');
        //console.log(id);
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoUser',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#idProfile').val(data.ID_USER);
                $('#outputProfile').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR);
                $('#gambarProfile').val(data.GAMBAR);
                $('#hakAkses').val(data.ROLE);
                $('#namaProfile').val(data.NAMA);
                $('#noTlpProfile').val(data.NO_TLP);
                
                
            }
        });
        
    });
    $('.ModalInfoPenyiar').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoPenyiar',
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
            url: 'https://localhost/radioo/admin/getInfoUser',
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

            url: 'https://localhost/radioo/admin/getCountUser',
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
    $('.ModalInfoJadwal').on('click', function() {
        

        const id = $(this).data('id');
        
        $.ajax({
            url: 'https://localhost/radioo/admin/getInfoJadwal',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#FotoJadwal').attr('src', 'https://localhost/radioo/uploads/img/'+data.GAMBAR_JADWAL);
                $('#JudulInfo').val(data.JUDUL_JADWAL);
                $('#WaktuInfo').val(data.WAKTU);
                $('#TanggalInfo').val(data.TANGGAL_JADWAL);
                $('#DeskripsiJadwalInfo').val(data.DESCK_JADWAL);
                
            }
        });
        
    });
    $('.ModalKomentar').on('click', function() {
        

        const id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: 'https://localhost/radioo/admin/getKomentar',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                let output = '';  
                data.map((data) => {
                console.log(data);
                $("#tBodyKomentar").empty();
                  output += `
                            <tr>
                               <td>${data.NAMA}</td>
                               <td>${data.EMAIL}</td>
                               <td>
                               <div class="form-group">
                               <textarea class="form-control"  rows="5" readonly>${data.KOMENTAR}</textarea>
                                </div>
                             </td>
                               
                           </tr>
                         `;
                     
                         console.log(output);
            
                $("#tBodyKomentar").append(output);
                   })
                
            }
        });
        
    });
    
    
}
