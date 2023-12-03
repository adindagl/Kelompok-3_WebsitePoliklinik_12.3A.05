      </div>
      <!-- End of Main Content -->


<!-- Footer -->
      <footer class="sticky-footer text-dark">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; CliniCare 2023</span>
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
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin untuk keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Logout" untuk mengakhiri sesi ini.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-danger" href="<?php echo base_url() ?>web/logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Alert Device Modal-->
  <div class="modal fade" id="alertDevice" tabindex="-1" role="dialog" aria-labelledby="DeviceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="DeviceLabel">Pemberitahuan</h5>
        </div>
        <div class="modal-body">Maaf ukuran layar perangkat tidak memadai!!
        <br> Sebagian fungsi tidak akan berjalan dengan baik. <br>Mohon ganti keperangkat yang lebih besar lebar diatas 560px<br></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>resources/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url() ?>resources/js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url() ?>resources/js/default.js"></script>

  <script src="<?php echo base_url() ?>vendor/datatables/dt_button.js"></script>
  <script src="<?php echo base_url() ?>vendor/datatables/dt_button_print.js"></script>  

  <script>  
    $('#table-print').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'print'
                    ]
                } );
  </script>
</body>

</html>
