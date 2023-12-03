
        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          
          <!---->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Poli</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Poli</th>
                      <th>Nama Poli</th>
                      <th>Ruang</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->kode_poli  ?></td>
                      <td><?php echo $res->nama_poli  ?></td>
                      <td><?php echo $res->lantai  ?></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

