
        <!-- Begin Page Content -->
        
        <div class="container-fluid">
          <!-- DataTales Example -->
       <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Pembayaran</h6>
          </div> 
          <div class="card shadow mb-4">
            <div class="card-body">
              <form action="<?php echo base_url('web/laporan-transaksi/pembayaran/print') ?>" method="post">
                
                Mulai dari <input type="date" name="mulai" class="form-control mr-2 d-none d-sm-inline-block">
                Sampai  <input type="date" name="akhir" class="form-control mr-2 d-none d-sm-inline-block">
                <button type="submit" class="mt-2 mb-4 d-none d-sm-inline-block btn btn-md btn-info shadow-sm">Submit</button>
              </form>

              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Daftar</th>
                      <th>Poli</th>
                      <th>Tarif</th>
                      <th>Total</th>                      
                      <th>Bayar</th>
                      <th>Kembali</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; $totalP=0;?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->no_daftar  ?></td>
                      <td><?php echo $res->nama_poli  ?></td>
                      <td><?php echo $res->tarif ?></td>
                      <td><?php echo $res->total  ?></td>
                      <td><?php echo $res->bayar  ?></td>
                      <td><?php echo $res->kembali  ?></td>
                      <td><?php echo date('d-m-Y',strtotime($res->tanggal))  ?></td>
                    </tr>
                    
                    <?php $totalP=$totalP+$res->total ?>
                    
                    <?php endforeach; ?>
                    
                  </tbody>
                  <tr>
                  <th colspan="4">Pemasukan : </th>
                  <th><?= "Rp.".number_format($totalP) ?> </th><td colspan="3"></td>
                  
                </tr>
              
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

