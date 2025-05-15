<h3>Edit Kategori</h3>

<form method="POST" action="?url=kategori-update">
    <input type="hidden" name="id" value="<?= $kategori['id'] ?>">
    <input type="text" name="nama_kategori" value="<?= $kategori['nama_kategori'] ?>" required>
    <label><input type="checkbox" name="materi_kuliah" <?= $kategori['materi_kuliah'] ? 'checked' : '' ?>> Materi Kuliah</label>
    <label><input type="checkbox" name="penelitian" <?= $kategori['penelitian'] ? 'checked' : '' ?>> Penelitian</label>
    <label><input type="checkbox" name="publikasi" <?= $kategori['publikasi'] ? 'checked' : '' ?>> Publikasi</label>
    <label><input type="checkbox" name="pengabdian_masyarakat" <?= $kategori['pengabdian_masyarakat'] ? 'checked' : '' ?>> Pengabdian Masyarakat</label>
    <button type="submit">Update</button>
</form>
