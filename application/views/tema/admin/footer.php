 <!-- Footer -->
<footer class="sticky-footer bg-white">
   <div class="container my-auto">
      <div class="copyright text-center my-auto">
         <span>Copyright &copy; Your Website 2020</span>
      </div>
   </div>
</footer>
            <!-- End of Footer -->

      </div>
      <!-- End of Content Wrapper -->
   </div>
   <!-- End of Page Wrapper -->

   <!-- Scroll to Top Button-->
   <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
   </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                  <a class="btn btn-primary" href="user">Logout</a>
               </div>
         </div>
      </div>
   </div>
<!-- merubah password user -->
<div class="modal fade" id="formGantiPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
         <form class="user"method="post" action="<?php echo base_url(); ?>admin/ubahPass">
         <input type="hidden" name='idGantiPass' id='idGantiPass' value="1">
               <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  <small class="form-text text-danger">Min 8</small>
                     <input type="password" class="form-control " id="Ubahpassword" name="Ubahpassword" placeholder="Password" required>
                  </div>
               <div class="col-sm-6">
               <small class="invisible">s</small>
                  <input type="password" class="form-control " id="Ubahpassword2" name="Ubahpassword2" placeholder="Ulangi Password" required>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
            <button class="btn btn-primary" type="submit">Ubah Password</button>
         </div>
      </form>
      </div>
   </div>
</div>

<!-- profil user -->
<div class="modal fade" id="formProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
                  <h5 class="modal-title" >Profil</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
            </div>
            <div class="modal-body">
               <form class="user"method="post" action="<?php echo base_url(); ?>admin/ubahProfile" enctype="multipart/form-data">
               <input type="hidden" name='idProfile' id='idProfile' value="1">
               <input type="hidden" name='gambarProfile' id='gambarProfile' value="1">
               <div class="form-group ">
                  <img src="<?= base_url()?>assets/user/img/blank.png" alt="..." id="outputProfile" class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                  <label for="exampleFormControlFile1">Ubah Foto</label><br>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UbahFotoProfile" onchange="loadProfile(event)">
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">Hak Akses</label>
                  <input type="text" class="form-control " id="hakAkses" name="hakAkses"  readonly>
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">Nama</label>
                  <input type="text" class="form-control " id="namaProfile" name="namaProfile"  >
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">No Tlp</label>
                  <input type="text" class="form-control " id="noTlpProfile" name="noTlpProfile"  >
               </div>
               
            </div>
               <div class="modal-footer">
                     <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                     <button class="btn btn-primary" type="submit">Ubah</button>
               </div>
               </form>
            </div>
      </div>

</div>
<script>
var loadProfile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
    var output = document.getElementById('outputProfile');
    output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
};
</script>
<script src="<?= base_url()?>assets/admin/js/jquery.min.js"></script>
 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <!-- <script src="<?= base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script> -->

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url()?>assets/admin/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?= base_url()?>assets/sb/vendor/chart.js/Chart.min.js"></script>


<!-- Page level custom scripts -->
<script src="<?= base_url()?>assets/sb/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url()?>assets/sb/js/demo/chart-pie-demo.js"></script> 

<script src="<?= base_url()?>assets/admin/js/script.js"></script> 



 </body>

 </html>