<!-- Footer Section Begin -->
<footer class="footer spad set-bg" data-setbg="<?= base_url()?>assets/user/img/footer-bg.png">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer__address">
                        <ul>
                            <li>
                                <i class="fa fa-phone"></i>
                                <p>No Telp.</p>
                                <h6>0813-3646-0000</h6>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <p>Email</p>
                                <h6>suarakota@yahoo.co.id</h6>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="footer__social">
                        <h2>Sosial Media</h2>
                        <div class="footer__social__links">
                            <a href="https://www.facebook.com/pg/suarakotaprobolinggo/about/?ref=page_internal"><i class="fa fa-facebook" style="color: #4000D9"></i></a>
                            <a href="https://twitter.com/suarakotaprob"><i class="fa fa-twitter" style="color: #7DFAE0;"></i></a>
                            <a href="https://www.instagram.com/suarakota1017fm/"><i class="fa fa-instagram" style="color: #ED7796;"></i></a>
                            <a href="https://www.youtube.com/channel/UC-O2M5ys3FpHskzTUp8WGKQ"><i class="fa fa-youtube" style="color: #F0130B;"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6">
                    <div class="footer__newslatter">
                        <!-- <div id="MyClockDisplay" class="clock" onload="showTime()">
                        </div> -->
                        <div id="displayIP">
                            <?php 
                                $queryIp = " SELECT * FROM `user_ip` ";
                                $Ipp = $this->db->query($queryIp)->num_rows();
                            ?>
                            <p style="float: center; font-size: 15px; color: white;">Jumlah Pengunjung Website RSKP = <?= $Ipp; ?> </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<div class="footer__copyright__text">
				<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with 
                    <i class="fa fa-heart" aria-hidden="true"></i> by 
                    <a href="https://colorlib.com" target="_blank">Colorlib</a> 
                </p>
			</div>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Script Menampilkan kategori -->
    
    <!-- Akhir script -->

    <!-- Js Plugins -->
    <script src="<?= base_url()?>assets/user/js/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs/dist/tf.min.js"> </script> -->
    <script src="<?= base_url()?>assets/user/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="<?= base_url()?>assets/admin/js/jquery.min.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/user/js/bootstrap.min.js"></script> -->
    <script src="<?= base_url()?>assets/user/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/jquery.barfiller.js"></script>
    <script src="<?= base_url()?>assets/user/js/jquery.countdown.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/jquery.slicknav.js"></script>
    <script src="<?= base_url()?>assets/user/js/owl.carousel.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/main.js"></script>
    <script src="https://kit.fontawesome.com/e5e5df5e31.js" crossorigin="anonymous"></script>

    <!-- Music Plugin -->
    <script src="<?= base_url()?>assets/user/js/jquery.jplayer.min.js"></script>
    <script src="<?= base_url()?>assets/user/js/jplayerInit.js"></script>

    
 <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 
    
    <!-- <script src="<?= base_url()?>assets/admin/js/script.js"></script>  -->

    <script src="<?= base_url()?>assets/user/js/galeri.js"></script>

    <!-- <script>
        window.onscroll = function() {myFunction()};

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
        }
    </script> -->

    <script>
        const flashData = $('.flash-data').data('flashdata');
        if(flashData){
            if(flashData == 'Gambar Gagal Diupload' || flashData == 'Cek Kembali Data Anda' || flashData == 'Password Salah!' 
            || flashData == 'Akun Belum diaktivasi!' || flashData == 'Akun Belum Terdaftar!'){
                Swal.fire({
                    title: '',
                    text: flashData,
                    icon: 'warning'
                });
            } else{
                Swal.fire({
                    title: '',
                    text: flashData,
                    icon: 'success'
                });
            };
        };
    </script>

    <script>
        var loadProfile = function(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function(){
                var dataURL = reader.result;
                var output = document.getElementById('outputProfil');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        };
    </script>

    <script>
    function currentTime() {
    var date = new Date(); /* creating object of Date class */
    var hour = date.getHours();
    var min = date.getMinutes();
    var sec = date.getSeconds();
    var midday = "AM";
    midday = (hour >= 12) ? "PM" : "AM"; /* assigning AM/PM */
    hour = (hour == 0) ? 12 : ((hour > 12) ? (hour - 12): hour); /* assigning hour in 12-hour format */
    hour = changeTime(hour);
    min = changeTime(min);
    sec = changeTime(sec);
    document.getElementById("digit_clock_time").innerText = hour + " : " + min + " : " + sec + " " + midday; /* adding time to the div */
    
    var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    var days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    
    var curWeekDay = days[date.getDay()]; // get day
    var curDay = date.getDate();  // get date
    var curMonth = months[date.getMonth()]; // get month
    var curYear = date.getFullYear(); // get year
    var date = curWeekDay+", "+curDay+" "+curMonth+" "+curYear; // get full date
    document.getElementById("digit_clock_date").innerHTML = date;
    
    var t = setTimeout(currentTime, 1000); /* setting timer */
    }
 
    function changeTime(k) { /* appending 0 before time elements if less than 10 */
        if (k < 10) {
            return "0" + k;
        }
        else {
            return k;
        }
    } 
    currentTime();
    </script>

</body>

</html>