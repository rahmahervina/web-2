<?php
require_once 'Config/PN.php';

class KategoriController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Kategori($pdo);
    }

    public function index() 
    {
        $data_penelitian = $this->model->getAll();
        include 'views/kategori.php';
    }

    public function edit() 
    {
        $kategori = $this->model->getById($_GET['id']);
        include 'views/kategori-edit.php';
    }

    public function update() 
    {
        $this->model->update($_POST['id'], $_POST);
        header("Location: ?url=kategori");
    }

    public function hapus() 
    {
        $this->model->delete($_GET['id']);
        header("Location: ?url=kategori");
    }

}

$kategoriCtrl = new KategoriController($pdo);
