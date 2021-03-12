<!-- Streaming Section -->
<section class="hero spad set-bg" data-setbg="<?= base_url()?>assets/logo/radio-bg.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <span>Selamat datang</span>
                    <h1>Radio Suara Kota Probolinggo</h1>
                    <p>Now Streaming</p>
                    
                    
                    <a href="<?= $stream['LINK']; ?>" class="play-btn video-popup"><i class="fa fa-play"></i></a> <br> <br>
                    <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#ratingWeb">Rating Web</button> 
                    
                </div> 
                
                <!-- <div class="stations nowplaying">
                    <div class="radio-player-widget" stationname="Radio Suara Kota Probolinggo" downloadplaylisturi="/public/46/playlist.pls" requestlisturi="/api/station/46/requests" customfields=""> 
                        <div class="now-playing-details">
                            <div class="now-playing-art">
                                <a href="http://alhastream.my.id/logo/RadioSuaraKotaProbolinggo.jpeg" data-fancybox="" target="_blank">
                                <img src="http://alhastream.my.id/logo/RadioSuaraKotaProbolinggo.jpeg" alt="Album Art"></a>
                            </div> 
                            <div class="now-playing-main"> 
                                <div>
                                    <h4 class="now-playing-title">Stream Offline</h4> 
                                    <h5 class="now-playing-artist"></h5>
                                </div> 
                            </div>
                        </div> 
                        <hr> 
                        <div class="radio-controls">
                            <div class="radio-control-play-button">
                                <a href="#" role="button" title="Play" aria-label="Play"><i aria-hidden="true" class="material-icons lg">play_circle_filled</i></a>
                            </div> 
                            <div class="radio-control-select-stream">
                            </div> 
                            <div class="radio-control-mute-button"><a href="#" title="Mute" class="text-secondary">
                                <i aria-hidden="true" class="material-icons">volume_mute</i></a>
                            </div> 
                            <div class="radio-control-volume-slider">
                                <input type="range" title="Volume" min="0" max="100" step="1" class="custom-range">
                            </div> 
                            <div class="radio-control-max-volume-button">
                                <a href="#" title="Full Volume" class="text-secondary"><i aria-hidden="true" class="material-icons">volume_up</i></a>
                            </div>
                        </div>
                    </div>
                </div>  -->
            </div>   
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
            </div>
        </div>
    </div>  
    <div class="linear__icon">
        <i class="fa fa-angle-double-down"></i>
    </div>
</section>
<!-- Streaming Section -->

<!-- Jadwal Section -->
<section class="event spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Jadwal Hari Ini</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="event__slider owl-carousel">
                <?php foreach($jadwal as $j) : ?> 
                <div class="col-lg-4">
                    <div class="event__item">
                        <div class="event__item__pic set-bg" data-setbg="<?= base_url()?>uploads/img/<?= $j['GAMBAR_JADWAL']; ?>">
                            <div class="tag-date">
                                <a data-toggle="modal" class="ModalRateAcara"
                                    data-target="#rateAcara" data-id="<?= $j['ID_JADWAL']; ?>">
                                <span>Rating Acara</span>
                                </a>
                            </div>
                        </div>
                        <div class="event__item__text">
                            <h4><?= $j['JUDUL_JADWAL']; ?></h4>
                            <h4>Penyiar : <?= $j['NAMA_PENYIAR']; ?></h4>
                            <p><i class="fas fa-clock"></i><?= $j['TANGGAL_JADWAL']; ?>  <?= $j['WAKTU']; ?></p>
                        </div> 
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Jadwal Section -->

<!-- Penyiar Section -->
<section class="about spad">
    <div class="container">
    <h2><b>Penyiar</b></h2>
        <div class="row">
        <?php foreach($penyiar as $p) : ?>
            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="<?= base_url('uploads/img/')?><?= $p['GAMBAR_PENYIAR']; ?>" alt="penyiar<?= $p['ID_PENYIAR']; ?>" style="border-radius: 50%; weight: 400px; height: 400px;"><br> <br> <br>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <h2><?= $p['NAMA_PENYIAR']; ?></h2>
                        <h1><?= $p['NAMA_PENYIAR']; ?></h1>
                    </div>
                    <p><?= $p['DESCK']; ?></p>
                    <!-- <a href="#" class="primary-btn">CONTACT ME</a> -->
                    <?php switch($p['NAMA_PENYIAR'] != null){
                            case $p['INSTAGRAM'] != null :
                    ?>
                    <a href="<?= base_url($p['INSTAGRAM']); ?>"><i class="fa fa-instagram fa-3x" style="color: #ED7796;"></i></a>
                    &emsp;
                    <?php   
                            case $p['FACEBOOK'] != null :
                    ?>
                    <a href="<?= base_url($p['FACEBOOK']); ?>"><i class="fa fa-facebook fa-3x" style="color: #4000D9"></i></a>
                    &emsp;
                    <?php   
                            case $p['TWITTER'] != null :
                    ?>
                    <a href="<?= base_url($p['TWITTER']); ?>"><i class="fa fa-twitter fa-3x" style="color: #7DFAE0;"></i></a>
                    <?php   break;
                        }
                    ?>
                </div>
            </div>
        <?php endforeach; ?>    
        </div>
    </div>
