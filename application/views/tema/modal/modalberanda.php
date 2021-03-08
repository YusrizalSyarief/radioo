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
         <form class="user"method="post" action="<?= base_url('user/ratingWeb'); ?>">
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <i class="fa fa-thumbs-up fa-2x" style="color: blue;" id="likeW"></i>
                    &emsp; 
                    <i class="fa fa-fw fa-thumbs-down fa-2x" style="color: blue;" id="dislikeW"></i>
                    <input type="text" class="form-control form-control-user" id="idW" name="idW" value="<?= $u['ID_USER']; ?>">
                    <input type="text" class="form-control form-control-user" id="ratingW" name="ratingW">
                </div>
            </div>
            <div class="form-group">
               <input type="text" class="form-control form-control-user" id="emailW" name="emailW" placeholder="Alamat email" value="<?= $u['EMAIL']; ?>" readonly>
            </div>
            <div class="form-floating">
                <label for="floatingTextareaW">Komentar</label>
                <textarea class="form-control" placeholder="..." id="floatingTextareaW" name="floatingTextareaW"></textarea> 
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