
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!---->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Transaksi Pembayaran</h1>
          </div>
          
         
          <?php           
                        if($message=$this->session->flashdata('message')):
                    ?>
                        <div class="animated bounceInDown sufee-alert alert with-close btn-danger alert-dismissible fade show">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/transaksi-pembayaran/simpan">
          <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Data</h6>
                  </div>
                  <div class="card-body">
                     
                      <div class="input-group">
                        <label for="no_daftar">No Daftar</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="no_daftar" name="no_daftar" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-data" data-toggle="modal" data-target="#ModalData">Pilih Data</button>
                        </div>
                      </div>

                       <div class="form-group">
                        <label for="nomor_pasien">Nomor Pasien</label>
                        <input type="text" class="form-control" id="nomor_pasien" name="nomor_pasien" readonly>
                      </div>

                      <div class="form-group">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" readonly>
                      </div>

                      <div class="form-group">
                        <label for="nama_dokter">Nama Dokter</label>
                        <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" readonly>
                      </div>
                      <div class="form-group">
                        <label for="tarif">Tarif</label>
                        <input type="text" class="form-control" id="tarif" name="tarif" readonly>
                      </div>
                      <div id="tabelTindakan">- Biaya Tindakan ----</div>
                      <div id="tabelResep">- Biaya Resep ----</div>
                  </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pembayaran</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="biaya_tindakan">Biaya Tindakan</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="biaya_tindakan" name="biaya_tindakan" readonly>
                      </div>
                     <div class="form-group">
                        <label for="pembayaran_obat">Pembayaran Obat</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="pembayaran_obat" name="pembayaran_obat" readonly>
                      </div>
                      <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="total" name="total" readonly>
                      </div>
                      <div class="form-group">
                        <label for="bayar">Bayar</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="bayar" name="bayar" required>
                      </div>

                      <div class="form-group">
                        <label for="kembali">Kembali</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="kembali" name="kembali" readonly>
                      </div>
                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Pembayaran</button>
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/transaksi-pembayaran">Yes</a>
        </div>
      </div>
    </div>
  </div>