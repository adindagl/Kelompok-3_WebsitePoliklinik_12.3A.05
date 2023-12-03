<?php $res=$res->row_array() ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Obat</h1>
          </div>

         
          
          <!---->
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-obat/perbarui">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Obat</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="kode_obat">Kode Obat</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="kode_obat" name="kode_obat"  value="<?php echo $res['kode_obat'] ?>" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_obat" name="nama_obat"  value="<?php echo $res['nama_obat'] ?>" required>
                      </div>
                    
                       <div class="form-group">
                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="jumlah_obat" name="jumlah_obat"  value="<?php echo $res['jumlah_obat'] ?>" required>
                      </div>

                      <div class="form-group">
                         <label for="jenis">Jenis</label>
                         <select name="jenis" class="form-control mr-2 d-none d-sm-inline-block" id="jenis">
                           <option value="">Pilih</option>
                           <option value="Tablet" <?php if($res['jenis']=="Tablet"){ echo "selected";} ?>>Tablet</option>
                           <option value="Kaplet" <?php if($res['jenis']=="Kaplet"){ echo "selected";} ?>>Kaplet</option>
                           <option value="Kapsul" <?php if($res['jenis']=="Kapsul"){ echo "selected";} ?>>Kapsul</option>
                           <option value="Cair" <?php if($res['jenis']=="Cair"){ echo "selected";} ?>>Cair</option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label for="satuan">Jenis</label>
                         <select name="satuan" class="form-control mr-2 d-none d-sm-inline-block" id="jenis">
                           <option value="">Pilih</option>
                           <option value="Strip" <?php if($res['satuan']=="Strip"){ echo "selected";} ?>>Strip</option>
                           <option value="Ampule" <?php if($res['satuan']=="Ampule"){ echo "selected";} ?>>Ampule</option>
                           <option value="Botol" <?php if($res['satuan']=="Botol"){ echo "selected";} ?>>Botol</option>
                           <option value="Pcs" <?php if($res['satuan']=="Pcs"){ echo "selected";} ?>>Pcs</option>
                         </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="harga_modal">Harga Awal</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="harga_modal" name="harga_modal"  value="<?php echo $res['harga_modal'] ?>" required>
                      </div>

              
                       <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="harga" name="harga"  value="<?php echo $res['harga'] ?>" readonly>
                      </div>

                     <div class="form-group">
                        <label for="tgl_masuk">Tanggal Masuk</label>
                        <input type="date" class="form-control mr-2 d-none d-sm-inline-block" id="tgl_masuk" name="tgl_masuk" readonly value="<?php echo date('Y-m-d') ?>">
                      </div>
                      
                      <div class="form-group">
                         <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit">Simpan Obat</button>
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/data-obat">Yes</a>
        </div>
      </div>
    </div>
  </div>