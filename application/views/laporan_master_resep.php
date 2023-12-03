
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Obat Keluar</h6>
            </div>
            <div class="card-body">
              <form action="<?php echo base_url('web/laporan-master/resep/print') ?>" method="post">
                
                Mulai dari <input type="date" name="mulai" class="form-control mr-2 d-none d-sm-inline-block">
                Sampai  <input type="date" name="akhir" class="form-control mr-2 d-none d-sm-inline-block">
                <button type="submit" class="mt-2 mb-4 d-none d-sm-inline-block btn btn-md btn-info shadow-sm">Submit</button>
              </form>

              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Obat</th>
                      <th>Nama Obat</th>
                      <th>Jumlah Obat</th>
                      <!--th>Harga</th-->
                      <th>Subtotal</th>
                      <th>Tanggal Keluar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; $total1=0; $totall=0;?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; $total=0;?></td>
                      <td><?php echo $res->kode_obat  ?></td>
                      <td><?php echo $res->nama_obat  ?></td>
                      <td><?php echo $res->banyak  ?></td>
                      <!--td><?php echo $res->harga  ?></td-->
                      <td><?php echo $res->subtotal  ?></td>
                      <td><?php echo date ('d-m-Y', strtotime($res->tanggal))  ?></td> 
                    </tr>
                    <?php $total1=$total1+$res->banyak ?>
                    <?php $totall=$totall+$res->subtotal ?>
                    <?php endforeach; ?>
                </tbody>
                <tr>
                  <th colspan="3">Total Obat Keluar : </th>
                  <th><?= $total1?></th><td colspan="2"></td>
                </tr>
                <tr>
                  <th colspan="4">Pendapatan Obat : </th>
                  <th><?= "Rp.".number_format($totall) ?></th>
                  <td></td>
                </tr>
              </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

