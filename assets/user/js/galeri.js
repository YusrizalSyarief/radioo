$(function(){

    $('#coba1').on('click', function(){
        
        $("#judulKategori").html('Youtube');
        $("#judulKategori2").html('Youtube');

    });

    $('#coba').on('click', function(){

        $("#judulKategori").html('Audio');
        $("#judulKategori2").html('Audio');

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