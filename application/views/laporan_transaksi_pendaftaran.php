
        <!-- Begin Page Content -->
         <!---->
        <div class="container-fluid">          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Laporan Pendaftaran</h6>
          </div>
        
          <div class="card shadow mb-4">            
            <div class="card-body">
              <form action="<?php echo base_url('web/laporan-transaksi/pendaftaran/print') ?>" method="post">
                
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
                      <th>Nomor Pasien</th>
                      <th>Nama Pasien</th>
                      <th>Poli</th>
                      <th>Nama Dokter</th>
                      <th>No. Telp</th>
                      <th>Alamat</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->no_daftar  ?></td>
                      <td><?php echo $res->nomor_pasien  ?></td>
                      <td><?php echo $res->nama_pasien  ?></td>
                      <td><?php echo $res->nama_poli  ?></td>
                      <td><?php echo $res->nama_dokter  ?></td>
                      <td><?php echo $res->nomor_telepon  ?></td>
                      <td><?php echo $res->alamat  ?></td>
                      
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

