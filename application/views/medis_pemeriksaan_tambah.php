        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
           
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Pemeriksaan</h1>
          </div>
          
         
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/medis-periksa/simpan">
          <div class="row">

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pemeriksaan</h6>
                  </div>
                  <div class="card-body">
                     
                     <div class="form-group">
                        <label for="no_daftar">No Daftar</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="no_daftar" name="no_daftar" readonly value="<?php echo $id ?>">
                      </div>
                      <div class="form-group">
                        <label for="tgl_periksa">Tanggal Periksa</label>
                        <input type="date" class="form-control mr-2 d-none d-sm-inline-block" id="tgl_periksa" name="tgl_periksa" readonly value="<?php echo date('Y-m-d') ?>">
                      </div>
                      <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea class="form-control mr-2 d-none d-sm-inline-block" id="keluhan" name="keluhan" required></textarea>
                      </div>

                      <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                         <textarea class="form-control mr-2 d-none d-sm-inline-block" id="diagnosa" name="diagnosa" required></textarea>
                      </div>
                      
                    

                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Pemeriksaan</button>
                         <button class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#cancelModal">Batalkan</button>
                      </div>
                  </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Detail</h6>
                  </div>
                  <div class="card-body">
                     
                     
                      
                      <div class="form-group">
                        <label for="kode_tindakan">Kode Tindakan</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="kode_tindakan" name="kode_tindakan" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-tindakan" data-toggle="modal" data-target="#ModalTindakan">Pilih Tindakan</button>
                        </div>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_tindakan" name="nama_tindakan" readonly>
                      </div>
                      <div class="form-group">
                        <textarea class="form-control mr-2 d-none d-sm-inline-block" id="ket" name="ket" placeholder="Keterangan.."></textarea>
                      </div>

                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="tambah_tindakan">Tambah Tindakan</button>
                      </div>

                      <div id="view-table">
                        
                      </div>
                  </div>
                </div>
            </div>


          </div>
          </form>

        </div>
        <!-- /.container-fluid -->




<!-- Modal Tindakan-->
<div class="modal fade" id="ModalTindakan" tabindex="-1" role="dialog" aria-labelledby="ModalDataTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDataTitle">Tindakan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contentModalTindakan">
        
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/medis-periksa">Yes</a>
        </div>
      </div>
    </div>
  </div>