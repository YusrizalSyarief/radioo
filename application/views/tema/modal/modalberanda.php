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
                    <i class="fa fa-thumbs-up fa-2x" id="likeW" data-likW="like"></i>
                    &emsp; 
                    <i class="fa fa-fw fa-thumbs-down fa-2x" id="dislikeW" data-disW="dislike"></i>
                    <input type="text" class="form-control form-control-user" id="ratingW" name="ratingW">
                </div>
            </div>
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" value="<?= $u['EMAIL']; ?>" readonly>
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
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" value="<?= $u['EMAIL']; ?>" readonly>
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
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat email" value="<?= $u['EMAIL']; ?>" readonly>
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