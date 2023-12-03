<?php $res=$res->row_array() ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Pasien</h1>
          </div>

         
          
          
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-pasien/perbarui">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Pasien</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="nomor_pasien">Nomor Pasien</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nomor_pasien" name="nomor_pasien"  value="<?php echo $res['nomor_pasien'] ?>" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama" name="nama_pasien"  value="<?php echo $res['nama_pasien'] ?>" required>
                      </div>

                      <div class="form-group">
                         <label for="jk">Jenis Kelamin</label>
                         <select name="jenis_kelamin" class="form-control mr-2 d-none d-sm-inline-block" id="jk">
                           <option value="">Pilih</option>
                           <option value="laki-laki" <?php if($res['jenis_kelamin']=="laki-laki"){echo "selected";} ?>>Laki-laki</option>
                           <option value="perempuan" <?php if($res['jenis_kelamin']=="perempuan"){echo "selected";} ?>>Perempuan</option>
                         </select>
                      </div>
              
                      <div class="form-group">
                        <label for="alamat_pasien">Alamat Pasien</label>
                         <textarea class="form-control mr-2 d-none d-sm-inline-block" id="alamat_pasien" name="alamat"  required><?php echo $res['alamat'] ?></textarea>
                      </div>

                      <div class="form-group">
                        <label for="tl">Tanggal Lahir</label>
                         <input type="date" class="form-control mr-2 d-none d-sm-inline-block" id="tl" name="tanggal_lahir"  value="<?php echo $res['tanggal_lahir'] ?>" required>
                      </div>

                       <div class="form-group">
                        <label for="usia">Usia</label>
                         <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="usia_pasien" name="usia"  value="<?php echo $res['usia'] ?>" readonly>
                      </div>


                      <div class="form-group">
                         <label for="nomor_telepon">Nomor Telepon</label>
                         <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="nomor_telepon_pasien" name="nomor_telepon"  value="<?php echo $res['nomor_telepon'] ?>" required>
                      </div>


                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Pasien</button>
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/data-pasien">Yes</a>
        </div>
      </div>
    </div>
  </div>