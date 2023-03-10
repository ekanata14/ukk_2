
<?php

class Siswa extends Controller{
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
            'section' => "siswa",
            'tableTitle' => "Data siswa",
            'siswa' => $this->model($table."_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPage(){
        $data = [
            'title' => "Dashboard",
            'section' => "siswa",
            'tableTitle' => "Tambah siswa",
            'kelas' => $this->model("Kelas_model")->getAll(),
            'pembayaran' => $this->model("Pembayaran_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/siswa/tambah", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function editPage($table, $id){
        $data = [
            'title' => "Dashboard",
            'section' => "siswa",
            'tableTitle' => "Edit siswa",
            'siswa' => $this->model($table."_model")->getById($id),
            'kelas' => $this->model("Kelas_model")->getAll(),
            'pembayaran' => $this->model("Pembayaran_model")->getAll(),

        ];
        $this->view("templates/header");
        $this->view("admin/siswa/edit", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambah($table){
        if($this->model("Pengguna_model")->tambah($_POST) > 0){
            $pengguna_id = $this->model("Pengguna_model")->getLastInsertedId();
            if($this->model($table."_model")->tambah($_POST, $pengguna_id) > 0){
                Flasher::setFlash("Data Berhasil Ditambahkan", "success");
                Redirect::to("/siswa/index/siswa");
            } else{
                Flasher::setFlash("Data Gagal Ditambahkan", "danger");
                Redirect::to("/siswa/index/siswa");
            }
        } else{
            Flasher::setFlash("Data Gagal Ditambahkan", "danger");
            Redirect::to("/siswa/index/siswa");
        }
    }

    public function edit($table){
        if($this->model($table."_model")->edit($_POST) > 0){
            if($this->model("Pengguna_model")->edit($_POST) > 0 || $this->model("Pengguna_model")->edit($_POST) > -1){
                Flasher::setFlash("Data Berhasil Diedit", "success");
                Redirect::to("/siswa/index/siswa");
            } else{
                Flasher::setFlash("Data Gagal Diedit", "danger");
                Redirect::to("/siswa/index/siswa");
            }
        } else{
            Flasher::setFlash("Data Gagal Diedit", "danger");
            Redirect::to("/siswa/index/siswa");
        }
    }

    public function delete($table){
        if($this->model($table."_model")->delete($_POST) > 0){
            if($this->model("Pengguna_model")->delete($_POST) > 0){
                Flasher::setFlash("Data Berhasil Dihapus", "success");
                Redirect::to("/siswa/index/siswa");
            } else{
                Flasher::setFlash("Data Gagal Dihapus", "danger");
                Redirect::to("/siswa/index/siswa");
            }
        } else{
            Flasher::setFlash("Data Gagal Dihapus", "danger");
            Redirect::to("/siswa/index/siswa");
        }
    }
}