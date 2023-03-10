
<?php

class Kelas extends Controller{
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
            'section' => "kelas",
            'tableTitle' => "Data Kelas",
            'kelas' => $this->model($table."_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/kelas/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambahPage(){
        $data = [
            'title' => "Dashboard",
            'section' => "kelas",
            'tableTitle' => "Tambah Kelas",
            'komka' => [
                'Rekayasa Perangkat Lunak',
                'Teknik Komputer dan Jaringan',
                'Multimedia',
                'Teknik Kendaraan Ringan Otomotif',
                'Teknik Bisnis Sepeda Motor',
            ],
        ];
        $this->view("templates/header");
        $this->view("admin/kelas/tambah", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function editPage($table, $id){
        $data = [
            'title' => "Dashboard",
            'section' => "kelas",
            'tableTitle' => "Edit Kelas",
            'kelas' => $this->model($table."_model")->getById($id),
            'komka' => [
                'Rekayasa Perangkat Lunak',
                'Teknik Komputer dan Jaringan',
                'Multimedia',
                'Teknik Kendaraan Ringan Otomotif',
                'Teknik Bisnis Sepeda Motor',
            ],

        ];
        $this->view("templates/header");
        $this->view("admin/kelas/edit", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function tambah($table){
        if($this->model($table."_model")->tambah($_POST) > 0){
            Flasher::setFlash("Data Berhasil Ditambahkan", "success");
            Redirect::to("/kelas/index/kelas");
        } else{
            Flasher::setFlash("Data Gagal Ditambahkan", "danger");
            Redirect::to("/kelas/index/kelas");
        }
    }

    public function edit($table){
        if($this->model($table."_model")->edit($_POST) > 0){
            Flasher::setFlash("Data Berhasil Diedit", "success");
            Redirect::to("/kelas/index/kelas");
        } else{
            Flasher::setFlash("Data Gagal Diedit", "danger");
            Redirect::to("/kelas/index/kelas");
        }
    }

    public function delete($table){
        if($this->model($table."_model")->delete($_POST) > 0){
            Flasher::setFlash("Data Berhasil Dihapus", "success");
            Redirect::to("/kelas/index/kelas");
        } else{
            Flasher::setFlash("Data Gagal Dihapus", "danger");
            Redirect::to("/kelas/index/kelas");
        }
    }
}