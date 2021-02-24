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
                <!-- Looping Kategori dalam Select -->
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pilih Format File
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item coba1" id="coba1" href="#">Youtube</a>
                        <a class="dropdown-item coba" id="coba" href="#">Audio</a>
                    </div>
                    <input type="text" id="fie" name="fie" value="" hidden>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Discography Section Begin -->
<section class="discography spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-title" >
                    <!-- Pilihan Format File -->
                    <div class="judul">
                        <h2 id="judulKategori">Galeri</h2>
                        <h1 id="judulKategori2">Galeri</h1>
                    </div>
                    <div class="kategori">
                        <br>
                        <?php foreach ($kategori as $k) : ?>
                        <label for="<? $k['NAMA_KATEGORI']; ?>"><?= $k['NAMA_KATEGORI']; ?></label> 
                        <input type="checkbox" id="<? $k['ID_KATEGORI']; ?>" onclick="kategori()">
                        &emsp;
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>   
        <div class="row">
            <?php 
                foreach ($format as $f) :
                $kate = $f['KATEGORI'];
                $id = $f['ID_KATEGORI'];
    
                    switch(isset($kate)){
                        case $kate == 'youtube' :
                            // if($id)
            ?>            
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg" data-setbg="<?= base_url()?>assets/user/img/youtube/youtube-1.jpg">
                        <a href="<?= $f['NAMA_FILE']; ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4><?= $f['JUDUL']; ?></h4>
                        <p><?= $f['DESCK_GALERI']; ?></p>
                    </div>
                </div>
            </div>
            <?php
                        break;
                        case $kate == 'audio' :
            ?>
            <div class="col-lg-7 p-0">
                <div class="track__content nice-scroll">
                <div class="single_player_container">
                        <h4><?= $f['JUDUL']; ?></h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?=$f['ID_GALERI']; ?>" id="jp_jplayer_<?=$f['ID_GALERI']; ?>" data-url="<?= base_url('uploads/'); ?><?=$f['NAMA_FILE']; ?>">
                        </div>
                        <div class="jp-audio jp_container_<?=$f['ID_GALERI']; ?>" role="application" aria-label="media player">
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
                                    <div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00
                                    </div>
                                </div>
                                <!-- Volume Controls -->
                                <div class="jp-volume-controls">
                                    <button class="jp-mute" tabindex="0"><i class="fa fa-volume-down"></i></button>
                                    <div class="jp-volume-bar">
                                        <div class="jp-volume-bar-value" style="width: 0%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                        break;
                        };
                endforeach;
            ?> 
            <!-- Akhir Looping Isi Kategori -->
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

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>

<!-- Spasi -->
<section class="discography spad">

</section>