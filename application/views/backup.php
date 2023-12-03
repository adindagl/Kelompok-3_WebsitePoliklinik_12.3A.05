<!-- Begin Page Content -->
        <div class="container-fluid">

 <?php      //     
                        if($message=$this->session->flashdata('message')):
                    ?>
                        <div class="animated bounceInDown sufee-alert alert with-close btn-info alert-dismissible fade show">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
          <!-- Content Row -->
          <!---->
          <div class="row">

           
            

            <div class="col-lg-12 mb-4">

              <!-- Illustrations -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Backup & Restore</h6>
                </div>
                <div class="card-body">
                  <h4 class="display-5">Backup </h4>
                  <p>File Backup akan di simpan di *root*/backup/</p>
                  <?php 
                  $this->load->helper('directory');
                  $this->load->helper('file');
                  $map = directory_map('./backup/', TRUE, TRUE); 
                  $info=get_file_info("./backup/".$map[0]);
                  $current_backup=date('m/d/Y H.i  T', $info['date']);
                  

                  ?>
                  <p>Terakhir di backup <?php echo $current_backup ?><br></p>

                  <button class="btn btn-sm btn-info" onclick="window.location.href='<?php echo base_url('web/to-backup') ?>'">Backup</button><br><br>
                  <h4 class="display-5">Restore </h4>
                  <p>File Backup dapat di ambil dari *root*/backup/ </p>
                  <button class="btn btn-sm btn-warning" onclick="window.location.href='<?php echo base_url('web/to-restore') ?>'">Restore</button>
                </div>
              </div>

              
              

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->