<?php 
        $kode_obat = $auto->kode_max;
        $noUrut = (int) substr($kode_obat, 1, 4);
        $noUrut++;
        $char = "K";
        $kode_obat = $char . sprintf("%04s", $noUrut);

     ?>
        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Obat</h1>
          </div>

         
          
         
          <!-- DataTales Example -->
          <form method="post" action="<?php echo base_url() ?>web/data-obat/simpan">
          <div class="row">

            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form Obat</h6>
                  </div>
                  <div class="card-body">
                     <div class="form-group">
                        <label for="kode_obat">Kode Obat</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="kode_obat" name="kode_obat"  value="<?php echo $kode_obat ?>" readonly>
                      </div>
                      
                      <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" class="form-control mr-2 d-none d-sm-inline-block" id="nama_obat" name="nama_obat"  value="" required>
                      </div>
                    
                       <div class="form-group">
                        <label for="jumlah_obat">Jumlah Obat</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="jumlah_obat" name="jumlah_obat"  value="" required>
                      </div>

                      <div class="form-group">
                         <label for="jenis">Jenis</label>
                         <select name="jenis" class="form-control mr-2 d-none d-sm-inline-block" id="jenis">
                           <option value="">Pilih</option>
                           <option value="Tablet">Tablet</option>
                           <option value="Kaplet">Kaplet</option>
                           <option value="Kapsul">Kapsul</option>
                           <option value="Cair">Cair</option>
                         </select>
                      </div>
                      <div class="form-group">
                         <label for="satuan">Satuan</label>
                         <select name="satuan" class="form-control mr-2 d-none d-sm-inline-block" id="satuan">
                           <option value="">Pilih</option>
                           <option value="Strip">Strip</option>
                           <option value="Ampule">Ampule</option>
                           <option value="Botol">Botol</option>
                           <option value="Pcs">Pcs</option>
                         </select>
                      </div>
                      
                      <div class="form-group">
                        <label for="harga_modal">Harga Awal</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="harga_modal" name="harga_modal"   required>
                      </div>
              
                       <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control mr-2 d-none d-sm-inline-block" id="harga" name="harga"  value="" readonly>
                      </div>

                      <div class="form-group">
                        <label for="tgl_masuk">Tanggal</label>
                        <input type="date" class="form-control" id="tgl_masuk" value="<?php echo date("d-m-Y") ?>" name="tgl_masuk" >
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