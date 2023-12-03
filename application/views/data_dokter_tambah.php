<?php 
        $kode_dokter = $auto->kode_max;
        $noUrut = (int) substr($kode_dokter, 2, 4);
        $noUrut++;
        $char = "D";
        $kode_dokter = $char . sprintf("%04s", $noUrut);

     ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Dokter</h1>
          </div>

          <?php           
                        if($message=$this->session->flashdata('message')):
                    ?>
                        <div class="animated bounceInDown sufee-alert alert with-close btn-success alert-dismissible fade show">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
          
         
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-dokter/simpan">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Dokter</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="kode_dokter">Kode Dokter</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="kode_dokter" name="kode_dokter"  value="<?php echo $kode_dokter ?>" readonly>
                      </div>
                      
                       <div class="form-group">
                        <label for="kode_poli">Kode Poli</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="kode_poli" name="kode_poli" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-poli" data-toggle="modal" data-target="#ModalPoli">Pilih Poli</button>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama" name="nama"  value="" required>
                      </div>
              
                      <div class="form-group">
                        <label for="sip">No. SIP (Surat Izin Praktek)</label>
                         <textarea class="form-control mr-2 d-none d-sm-inline-block" id="sip" name="sip" value="" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="tarif">Tarif</label>
                         <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="tarif" name="tarif"  value="" required>
                      </div>

                      <div class="form-group">
                        <label for="text">No. Telepon</label>
                         <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="text" name="nomor_telepon"  value="" required>
                      </div>

                      <div class="form-group">
                        <label for="alamat_dokter">Alamat</label>
                         <textarea class="form-control mr-2 d-none d-sm-inline-block" id="alamat_dokter" name="alamat" value="" required></textarea>
                      </div>
                      


                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Dokter</button>
                         <button class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#cancelModal">Batalkan</button>
                      </div>
                  </div>
                </div>
            </div>


          </div>
          </form>

        </div>
        <!-- /.container-fluid -->




<!-- Modal Poli-->
<div class="modal fade" id="ModalData" tabindex="-1" role="dialog" aria-labelledby="ModalDataTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDataTitle">Data Pendaftaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contentModalData">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Poli-->
<div class="modal fade" id="ModalPoli" tabindex="-1" role="dialog" aria-labelledby="ModalPoliTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalPoliTitle">Data Poli</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contentModalPoli">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


 <!-- Cancel Modal-->
  <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="cancelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cancelModalLabel">Anda yakin membatalkan proses ini ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Pilih "Yes" Untuk Membatalkan.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/data-dokter">Yes</a>
        </div>
      </div>
    </div>
  </div>
