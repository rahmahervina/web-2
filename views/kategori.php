<h3>Manajemen Kategori Kegiatan</h3>

<form method="POST" action="?url=kategori-simpan">
    <input type="text" name="nama_kategori" placeholder="Nama Kategori" required>
    <label><input type="checkbox" name="materi_kuliah"> Materi Kuliah</label>
    <label><input type="checkbox" name="penelitian"> Penelitian</label>
    <label><input type="checkbox" name="publikasi"> Publikasi</label>
    <label><input type="checkbox" name="pengabdian_masyarakat"> Pengabdian Masyarakat</label>
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

<br>

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Materi</th>
        <th>Penelitian</th>
        <th>Publikasi</th>
        <th>Pengabdian</th>
        <th>Aksi</th>
    </tr>
    <?php if (!empty($data_kategori)): $no = 1; ?>
        <?php foreach ($data_kategori as $kategori): ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $k['nama_kategori'] ?></td>
        <td><?= $k['materi_kuliah'] ? '✓' : '' ?></td>
        <td><?= $k['penelitian'] ? '✓' : '' ?></td>
        <td><?= $k['publikasi'] ? '✓' : '' ?></td>
        <td><?= $k['pengabdian_masyarakat'] ? '✓' : '' ?></td>
        <td>
            <a href="?url=kategori-edit&id=<?= $k['id'] ?>">Edit</a> |
            <a href="?url=kategori-hapus&id=<?= $k['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
        </td>
    </tr>
            <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="6">Belum ada kegiatan.</td></tr>
    <?php endif; ?>
</table>
