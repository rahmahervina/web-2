<?php
require_once 'Config/PN.php';

class KegitanController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Kegitan($pdo);
    }

    public function index() 
    {
        $data_kegiatan = $this->model->getAll();
        include 'views/kegiatan.php';
    }

    public function simpan() 
    {
        $this->model->create($_POST);
        header("Location: ?url=kegiatan");
    }

    public function hapus() 
    {
        $this->model->delete($_GET['id']);
        header("Location: ?url=kegiatan");
    }

}

$kegiatanCtrl = new KegiatanController($pdo);
