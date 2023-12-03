
<div class="table-responsive">
    <table class="table table-bordered" width="100%" cellspacing="0">
      <thead>
      <tr>
        <th>Biaya Tindakan</th>
      </tr>
    </thead>
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Tindakan</th>
          <th>Nama Tindakan</th>
          <th>Tarif</th>
          <th>Keterangan</th>          
        </tr>
      </thead>
      <tbody >
        <?php $no=1; ?>
        <?php foreach ($res->result() as $res): ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $res->kode_tindakan  ?></td>
          <td><?php echo $res->nama_tindakan  ?></td>
          <td><?php echo $res->tarif  ?></td>
          <td><?php echo $res->ket  ?></td>          
        </tr>
        
        <?php @$total=$total+$res->tarif ?>
        <?php endforeach; ?>
        <td colspan="2"></td>
        <td>Total:</td>
        <td><?php echo $total ?></td>
        <td></td>
        
      </tbody>
    </table>
  </div>
 