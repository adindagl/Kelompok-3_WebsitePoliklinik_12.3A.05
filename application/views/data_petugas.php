
        <!-- Begin Page Content -->
        <div class="container-fluid">
        
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Data Petugas</h1>
            <a href="<?php echo base_url() ?>web/data-petugas/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Tabel Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode Petugas</th>
                      <th>Nama Petugas</th>
                      <th>Alamat</th>
                      <!--th>Username</th-->
                      <th>Level</th>
                      <th>Aksi</th>
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
                      <td><a href="<?php echo base_url() ?>web/data-petugas/ubah/<?php echo $res->kode_petugas ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i> Ubah</a>
                          <?php if($res->kode_petugas!="KP001"):  ?>
                          <a href="<?php echo base_url() ?>web/data-petugas/hapus/<?php echo $res->kode_petugas ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" onclick="return confirm('Apa Benar Data ini akan dihapus?')"><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</a>
                          <?php endif; ?>
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

