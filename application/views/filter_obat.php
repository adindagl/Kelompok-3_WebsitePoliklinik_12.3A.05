
        <!-- Begin Page Content -->
        <div class="container-fluid">
          
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Laporan Obat</h1>
          </div>
         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-body">
              <form action="<?php echo base_url('web/laporan-master/obat/print') ?>" method="post">
                
                Mulai dari <input type="date" name="mulai" class="form-control mr-2 d-none d-sm-inline-block">
                Sampai  <input type="date" name="akhir" class="form-control mr-2 d-none d-sm-inline-block">

                <button type="submit" class="mt-5 d-none d-sm-inline-block btn btn-md btn-info shadow-sm">Submit</button>
              </form>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

