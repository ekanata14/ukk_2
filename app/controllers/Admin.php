<?php

class Admin extends Controller{
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
    public function index(){
        $data = [
            'title' => "Dashboard",
            'section' => "admin"
        ];
        $this->view("templates/header");
        $this->view("admin/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }
}