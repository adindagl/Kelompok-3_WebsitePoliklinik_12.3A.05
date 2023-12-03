<?php $res=$res->row_array() ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Tindakan</h1>
          </div>

         
          
          <!---->
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-tindakan/perbarui">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tindakan</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="kode_tindakan">Kode Tindakan</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="kode_tindakan" name="kode_tindakan"  value="<?php echo $res['kode_tindakan'] ?>" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama_tindakan">Nama Tindakan</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_tindakan" name="nama_tindakan"  value="<?php echo $res['nama_tindakan'] ?>" required>
                      </div>
                    
                       <div class="form-group">
                        <label for="tarif">Tarif</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="tarif" name="tarif"  value="<?php echo $res['tarif'] ?>" required>
                      </div>

                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Tindakan</button>
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
        <div class="modal-body">Pilih "Yes" untuk membatalkan.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/data-tindakan">Yes</a>
        </div>
      </div>
    </div>
  </div>