
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Data Pasien</h1>
            <a href="<?php echo base_url() ?>web/data-pasien/tambah" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Pasien</a>
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
              <h6 class="m-0 font-weight-bold text-primary">Tabel Pasien</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
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
                      <td><?php echo date ('d-m-Y',strtotime($res->tanggal_lahir))  ?></td>
                      <td><?php echo $res->usia  ?></td>
                      <td><?php echo $res->nomor_telepon  ?></td>
                      <td width="120px"><a href="<?php echo base_url() ?>web/data-pasien/ubah/<?php echo $res->nomor_pasien ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" title="Ubah"><i class="fas fa-edit fa-sm text-white-50"></i> </a>
                        <a href="<?php echo base_url() ?>web/data-pasien/cetak-kartu/<?php echo $res->nomor_pasien ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" title="Cetak Kartu"><i class="fas fa-address-card fa-sm text-white-50"></i> </a>
                          <a href="<?php echo base_url() ?>web/data-pasien/hapus/<?php echo $res->nomor_pasien ?>" onclick="return confirm('data ini akan dihapus?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" title="Hapus"><i class="fas fa-trash fa-sm text-white-50"></i> </a>
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

