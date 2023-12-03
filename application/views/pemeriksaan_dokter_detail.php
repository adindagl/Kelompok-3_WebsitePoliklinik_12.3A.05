

        <!-- Begin Page Content --><div class="container-fluid">          
         <!---->  
        
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success">Laporan Detail Dokter</h6>
            </div>
            <div class="card-body">


              <div class="table-responsive">
                <table class="table table-bordered" id="table-print" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Daftar</th>
                      <th>Kode Dokter</th>
                      <th>Nama Pasien</th>
                      <th>Jenis Kelamin</th>                      
                      <th>Usia</th>
                      <th>Alamat</th>
                      <th>Telpon</th>
                      <th>Tanggal Periksa</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=1; ?>
                    <?php foreach ($res->result() as $res): ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $res->no_daftar  ?></td>
                      <td><?php echo $res->kode_dokter  ?></td>
                      <td><?php echo $res->nama_pasien ?></td>
                      <td><?php echo $res->jenis_kelamin  ?></td>
                      <td><?php echo $res->usia  ?></td>
                      <td><?php echo $res->alamat  ?></td>
                      <td><?php echo $res->nomor_telepon ?></td>
                      <td><?php echo date ('d-m-Y', strtotime($res->tgl_periksa)) ?></td>
                    </tr>


                    <?php endforeach; ?>
                    
                  </tbody>

                </table>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->






 