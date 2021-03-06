<!-- Modal Profil -->
<div class="modal fade" id="Profil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Profil Anda</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-title center-title" >
                    <img class="img-profile rounded-circle center"
                        src="<?= base_url(); ?>uploads/img/<?= $u['GAMBAR']; ?>" style="height:180px; weight:180px;"> <br> <br>
                </div>    
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="namaP" name="namaP" placeholder="Nama User" value="<?= $u['NAMA']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="emailP" name="emailP" placeholder="Email User" value="<?= $u['EMAIL']; ?>" readonly>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="notlpP" name="nptlpP" placeholder="Nomor User" value="<?= $u['NO_TLP']; ?>" readonly>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<!-- Modal Ubah Profil -->
<div class="modal fade" id="ubahPro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Profil</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="<?= base_url('user/ubahPro'); ?>" enctype="multipart/form-data">
                <input type="hidden" name='idPro' id='idPro' value="1">
                <input type="hidden" name='GambarPro' id='GambarPro' value="1">
                <div class="section-title center-title" >
                    <img class="img-profile rounded-circle center"
                        src="<?= base_url(); ?>uploads/img/" id="outputProfil" alt="..." style="height:180px; weight:180px;"> <br> <br>
                    <div class="form-group ">
                        <label for="form-control-file">Upload Foto</label><br>    
                        <small class="form-text text-danger">Ukuran maksimal Foto 1000x1000 pixel potrait, Berformat JPG atau PNG</small>
                        <input type="file" class="form-control-file" id="UpdateFoto" name="UpdateFoto" accept="image/*" onchange="loadProfile(event)">
                    </div>
                </div>    
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="namaR" name="namaR" placeholder="Nama User" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="emailR" name="emailR" placeholder="Email User" >
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="notlpR" name="notlpR" placeholder="Nomor User" >
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


<!-- Modal Ubah Password -->
<div class="modal fade" id="ubahPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="user"method="post" action="<?= base_url('user/ratingAcara'); ?>">
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="passwordLB" name="passwordLB" placeholder="Password Baru">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="passwordLB2" name="passwordLB2" placeholder="Ulangi Password Baru">
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
</div>