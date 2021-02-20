<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url('user'); ?>"><i class="fa fa-home"></i> Beranda</a>
                        <span>Buku Tamu</span>
                    </div>
                </div>
            </div>
            <h2>Layanan Pengaduan</h2>
        </div>
    </div>
    <!-- Breadcrumb End -->

     <!-- Contact Section Begin -->
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
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd"
                                    height="100" style="border:0;" allowfullscreen=""></iframe>
                            </div>
                        </div>
                        <!-- Map End -->
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <h5>Alamat</h5>
                                <p>Los Angeles Gournadi, 1230 Bariasl</p>
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                <h5>Telepon</h5>
                                <span>1-677-124-44227</span>
                                <span>1-688-356-66889</span>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>
                                <h5>Email</h5>
                                <p>Support@gamail.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
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
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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