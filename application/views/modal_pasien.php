
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modal Pasien</title>
    <link href="<?php echo base_url() ?>resources/css/sb-admin-2.min.css" rel="stylesheet">
 
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="table-responsive">
  <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
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
        
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      <?php foreach ($res->result() as $res): ?>
      <tr  style="cursor: pointer" id="pilih_pasien_row" data-id="<?php echo $res->nomor_pasien ?>" data-name="<?php echo $res->nama_pasien ?>" data-gender="<?php echo $res->jenis_kelamin ?>"  data-address="<?php echo $res->alamat ?>" data-date="<?php echo $res->tanggal_lahir ?>" data-age="<?php echo $res->usia ?>" data-phone="<?php echo $res->nomor_telepon ?>" data-dismiss="modal">
        <td><?php echo $no++ ?></td>
        <td><?php echo $res->nomor_pasien  ?></td>
        <td><?php echo $res->nama_pasien  ?></td>
        <td><?php echo $res->jenis_kelamin  ?></td>
        <td><?php echo $res->alamat  ?></td>
        <td><?php echo date('d-m-Y',strtotime($res->tanggal_lahir))  ?></td>
        <td><?php echo $res->usia  ?></td>
        <td><?php echo $res->nomor_telepon  ?></td>

      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>resources/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>resources/js/demo/datatables-demo.js"></script>
</body>
</html>