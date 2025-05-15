<?php
require_once 'Config/DB.php';

class Dosen {
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function index() {
    $query = "SELECT dosen.*, prodi.nama AS prodi_nama 
              FROM dosen 
              LEFT JOIN prodi ON dosen.prodi_id = prodi.id";

    $result = $this->db->query($query);

    // Cek error SQL
    if (!$result) {
        die("Query error: " . $this->db->error);
    }

    // Simpan hasil ke array
    $dosenList = [];
    while ($row = $result->fetch_assoc()) {
        $dosenList[] = $row;
    }

    // Pastikan variabel dikirim
    include "views/profil-dosen.php";
    }


    public function simpan() {
        $id = $_POST['id'] ?? null;
        $nidn = $_POST['nidn'];
        $nama = $_POST['nama'];
        $gelar_depan = $_POST['gelar_depan'];
        $gelar_belakang = $_POST['gelar_belakang'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $tahun_masuk = $_POST['tahun_masuk'];
        $prodi_id = $_POST['prodi_id'];

        if ($id) {
            $sql = "UPDATE dosen SET nidn='$nidn', nama='$nama', gelar_depan='$gelar_depan', 
                    gelar_belakang='$gelar_belakang', jenis_kelamin='$jenis_kelamin', 
                    tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', alamat='$alamat',
                    email='$email', tahun_masuk='$tahun_masuk', prodi_id='$prodi_id'
                    WHERE id=$id";
        } else {
            $sql = "INSERT INTO dosen (nidn, nama, gelar_depan, gelar_belakang, jenis_kelamin,
                    tempat_lahir, tanggal_lahir, alamat, email, tahun_masuk, prodi_id)
                    VALUES ('$nidn', '$nama', '$gelar_depan', '$gelar_belakang', '$jenis_kelamin',
                    '$tempat_lahir', '$tanggal_lahir', '$alamat', '$email', '$tahun_masuk', '$prodi_id')";
        }

        if ($this->db->query($sql)) {
            header("Location: /Dosen");
        } else {
            echo "Gagal menyimpan data: " . $this->db->error;
        }
    }

    public function edit($id) {
        $result = $this->db->query("SELECT * FROM dosen WHERE id = $id");
        $dosen = $result->fetch_assoc();
        include "views/form-dosen.php";
    }

    public function tambah() {
        $dosen = null;
        include "views/form-dosen.php";
    }

    public function hapus($id) {
        $this->db->query("DELETE FROM dosen WHERE id = $id");
        header("Location: /Dosen");
    }
}



$dosen = new Dosen();
