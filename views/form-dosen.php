<h2><?= isset($dosen) ? 'Edit' : 'Tambah' ?> Dosen</h2>
<form action="?url=Dosen/simpan" method="post">

    <button type="submit" class="btn btn-primary">Simpan</button>
    <input type="hidden" name="id" value="<?= $dosen['id'] ?? '' ?>">

    <label>NIDN:</label><br>
    <input type="text" name="nidn" value="<?= $dosen['nidn'] ?? '' ?>"><br>

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?= $dosen['nama'] ?? '' ?>"><br>

    <label>Gelar Depan:</label><br>
    <input type="text" name="gelar_depan" value="<?= $dosen['gelar_depan'] ?? '' ?>"><br>

    <label>Gelar Belakang:</label><br>
    <input type="text" name="gelar_belakang" value="<?= $dosen['gelar_belakang'] ?? '' ?>"><br>

    <label>Jenis Kelamin:</label><br>
    <select name="jenis_kelamin">
        <option value="L" <?= isset($dosen) && $dosen['jenis_kelamin'] == 'L' ? 'selected' : '' ?>>Laki-laki</option>
        <option value="P" <?= isset($dosen) && $dosen['jenis_kelamin'] == 'P' ? 'selected' : '' ?>>Perempuan</option>
    </select><br>

    <label>Tempat Lahir:</label><br>
    <input type="text" name="tempat_lahir" value="<?= $dosen['tempat_lahir'] ?? '' ?>"><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="tanggal_lahir" value="<?= $dosen['tanggal_lahir'] ?? '' ?>"><br>

    <label>Alamat:</label><br>
    <textarea name="alamat"><?= $dosen['alamat'] ?? '' ?></textarea><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= $dosen['email'] ?? '' ?>"><br>

    <label>Tahun Masuk:</label><br>
    <input type="text" name="tahun_masuk" value="<?= $dosen['tahun_masuk'] ?? '' ?>"><br>

    <label>Prodi:</label><br>
    <select name="prodi_id">
        <?php
        $prodiResult = $this->db->query("SELECT * FROM prodi");
        while ($prodi = $prodiResult->fetch_assoc()):
        ?>
            <option value="<?= $prodi['id'] ?>" <?= isset($dosen) && $dosen['prodi_id'] == $prodi['id'] ? 'selected' : '' ?>>
                <?= $prodi['nama'] ?>
            </option>
        <?php endwhile; ?>
    </select><br><br>

</form>
