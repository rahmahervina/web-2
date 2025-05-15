<?php
require_once 'Config/PN.php';

class PenelitianController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Penelitian($pdo);
    }

    public function index() 
    {
        $data_penelitian = $this->model->getAll();
        include 'views/penelitian-dosen.php';
    }

    public function simpan() 
    {
        $judul = $_POST['judul'];
        $dosen = $_POST['dosen'];
        $tanggal_mulai = $_POST['tanggal_mulai'];
        $tanggal_selesai = $_POST['tanggal_selesai'];
        $status = $_POST['status'];

        // Simpan ke database (gunakan koneksi kalian)
        global $koneksi;
        $query = "INSERT INTO penelitian (judul, dosen, tanggal_mulai, tanggal_selesai, status) 
                VALUES ('$judul', '$dosen', '$tanggal_mulai', '$tanggal_selesai', '$status')";
        mysqli_query($koneksi, $query);

        // Redirect kembali ke halaman manajemen
        header("Location: ?url=penelitian-dosen");
    }

    public function hapus()
    {
        $this->model->delete($_GET['id']);
        header("Location: ?url=penelitian");
    }

}

$penelitianCtrl = new PenelitianController($pdo);
