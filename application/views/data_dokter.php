
        <!-- Begin Page Content -->
        <div class="container-fluid">
         <!---->
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Data Dokter</h1>
            <a href="<?php echo base_url() ?>web/data-dokter/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
          </div>
           <?php           
                        if($message=$this->session->flashdata('message')):
                    ?>
                        <div class="animated bounceInDown sufee-alert alert with-close btn-success alert-dismissible fade show">
                        <?php echo $message ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Dokter</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                      <td><a href="<?php echo base_url() ?>web/data-dokter/ubah/<?php echo $res->kode_dokter ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                          <a href="<?php echo base_url() ?>web/data-dokter/hapus/<?php echo $res->kode_dokter ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apa Benar Data ini akan dihapus?')"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a>
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

