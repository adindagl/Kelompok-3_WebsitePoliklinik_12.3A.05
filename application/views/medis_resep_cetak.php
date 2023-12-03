<?php $res=$res->result()[0] ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">
         
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           <!--  <h1 class="h3 mb-0 text-gray-800">Resep untuk pasein <?php echo $res->nama_pasien ?></h1> -->
          </div>
         
           <?php           
                if($message=$this->session->flashdata('message')):
            ?>
                <div class="animated bounceInDown sufee-alert alert with-close btn-info alert-dismissible fade show">
                <?php echo $message ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php endif; ?>
          <div class="row">
            <div class="col-lg-7">
                <div class="card shadow mb-4">
                  <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Lembar Resep </h6>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive" id="printableTable">
                      <table border="1" class="table table-bordered"  width="50%" cellspacing="0" style="font-family:sans-serif;border-collapse: collapse;padding:5px;">
                        <thead>
                          <tr>
                            <th colspan="6" bgcolor="#3978ff" style="color:black;padding: 10px;text-align: center;">CliniCare<br><br><small>:: Resep Obat ::</small></th>
                          </tr>
                          <tr>
                            <td colspan="6" style="padding:5px">
                              Nama Pasien : <?php echo ucfirst($res->nama_pasien) ?> <br> 
                              Nama Dokter : <?php echo $res->nama_dokter ?><br>
                              Poli        : <?php echo $res->nama_poli ?>
                            </td>
                          </tr>
                          <tr>
                            <th style="padding:5px">No</th>
                            <th style="padding:5px">Kode</th>
                            <th style="padding:5px">Nama</th>
                            <th style="padding:5px">Banyak</th>
                            <th style="padding:5px">Aturan Minum</th>
                            <th style="padding:5px">Ket :</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                          <?php foreach ($rec->result() as $item): ?>
                          <tr>
                            <td style="padding: 5px"><?php echo $no++; ?></td>
                            <td style="padding: 5px"><?php echo $item->kode_obat?></td>
                            <td style="padding: 5px"><?php echo $item->nama_obat  ?></td>
                            <td style="padding: 5px"><?php echo $item->banyak ?></td>
                            <td style="padding: 5px"><?php echo $item->berapa  ?></td>
                            <td style="padding: 5px"><?php echo $item->ket  ?></td>
                          </tr>
                          <?php endforeach; ?>
                          <tr>
                            <td colspan="6" style="padding:5px">Ket  : <br><br><br><br></td>
                          </tr>
                        </tbody>
                      </table>
                      <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">                                                                
              <button class="d-none d-sm-inline-block btn btn-md btn-info shadow-sm" type="button" onclick="printSection()">Cetak</button>
              <button class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm" type="button" onclick="location.href='<?php echo base_url("web/medis-resep") ?>'">Kembali</button>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

