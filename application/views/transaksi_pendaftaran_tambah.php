<?php 
      $no_daftar = $auto->kode_max;
        $noUrut = (int) substr($no_daftar, 4, 6);
        $noUrut++;
        $char = "NTDF";
        $no_daftar = $char . sprintf("%06s", $noUrut);
 ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
           
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Transaksi Pendaftaran</h1>
          </div>
          
         
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/transaksi-pendaftaran/simpan">
          <div class="row">
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pendaftaran</h6>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                        <label for="no_daftar">No Daftar</label>
                        <input type="text" class="form-control" id="no_daftar" placeholder="No Daftar (Otomatis)" readonly value="<?php echo $no_daftar ?>" name="no_daftar">
                      </div>
                      <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" value="<?php echo date("Y-m-d") ?>" name="tanggal" readonly>
                      </div>
                      <div class="input-group">
                        <label for="kode_poli">Pilih Poli</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="kode_poli" name="kode_poli" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-poli" data-toggle="modal" data-target="#ModalPoli">Pilih Poli</button>
                        </div>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="nama_poli" readonly>
                      </div>
                      
                      <div class="input-group">
                        <label for="kode_dokter">Pilih Dokter</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="kode_dokter" name="kode_dokter" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-dokter" data-toggle="modal" data-target="#ModalDokter">Pilih Dokter</button>
                        </div>
                      </div>

                       <div class="form-group">
                        <input type="text" class="form-control" id="nama_dokter" readonly>
                      </div>
                      <div class="form-group">
                        <label for="no_antri">Antrian</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="no_antri" name="no_antri" readonly>
                      </div>
                      
                  </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pasien</h6>
                  </div>
                  <div class="card-body">
                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" id="btn-pasien-baru" type="button">Pasien Baru</button>  
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" id="btn-pasien-lama" type="button">Pasien Lama</button>                       
                      </div>


                      <div class="input-group">
                        <label for="no_pasien">Nomor Pasien</label>
                      </div>

                      <div class="input-group mb-3">
                        <input type="text" class="form-control d-none d-sm-inline-block" id="no_pasien" name="no_pasien" readonly>
                        <div class="input-group-append">
                        <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-pasien" data-toggle="modal"  data-target="#ModalPasien">Pilih Pasien</button>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="nama_pasien">Nama Pasien</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_pasien" name="nama_pasien" required>
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                          <option value="">== Pilih Jenis Kelamin==</option>
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control mr-2 d-none d-sm-inline-block" id="tanggal_lahir" name="tanggal_lahir" readonly required>
                      </div>
                      <div class="form-group">
                        <label for="usia">Usia</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="usia" name="usia" required>
                      </div>
                      <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="no_telp" name="no_telp" required>
                      </div>
                      <div class="form-group">
                        <label for="status">Status Pasien</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="status" name="status" readonly>
                      </div>
                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Pendaftaran</button>
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

<!-- Modal Dokter -->
<div class="modal fade" id="ModalDokter" tabindex="-1" role="dialog" aria-labelledby="ModalDokterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalDokterTitle">Data Dokter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contentModalDokter">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal Pasien -->
<div class="modal fade" id="ModalPasien" tabindex="-1" role="dialog" aria-labelledby="ModalPasienTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalPasienTitle">Data Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="contentModalPasien">
        
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/transaksi-pendaftaran">Yes</a>
        </div>
      </div>
    </div>
  </div>