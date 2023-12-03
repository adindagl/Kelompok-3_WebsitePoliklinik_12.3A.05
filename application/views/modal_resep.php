
<div class="table-responsive">
  <table class="table table-bordered table-hover" width="100%" cellspacing="0">
    <thead>
      <tr>
        <th>Biaya Resep</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Obat</th>
        <th>Nama</th>
        <th>Banyak</th>
        <th>Harga</th>
        <th>Subtotal</th>
      </tr>
    </thead>
    <tbody //>
      <?php $no=1; $total=0;?>
      <?php foreach ($res->result() as $res): ?>
      <tr>
        <td><?php echo $no++;  ?></td>
        <td><?php echo $res->kode_obat  ?></td>
        <td><?php echo $res->nama_obat  ?></td>
        <td><?php echo $res->banyak  ?></td>
        <td><?php echo $res->harga  ?></td>
        <td><?php echo $res->subtotal  ?></td>
      </tr>
      <?php $total=$total+$res->subtotal ?>
      <?php endforeach; ?>
      <td colspan="4"></td>
      <td>Total:</td>
      <td><?php echo $total ?></td>
    </tbody>
  </table>
</div>
