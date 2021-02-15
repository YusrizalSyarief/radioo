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
                  <a class="btn btn-primary" href="login.html">Logout</a>
               </div>
         </div>
      </div>
   </div>


<!-- profil user -->
<div class="modal fade" id="formProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Profil</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                  </button>
            </div>
            <div class="modal-body">
               <form class="user"method="post" action="">
               <div class="form-group ">
                  <img src="<?= base_url()?>assets/user/img/events/event-2.jpg" alt="..." class="  shadow-lg p-3 mb-5 bg-white rounded" style="width: 200px; height: 200px;"><br>
                  <label for="exampleFormControlFile1">Ubah Foto</label><br>
                  <input type="file" class="form-control-file" id="exampleFormControlFile1" name="UbahFoto" >
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">Nama</label>
                  <input type="text" class="form-control " id="nama" name="nama"  >
               </div>
               <div class="form-group">
                  <label for="exampleFormControlFile1">No Tlp</label>
                  <input type="text" class="form-control " id="noTlp" name="noTlp"  >
               </div>
               
            </div>
               <div class="modal-footer">
                     <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                     <a class="btn btn-primary" href="login.html">Ubah</a>
               </div>
               </form>
            </div>
      </div>

</div>
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