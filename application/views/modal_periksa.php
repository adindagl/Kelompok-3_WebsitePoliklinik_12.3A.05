
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modal Periksa</title>
    <link href="<?php echo base_url() ?>resources/css/sb-admin-2.min.css" rel="stylesheet">
 <!---->
  <!-- Custom styles for this page -->
  <link href="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<div class="table-responsive">
  <table class="table table-bordered table-hover" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Id Periksa</th>
        <th>Kode Obat</th>
        <th>Banyak</th>
        <th>Harga</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php $no=1; $total=0;?>
      <?php foreach ($res->result() as $res): ?>
      <tr>
        <td><?php echo $res->no_daftar  ?></td>
        <td><?php echo $res->kode_obat  ?></td>
        <td><?php echo $res->banyak  ?></td>
        <td><?php echo $res->harga  ?></td>
        <td><?php echo $res->subtotal  ?></td>
      </tr>
      <?php $total=$total+$res->subtotal ?>
      <?php endforeach; ?>
      <td colspan="3"></td>
      <td>Total:</td>
      <td><?php echo $total ?></td>
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