</section>
<!-- Penyiar Section -->

<!-- Galeri Section -->
<section class="track spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="section-title">
                    <h2>Galeri RSKP</h2>
                    <h1>Galeri RSKP</h1>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="track__all">
                    <a href="<?= base_url('user/galeri'); ?>" class="primary-btn border-btn">Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 p-0">
                <div class="track__content nice-scroll">
                <?php foreach($audio as $a) : ?>
                    <div class="single_player_container">
                        <h4><?= $a['JUDUL']; ?></h4>
                        <div class="jp-jplayer jplayer" data-ancestor=".jp_container_<?=$a['ID_GALERI']; ?>" id="jp_jplayer_<?=$a['ID_GALERI']; ?>" data-url="<?= base_url('uploads/'); ?><?=$a['NAMA_FILE']; ?>">
                        </div>
                        <div class="jp-audio jp_container_<?=$a['ID_GALERI']; ?>" role="application" aria-label="media player">
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
                <?php endforeach; ?>  
                </div>
            </div>
            <div class="col-lg-5 p-0">
                <div class="track__pic">
                    <img src="<?= base_url()?>assets/user/img/track-right.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Galeri Section -->

<!-- Profil Section -->
<section class="youtube spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Profil RSKP</h2>
                    <h1>Profile</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg" data-setbg="<?= base_url()?>assets/user/img/thumbs01.jpg">
                        <a href="https://www.youtube.com/watch?v=7R-RQFp_wEo" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4>Profil Kota Probolinggo</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="youtube__item">
                    <div class="youtube__item__pic set-bg" data-setbg="<?= base_url()?>assets/user/img/thumbs02.jpg">
                        <a href="https://www.youtube.com/watch?v=nX54gCTdfQE" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                    <div class="youtube__item__text">
                        <h4>Profil Suara Kota Probolinggo</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Profil Section -->

<!-- Countdown Section Begin -->
<section class="countdown spad set-bg">
    <!-- <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="countdown__text">
                    <h1>Tomorrowland 2020</h1>
                    <h4>Music festival start in</h4>
                </div>
                <div class="countdown__timer" id="countdown-time">
                    <div class="countdown__item">
                        <span>20</span>
                        <p>days</p>
                    </div>
                    <div class="countdown__item">
                        <span>45</span>
                        <p>hours</p>
                    </div>
                    <div class="countdown__item">
                        <span>18</span>
                        <p>minutes</p>
                    </div>
                    <div class="countdown__item">
                        <span>09</span>
                        <p>seconds</p>
                    </div>
                </div>
                <div class="buy__tickets">
                    <a href="#" class="primary-btn">Buy tickets</a>
                </div>
            </div>
        </div>
    </div> -->
</section>
<!-- Countdown Section End -->
<!-- Modal Rating Acara -->
    <div class="modal fade" id="rateAcara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rating Acara</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> Bagaimana menurut anda mengenai acara kami ?</p>
                        <form class="user"method="post" action="<?= base_url('user/ratingJadwal'); ?>">
                        <input type="text" name='idJ' id='idJ' value="1" hidden>
                        <input type="text" name="idUJ" id="idUJ" value="<?= $u['ID_USER']; ?>" hidden>
                        <div class="form-group">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <i class="fa fa-thumbs-up fa-2x" style="color: blue;" id="likeJ"></i>
                                &emsp; 
                                <i class="fa fa-fw fa-thumbs-down fa-2x" style="color: blue;" id="dislikeJ"></i>
                                <input type="text" name="ratingJ" id="ratingJ" hidden>
                            </div>
                        </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="emailJ" name="emailJ" placeholder="Alamat email" value="<?= $u['EMAIL'];?>"  readonly>
                    </div>
                    <div class="form-floating">
                        <label for="floatingTextareaW">Komentar</label>
                        <textarea class="form-control" placeholder="..." id="floatingTextareaW"></textarea> 
                    </div>  
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary" type="submit" >Kirim</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>