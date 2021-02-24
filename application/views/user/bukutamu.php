<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Judul -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="<?= base_url('user'); ?>">
                        <i class="fa fa-home"></i> 
                        Beranda
                    </a>
                    <span>Buku Tamu</span>
                </div>
            </div>
        </div>
    <h2>Layanan Pengaduan</h2>
    </div>
</div>
<!-- Judul -->

<!-- Main Content -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__address">
                    <div class="section-title">
                        <h3>Informasi Situs</h3>
                    </div>
                    &emsp;
                    <!-- Map Begin -->
                    <div class="map">
                        <div class="container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1976.6841466166882!2d113.21460655791037!3d-7.750704640896461!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7adbdff46c665%3A0x2d244b28c143883!2sRadio%20Suara%20Kota%20101%2C7%20FM!5e0!3m2!1sid!2sid!4v1614143692274!5m2!1sid!2sid" 
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                            <br> <br>
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <h5>Alamat</h5>
                                    <p>Tisnonegaran, Kec. Kanigaran, Kota Probolinggo, Jawa Timur 67211</p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <h5>Telepon</h5>
                                    <span>0813-3646-0000</span>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <h5>Email</h5>
                                    <p>suarakota@yahoo.co.id</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Map End -->    
                </div>
            </div>
            <!-- Form Pengaduan -->
            <div class="col-lg-8">
                <div class="contact__form">
                    <div class="section-title">
                        <h3>Form Saran dan Pengaduan</h3>
                        <?= $this->session->flashdata('pesan'); ?>
                    </div>
                    <p>Ketentuan Pengisian Saran dan Pengaduan. <br>
                    1. Pastikan telah login sebelum mengisi form saran dan pengaduan. <br>
                    2. Dilarang menggunakan kata-kata mengandung SARA, Pornografi, Pelecehan, Ancaman yang dapat menyinggung perasaan orang lain.
                    </p>
                    <form method="post" action="<?php echo base_url(); ?>user/pengajuan">
                    <div class="input__list">
                        <input type="text" id="namaTamu" name="namaTamu" placeholder="Nama">
                        <input type="text" id="emailTamu" name="emailTamu" placeholder="Email">
                    </div>
                    <textarea id="isiTamu" name="isiTamu" placeholder="Isi Pengaduan"></textarea>
                    <?= form_error('isiTamu', '<small class="text-danger pl-3">', '</small>'); ?>
                    <button type="submit" class="site-btn">Kirim</button>
                    </form>
                </div>
            </div>
            <!-- Form Pengaduan -->
        </div>
    </div>
</section>
<!-- Main Content -->

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>