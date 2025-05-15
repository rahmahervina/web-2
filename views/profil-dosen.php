<h2>Data Dosen</h2>
<a href="views/form-dosen.php">Tambah Dosen</a>
<a href="/Dosen/edit/<?= $row['id'] ?>">Edit</a>

<table class="table table-bordered">
    <tr>
        <th>NIDN</th><th>Nama</th><th>Prodi</th><th>Email</th><th>Aksi</th>
    </tr>
    <?php if (!empty($dosenList)): ?>
        <?php foreach ($dosenList as $row): ?>
        <tr>
            <td><?= $row['nidn'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['prodi_nama'] ?></td>
            <td><?= $row['email'] ?></td>
            <td>
                <a href="/Dosen/edit/<?= $row['id'] ?>">Edit</a> |
                <a href="/Dosen/hapus/<?= $row['id'] ?>" onclick="return confirm('Hapus?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr><td colspan="5">Tidak ada data dosen</td></tr>
    <?php endif; ?>
</table>
