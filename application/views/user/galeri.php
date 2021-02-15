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
                        <span>Galeri RSKP</span> 
                    </div>
                </div>
                <div class="col-lg-8">
					<br>
                    <?php
                    $queryGaleri = " SELECT * FROM `galeri` ";
                    $Galeri = $this->db->query($queryGaleri)->result_array();
                    ?>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Pilih Kategori</label>
                        </div>
                        <select class="custom-select" id="pilihan" name="pilihan">
                            <option disabled selected>Kategori...</option>
                            <?php foreach ($Galeri as $p) : ?>
                            <option nilai="<?=$p['ID_KATEGORI'];?>"><?= $p['KATEGORI']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <input type="text" id="idNilai" name="idnilai" hidden>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Breadcrumb End -->

    <!-- Discography Section Begin -->
    <section class="discography spad">
        <div class="container">

            <?php
    
            $nilai = 2;
                switch(isset($nilai)){
                    case $nilai == 1 :

                        $queryGaleri2 = " SELECT * FROM `galeri` where `ID_KATEGORI` = 1 ";
                        $Galeri2 = $this->db->query($queryGaleri2)->result_array();
                    break;
                    case $nilai == 2 :

                        $queryGaleri2 = " SELECT * FROM `galeri` where `ID_KATEGORI` = 2 ";
                        $Galeri2 = $this->db->query($queryGaleri2)->result_array();
                    break;
                    default:

                        $queryGaleri2 = " SELECT * FROM `galeri` where `ID_KATEGORI` = 1 ";
                        $Galeri2 = $this->db->query($queryGaleri2)->result_array();
                }
                
            ?>

                
                <?php foreach ($Galeri2 as $p2) : ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <h2><?= $p2['KATEGORI'] ?></h2>
                        <h1><?= $p2['KATEGORI'] ?></h1>
                    </div>
                </div>
            </div>
                
            <div class="row">
                
                <?php
                switch(isset($nilai)){
                    case $nilai == 2 :
                ?>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="youtube__item">
                        <div class="youtube__item__pic set-bg" data-setbg="<?= base_url()?>assets/user/img/youtube/youtube-1.jpg">
                            <a href="<?= $p2['NAMA_FILE']; ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                        </div>
                        <div class="youtube__item__text">
                            <h4><?= $p2['JUDUL']; ?></h4>
                        </div>
                    </div>
                </div>

                <?php
                    break;
                    case $nilai == 1:
                ?>

                <div class="col-lg-7 p-0">
                    <div class="track__content nice-scroll">
                        <div class="single_player_container">
                            <h4><?= $p2['JUDUL']; ?></h4>
                            <div class="jp-jplayer jplayer" data-ancestor=".jp_container_1"
                                data-url="<?= base_url($p2['NAMA_FILE']); ?>"></div>
                            <div class="jp-audio jp_container_1" role="application" aria-label="media player">
                                <div class="jp-gui jp-interface">
                                    <!-- Player Controls -->
                                    <div class="player_controls_box">
                                        <button class="jp-play player_button" tabindex="0"></button>
                                    </div>
                                    <!-- Progress Bar -->
                                    <div class="player_bars">
                                        <div class="jp-progress">
                                            <div class="jp-seek-bar">
                                                <div>
                                                    <div class="jp-play-bar">
                                                        <div class="jp-current-time" role="timer" aria-label="time">0:00
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
                                    </div>
                                    <!-- Volume Controls -->
                                    <div class="jp-volume-controls">
                                        <button class="jp-mute" tabindex="0"><i
                                                class="fa fa-volume-down"></i></button>
                                        <div class="jp-volume-bar">
                                            <div class="jp-volume-bar-value" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    break;
                }
                ?>        

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Discography Section End -->

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>