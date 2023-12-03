
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
          <!-- Page Heading -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Pembayaran</h6>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <form action="<?php echo base_url('web/laporan-transaksi/pembayaran/print') ?>" method="post">
                
                Mulai dari <input type="date" name="mulai" class="form-control mr-2 d-none d-sm-inline-block">
                Sampai  <input type="date" name="akhir" class="form-control mr-2 d-none d-sm-inline-block">
                <button type="submit" class="mt-5 d-none d-sm-inline-block btn btn-md btn-info shadow-sm">Submit</button>
              </form>
            </div>
          </div>
</div>
        </div>
        <!-- /.container-fluid -->

