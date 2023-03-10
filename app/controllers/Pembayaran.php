
<?php

class Pembayaran extends Controller{
    public function __construct(){
        Middleware::auth();
    }
    protected $fixedData = [];

    public function setFixedData(){
        $this->fixedData = [
            'totalSiswa' => $this->model("Siswa_model")->countAllSiswa(),
            'totalPetugas' => $this->model("Petugas_model")->countAllPetugas(),
            'totalKelas' => $this->model("Kelas_model")->countAllKelas(),
            'totalTransaksi' => $this->model("Transaksi_model")->countAllTransaksi(),
        ];

        return $this->fixedData;
    }
    public function index($table){
        $data = [
            'title' => "Dashboard",
            'section' => "pembayaran",
            'tableTitle' => "Data Pembayaran",
            'pembayaran' => $this->model($table."_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/pembayaran/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPage(){
        $data = [
            'title' => "Dashboard",
            'section' => "pembayaran",
            'tableTitle' => "Tambah pembayaran",
        ];
        $this->view("templates/header");
        $this->view("admin/pembayaran/tambah", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function editPage($table, $id){
        $data = [
            'title' => "Dashboard",
            'section' => "pembayaran",
            'tableTitle' => "Edit pembayaran",
            'pembayaran' => $this->model($table."_model")->getById($id),

        ];
        $this->view("templates/header");
        $this->view("admin/pembayaran/edit", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambah($table){
        if($this->model($table."_model")->tambah($_POST) > 0){
            Flasher::setFlash("Data Berhasil Ditambahkan", "success");
            Redirect::to("/pembayaran/index/pembayaran");
        } else{
            Flasher::setFlash("Data Gagal Ditambahkan", "danger");
            Redirect::to("/pembayaran/index/pembayaran");
        }
    }

    public function edit($table){
        if($this->model($table."_model")->edit($_POST) > 0){
            Flasher::setFlash("Data Berhasil Diedit", "success");
            Redirect::to("/pembayaran/index/pembayaran");
        } else{
            Flasher::setFlash("Data Gagal Diedit", "danger");
            Redirect::to("/pembayaran/index/pembayaran");
        }
    }

    public function delete($table){
        if($this->model($table."_model")->delete($_POST) > 0){
            Flasher::setFlash("Data Berhasil Dihapus", "success");
            Redirect::to("/pembayaran/index/pembayaran");
        } else{
            Flasher::setFlash("Data Gagal Dihapus", "danger");
            Redirect::to("/pembayaran/index/pembayaran");
        }
    }
}