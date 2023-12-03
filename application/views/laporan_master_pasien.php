
        <!-- Begin Page Content -->
         <!---->
        <div class="container-fluid">


          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Pasien</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nomor Pasien</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>
                      <th>Alamat</th>
                      <th>Tanggal Lahir</th>
                      <th>Usia</th>
                      <th>No Telp</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->nomor_pasien  ?></td>
                      <td><?php echo $res->nama_pasien  ?></td>
                      <td><?php echo $res->jenis_kelamin  ?></td>
                      <td><?php echo $res->alamat  ?></td>
                      <td><?php echo date('d-m-Y', strtotime($res->tanggal_lahir)) ?></td>
                      <td><?php echo $res->usia  ?></td>
                      <td><?php echo $res->nomor_telepon  ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>web/data-pasien/detail/<?php echo $res->nomor_pasien; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-receipt fa-sm text-white-50"></i> Detail</a>
                      </td>
                    
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

