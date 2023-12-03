<?php 
        $kode_poli = $auto->kode_max;
        $noUrut = (int) substr($kode_poli, 2, 3);
        $noUrut++;
        $char = "KP";
        $kode_poli = $char . sprintf("%03s", $noUrut);

     ?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Poli</h1>
          </div>

         
          
         
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-poli/simpan">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Poli</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="kode_poli">Kode Poli</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="kode_poli" name="kode_poli"  value="<?php echo $kode_poli ?>" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama_poli">Nama Poli</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_poli" name="nama_poli"  value="" required>
                      </div>
                    
                       <div class="form-group">
                        <label for="lantai">Ruang</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="lantai" name="lantai"  value="" required>
                      </div>

                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Poli</button>
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/data-poli">Yes</a>
        </div>
      </div>
    </div>
  </div>