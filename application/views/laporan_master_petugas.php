
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!---->
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Petugas</th>
                      <th>Nama Petugas</th>
                      <th>Alamat</th>
                      <!--th>Username</th-->
                      <th>Level</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->kode_petugas  ?></td>
                      <td><?php echo $res->nama_petugas  ?></td>
                      <td><?php echo $res->alamat_petugas  ?></td>
                      <!--td><?php echo $res->username  ?></td-->
                      <td><?php echo $res->level  ?></td>
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

