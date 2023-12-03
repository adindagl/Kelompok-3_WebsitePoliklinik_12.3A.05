<?php $res=$res->result()[0] ?>
<?php $count_items = count($this->cart->contents()); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Resep untuk Pasien : <?php echo $res->nama_pasien ?></h1>

            <!-- modal -->
             <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="button" id="btn-pilih-obat" data-toggle="modal" data-target="#ModalObat">Tambah Obat</button>
             
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
          <div class="row">
            <div class="col-lg-12">
              <form class="form-inline" method="post" action="<?php echo base_url() ?>cart/add_to_cart">
                <input type="text" class="form-control mb-2 mr-sm-2" id="no_daftar" name="no_daftar" value="<?php echo $res->no_daftar ?>" readonly>

                <label class="sr-only" for="kode">Kode Obat</label>
                <input type="text" class="form-control mb-2 mr-sm-2" id="kode" name="kode" placeholder="kode obat" readonly>

                <label class="sr-only" for="nama">Nama Obat</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="nama obat" readonly>
                </div>
                
                <label class="sr-only" for="nama">Harga</label>
                <div class="input-group mb-2 mr-sm-2">
                  <input type="text" class="form-control" id="harga" name="harga" placeholder="harga obat" readonly>
                </div>

                <label class="sr-only" for="banyak">Banyak</label>
                <input type="number" class="form-control mb-2 mr-sm-2" id="banyak" name="banyak" placeholder="banyak obat" min="0" required>

                <label class="sr-only" for="berapa">Berapa Kali </label>
                <input type="number" class="form-control mb-2 mr-sm-2" id="berapa" name="berapa" placeholder="berapa kali minum (Sehari)" min="0" required>

                <label class="sr-only" for="ket">Ket</label>
                <select name="ket" id="ket" class="form-control mb-2 mr-sm-2" required>
                  <option value="">Pilih</option>
                  <option value="Sesudah Makan">Sesudah Makan</option>
                  <option value="Sebelum Makan">Sebelum Makan</option>
                </select>

                <button type="submit" class="btn btn-info mb-2">Submit</button>
              </form>
              </div>
            <div class="col-lg-12">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Resep  <?php echo $count_items  ?> item</h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>No Daftar</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Banyak</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                            <th>Berapa</th>
                            <th>Ket</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          <?php foreach ($this->cart->contents() as $items): ?>
                          <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $items['nid']  ?></td>
                            <td><?php echo $items['id']  ?></td>
                            <td><?php echo $items['name']  ?></td>
                            <td><?php echo $items['qty']  ?></td>
                            <td><?php echo "Rp.".number_format($items['price'])  ?></td>
                            <td><?php echo "Rp.".number_format($items['subtotal'])  ?></td>
                            <td><?php echo $items['many']  ?></td>
                            <td><?php echo $items['desc']  ?></td>
                            <td> <a href="<?php echo base_url() ?>cart/remove_cart/<?php echo $items['rowid'] ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a></td>

                          </tr>
                          <?php endforeach; ?>

                          <tr>
                            <td align="right" colspan="6">Total</td>
                            <td><?php echo "Rp.".number_format($this->cart->total()) ?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">                                                                
              <form method="post" action="<?php echo base_url() ?>web/medis-resep/simpan">
                <input type="hidden" class="form-control mb-2 mr-sm-2" id="no_daftar" name="no_daftar" value="<?php echo $res->no_daftar ?>" readonly>
              <button class="d-none d-sm-inline-block btn btn-md btn-primary shadow-sm" type="submit"  <?php if($count_items==0){echo "disabled";} ?>>Simpan</button>
              <button class="d-none d-sm-inline-block btn btn-md btn-danger shadow-sm" type="button" data-toggle="modal" data-target="#cancelModal">Batalkan</button>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

    <!-- Modal Obat-->
          <div class="modal fade" id="ModalObat" tabindex="-1" role="dialog" aria-labelledby="ModalObatTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="ModalObatTitle">Masukan Obat</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="contentModalObat">
                  
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
          <a class="btn btn-warning" href="<?php echo base_url() ?>web/medis-resep">Yes</a>
        </div>
      </div>
    </div>
  </div>