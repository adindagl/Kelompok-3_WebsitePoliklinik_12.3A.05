<?php $res=$res->row_array() ?>
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
   
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-primary">Cetak Kartu Pasien</h1>
  </div>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-body">
      <div id="printableTable" style="border: 2px dotted;padding:2px;width:410px">
        <input type="hidden" id="kode_anggota" value="<?php echo $res['nomor_pasien'] ?>">
        <table border="1" width="400" height="250" cellpadding="5" style="border:1px solid #999;font-family:sans-serif;border-collapse: collapse;padding:5px;background:#fff">
          <tr bgcolor="#3978ff" style="color:black;border:1px solid #999">
              <th colspan="3" style="text-align:center">CliniCare<br><small>Alamat : Jl.Kenangan Mantan</small> <br><small>No Telepon : 089778632574</small> </th>
              
          </tr>
          <tr style="color:#222;border:none;">
            <td width="150" style="border:none" valign="middle" colspan="3" align="center">Kartu Pasien</td>
          </tr>
          <tr style="color:#222;border:none;">          
            <td valign="top" style="border:none" colspan="3" align="center"><?php echo strtoupper($res['nomor_pasien']) ?><br><?php echo strtoupper($res['nama_pasien']) ?>
            <br><br><?php echo strtoupper($res['alamat']) ?>
            </td>
          </tr>
          <tr  style="color:#222;border:none;">
            <td colspan="3" style="border:none;margin:20px;">
              <div id="barcode"></div> 
            </td>
          </tr>
        </table>
      </div>
      <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
      <button class="d-none d-sm-inline-block btn btn-md btn-info shadow-sm mt-5" type="button" onclick="return printSection()" >Cetak</button>
      <button class="d-none d-sm-inline-block btn btn-md btn-warning shadow-sm mt-5" type="button" onclick="location.href='<?php echo base_url("web/data-pasien") ?>'">Kembali</button>
    </div>
  </div>

</div>


     
