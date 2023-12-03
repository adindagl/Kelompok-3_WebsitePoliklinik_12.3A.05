
        <!-- Begin Page Content -->
         <!---->
        <div class="container-fluid">          
          
        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Dokter</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Dokter</th>
                      <th>Nama Dokter</th>
                      <th>SIP</th>
                      <th>Tarif</th>
                      <th>No. Telp</th>
                      <th>Alamat</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->kode_dokter  ?></td>
                      <td><?php echo $res->nama_dokter  ?></td>
                      <td><?php echo $res->sip  ?></td>
                      <td><?php echo $res->tarif  ?></td>
                      <td><?php echo $res->nomor_telepon  ?></td>
                      <td><?php echo $res->alamat  ?></td>
                      <td>
                        <a href="<?php echo base_url() ?>web/data-dokter/detail/<?php echo $res->kode_dokter; ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-receipt fa-sm text-white-50"></i> Detail</a>
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

