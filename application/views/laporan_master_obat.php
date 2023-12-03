
        <!-- Begin Page Content -->
         <!---->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Obat</h6>
            </div>
            <div class="card-body">
              

              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Jumlah</th>
                      <th>Jenis</th>
                      <th>Harga</th>
                      <th>Satuan</th>
                      <!--th>Surplus</th-->
                      <th>Tanggal Masuk</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->kode_obat  ?></td>
                      <td><?php echo $res->nama_obat  ?></td>
                      <td><?php echo $res->jumlah_obat  ?></td>
                      <td><?php echo $res->jenis  ?></td>
                      <td><?php echo $res->harga  ?></td>
                      <td><?php echo $res->satuan  ?></td>
                      <!--td><?php echo ($res->harga*$res->jumlah_obat)-($res->harga_modal*$res->jumlah_obat)  ?></td--> 
                      <td><?php echo date ('d-m-Y', strtotime($res->tgl_masuk))  ?></td>                      
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

