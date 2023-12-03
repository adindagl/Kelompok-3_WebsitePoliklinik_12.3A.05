        <!-- Begin Page Content -->
         
        <div class="container-fluid">          
           <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Laporan Hasil Rekamedis</h6>
            </div>
                
          <div class="card shadow mb-4">
            <div class="card-body">

              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Daftar</th>
                      <th>No Pasien</th>
                      <th>Pasien</th>
                      <th>Poli</th>
                      <th>Dokter</td>
                      <th>Keluhan</th>                      
                      <th>Diagnosa</th>
                      <th>Tindakan</th>
                      <th>Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->no_daftar  ?></td>
                      <td><?php echo $res->nomor_pasien  ?></td>
                      <td><?php echo ucfirst($res->nama_pasien)  ?></td>
                      <td><?php echo $res->nama_poli ?></td>
                      <td><?php echo $res->nama_dokter ?></td>
                      <td><?php echo $res->keluhan  ?></td>
                      <td><?php echo $res->diagnosa  ?></td>
                      <td><?php echo $res->kode_tindakan  ?></td>
                      <td><?php echo date('d-m-Y',strtotime($res->tgl_periksa))  ?></td>
                      
                    </tr>
                    <?php endforeach; ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
