<?php $res=$res->result()[0] ?>
<?php $rec=$rec->row_array() ?>
        <!-- Begin Page Content -->
        <div class="container-fluid">
         
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-primary">Transaksi Pembayaran</h1>
          </div>
          
         <!-- DataTales Example -->          
          <div class="row">
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                  <div class="card-header py-2">
                    <h6 class="m-0 font-weight-bold text-primary">Pembayaran</h6>
                  </div>
                  <div class="card-body">
                     <div class="table-reponsive " id="printableTable">
                       <table border="1" class="table table-bordered" width="100%" cellspacing="0" style="font-family:sans-serif;border-collapse: collapse;padding:3px;">
                       <tr>
                      <td bgcolor="#3978ff" style="padding: 5px;text-align: center;"><img class="img-fluid px-0 px-sm-0 mt-0 mb-0" style="width: 5rem;" src="<?php echo base_url() ?>resources/img/logo2.jpg"></td>
                        <td colspan="4" bgcolor="#3978ff" style="color:black;padding: 5px;text-align: center;">CliniCare<br><small>Alamat: Jl.Kenangan Mantan No. 15</small><br><small>No Telpon:089778632574 </small>
                         </td>
                       </tr>
                       <tr>
                         <td style="padding: 5px">No Daftar</td>
                         <td style="padding: 5px"><?php echo $res->no_daftar ?></td>
                         <td style="padding: 5px">Tanggal</td>
                         <td style="padding: 5px"><?php echo date('d-m-Y',strtotime($res->tanggal)) ?></td>
                       </tr>
                       <tr>
                         <td style="padding: 5px">Nama Pasien</td>
                         <td style="padding: 5px"><?php echo $res->nama_pasien ?></td>
                         <td colspan="2" style="padding: 5px"></td>
                       </tr>
                       <tr>
                         <td style="padding: 5px">Nama Dokter</td>
                         <td style="padding: 5px"><?php echo $res->nama_dokter ?></td>
                         <td style="padding: 5px">Tarif</td>
                         <td style="padding: 5px"><?php echo "Rp.".number_format($res->tarif) ?></td>
                       </tr>
                        <tr>
                         <td style="padding: 5px">Pembayaran Obat</td>
                         <td style="padding: 5px"><?php echo "Rp.".number_format($rec['jumlah_subtotal']) ?></td>
                         <td style="padding: 5px">Total</td>
                         <td style="padding: 5px"><?php echo "Rp.".number_format($res->total) ?></td>
                       </tr>
                       <tr>
                         <td style="padding:5px" colspan="2" rowspan="2"> TTD <br><br><br><br> </td>
                         <td style="padding:5px">Bayar</td>
                         <td style="padding:5px"><?php echo "Rp.".number_format($res->bayar) ?></td>
                       </tr>
                       <tr>
                         <td style="padding:5px">Kembali</td>
                         <td style="padding:5px"><?php echo "Rp.".number_format($res->kembali) ?></td>
                       </tr>
                       <tr>
                         <td colspan="6" bgcolor="#3978ff" style="color:black;padding: 5px;text-align: center">Struk Pembayaran</td>
                       </tr>
                     </table>
                     </div>
                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                       <button class="d-none d-sm-inline-block btn btn-md btn-info shadow-sm" type="button" onclick="printSection()" >Cetak</button>
                       <button class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm" type="button" onclick="location.href='<?php echo base_url("web/transaksi-pembayaran") ?>'">Kembali</button>

                  </div>
                </div>
            </div>
          </div>
          </div>
        <!-- /.container-fluid -->






 