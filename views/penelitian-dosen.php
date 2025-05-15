<h3>Manajemen Penelitian</h3>
<form method="POST" action="?url=penelitian-simpan">
  <input type="text" name="judul" placeholder="Judul Penelitian" required>
  <input type="text" name="dosen" placeholder="Nama Dosen" required>
  <input type="date" name="tanggal_mulai" required>
  <input type="date" name="tanggal_selesai" required>
  <select name="status" required>
    <option value="Berjalan">Berjalan</option>
    <option value="Selesai">Selesai</option>
    <option value="Tertunda">Tertunda</option>
  </select>
  <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Dosen</th>
      <th>Tanggal Mulai</th>
      <th>Tanggal Selesai</th>
      <th>Status</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no = 1; ?>

    <?php if (!empty($data_penelitian) && is_array($data_penelitian)): ?>
    <?php foreach ($data_penelitian as $penelitian): 
    ?>
      <tr>
        <td><?= $no++ ?></td>
        <td><?= $penelitian['judul'] ?></td>
        <td><?= $penelitian['dosen'] ?></td>
        <td><?= $penelitian['tanggal_mulai'] ?></td>
        <td><?= $penelitian['tanggal_selesai'] ?></td>
        <td><?= $penelitian['status'] ?></td>
        <td>
          <a href="?url=penelitian-hapus&id=<?= $penelitian['id'] ?>" class="btn btn-danger">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr><td colspan="6">Tidak ada data</td></tr>
<?php endif; ?>

  </tbody>
</table>
