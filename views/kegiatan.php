<h3>Manajemen Kegiatan Akademik</h3>

<form method="POST" action="?url=kegiatan-simpan">
    <input type="text" name="judul" placeholder="Judul Kegiatan" required>
    <select name="jenis" required>
        <option value="Seminar">Seminar</option>
        <option value="Pelatihan">Pelatihan</option>
        <option value="Pengabdian">Pengabdian Masyarakat</option>
    </select>
    <input type="date" name="tanggal" required>
    <input type="text" name="tempat" placeholder="Tempat" required>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<br>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Jenis</th>
        <th>Tanggal</th>
        <th>Tempat</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($data_kegiatan)): $no = 1; ?>
        <?php foreach ($data_kegiatan as $kegiatan): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $kegiatan['judul'] ?></td>
            <td><?= $kegiatan['jenis'] ?></td>
            <td><?= $kegiatan['tanggal'] ?></td>
            <td><?= $kegiatan['tempat'] ?></td>
            <td>
                <a href="?url=kegiatan-hapus&id=<?= $kegiatan['id'] ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="6">Belum ada kegiatan.</td></tr>
    <?php endif; ?>
</table>
