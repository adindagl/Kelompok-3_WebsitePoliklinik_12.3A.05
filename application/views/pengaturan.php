
        <!-- Begin Page Content -->
        <div class="container-fluid">

        <!---->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-success">Pengaturan</h1>
          </div>
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4 col-md-5">
            <div class="card-body">
              <?php           
                        if($message=$this->session->flashdata('message')):
                    ?>
                        <div class="animated bounceInDown sufee-alert alert with-close btn-info alert-dismissible fade show">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>

              <form action="<?php echo base_url('web/pengaturan-proses') ?>" method="post">
                <input type="hidden" name="session_set" value="<?php echo $this->session->userdata('tipe_login');  ?>">
                Password Baru<input type="password" name="password" class="form-control mr-2 d-none d-sm-inline-block">
                Verifikasi Password Baru<input type="password" name="password_ver" class="form-control mr-2 d-none d-sm-inline-block">
                <button type="submit" class="mt-2 d-none d-sm-inline-block btn btn-md btn-success shadow-sm">Submit</button>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

