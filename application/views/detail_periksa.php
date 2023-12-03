
<div class="table-responsive" //>
    <table class="table table-bordered" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode Tindakan</th>
          <th>Nama Tindakan</th>
          <th>Tarif</th>
          <th>Ket</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php foreach ($res->result() as $res): ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $res->kode_tindakan  ?></td>
          <td><?php echo $res->nama_tindakan  ?></td>
          <td><?php echo $res->tarif  ?></td>
          <td><?php echo $res->ket  ?></td>
          <td> <button type="button" id="hapus_tindakan" data-no="<?php echo $res->no_daftar ?>" data-kode="<?php echo $res->kode_tindakan ?>" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" ><i class="fas fa-trash fa-sm text-white-50"></i> Hapus</button></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
 