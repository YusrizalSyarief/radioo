<!-- Modal Rating Web -->
<div class="modal fade" id="ratingWeb" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Rating Web</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
            <p> Bagaimana menurut anda mengenai web ini ?
            </p>
         <form class="user"method="post" action="">
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-thumbs-up fa-2x"></i></a>
                    &emsp; 
                    <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-fw fa-thumbs-down fa-2x"></i></a>
                </div>
            </div>
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" readonly>
            </div>
            <div class="form-floating">
                <label for="floatingTextarea">Komentar</label>
                <textarea class="form-control" placeholder="..." id="floatingTextarea"></textarea> 
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

<!-- Modal Rating Acara -->
<div class="modal fade" id="ratingAcara" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form class="user"method="post" action="<?= base_url('user/ratingWeb'); ?>">
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-fw fa-thumbs-up fa-2x"></i></a> 
                        &emsp;
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-fw fa-thumbs-down fa-2x"></i></a>
                        <br>
                    </div>
                </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" readonly>
            </div>
            <div class="form-floating">
                <label for="floatingTextarea">Komentar</label>
                <textarea class="form-control" placeholder="..." id="floatingTextarea"></textarea> 
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

<!-- Modal Profile Penyiar -->
<div class="modal fade" id="profilePenyiar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <form class="user"method="post" action="<?= base_url('user/ratingAcara'); ?>">
                <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-fw fa-thumbs-up fa-2x"></i></a> 
                        &emsp;
                        <a href="https://www.youtube.com/watch?v=K4DyBUG242c" class="play-btn video-popup"><i class="fa fa-fw fa-thumbs-down fa-2x"></i></a>
                        <br>
                    </div>
                </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" readonly>
            </div>
            <div class="form-floating">
                <label for="floatingTextarea">Komentar</label>
                <textarea class="form-control" placeholder="..." id="floatingTextarea"></textarea> 
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

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
         <form class="user"method="post" action="">
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email">
            </div>
            <div class="form-group">
               <input type="password" class="form-control form-control-user" id="passwordL" name="passwordL" placeholder="Password">
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalRegister">Buat Akun Baru</button>
            <button class="btn btn-primary" type="submit" >Masuk</button>
         </div>
      </form>
      </div>
   </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="modalRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register Akun Baru</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form class="user"method="post" action="<?= base_url('user/register'); ?>">
                <div class="form-group">
                    <small class="form-text text-danger">*Harus di isi!*</small>
                    <input type="text" class="form-control form-control-user" id="NamaU" name="NamaU" placeholder="Nama" value="<?= set_value('NamaU'); ?>">
                </div>
                <div class="form-group">
                    <small class="form-text text-danger">*Harus di isi!*</small>
                    <input type="text" class="form-control form-control-user" id="EmailU" name="EmailU" placeholder="Alamat Email" value="<?= set_value('EmailU'); ?>">
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <small class="form-text text-danger">*Minimal 8 Karakter!*</small>
                        <input type="password" class="form-control form-control-user" id="passwordR" name="passwordR" placeholder="Password">
                    </div>
                    <div class="col-sm-6">
                        <small class="form-text text-danger">*Harus Sama dengan Password!*</small>
                        <input type="password" class="form-control form-control-user" id="passwordR2" name="passwordR2" placeholder="Ulangi Password">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <button class="btn btn-primary" data-toggle="modal" data-dismiss="modal" data-target="#modalLogin" >Kembali ke Login</button>
                <button class="btn btn-primary" type="submit" >Buat Akun</button>
            </div>
        </form>
        </div>
    </div>
</div>