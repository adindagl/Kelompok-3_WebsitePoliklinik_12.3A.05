<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modal Poli</title>
    <link href="<?php echo base_url() ?>resources/css/sb-admin-2.min.css" rel="stylesheet">
 <!---->
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="table-responsive">
  <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>No</th>
        <th>No Daftar</th>
        <th>Kode Petugas</th>
        <th>Kode Poli</th>
        <th>Kode Dokter</th>
        <th>Nama Pasien</th>
        <th>Tanggal</th>
        <th>No Antri</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; ?>
      <?php foreach ($res->result() as $res): ?>
      <tr  style="cursor: pointer" id="pilih_pendaftaran_row" data-id="<?php echo $res->no_daftar ?>"  data-nomor-pasien="<?php echo $res->nomor_pasien ?>" data-nama-pasien="<?php echo $res->nama_pasien ?>" data-nama-dokter="<?php echo $res->nama_dokter ?>" data-tarif="<?php echo $res->tarif ?>" data-dismiss="modal">
        <td><?php echo $no++; ?></td>
        <td><?php echo $res->no_daftar  ?></td>
        <td><?php echo $res->kode_petugas  ?></td>
        <td><?php echo $res->kode_poli  ?></td>
        <td><?php echo $res->kode_dokter  ?></td>
        <td><?php echo $res->nama_pasien  ?></td>
        <td><?php echo date('d-m-Y',strtotime($res->tanggal))  ?></td>
        <td><?php echo $res->no_antri  ?></td>
        <td><?php echo $res->status  ?></td>
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