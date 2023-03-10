<?php

class Home extends Controller{
    public function index(){
        $data = [
            'title' => "Dashboard",
            'section' => "riwayat",
            'tableTitle' => "Data Riwayat Transaksi",
            'transaksi' => $this->model("Transaksi_model")->getBySiswaId($_SESSION['user']['id_siswa']),
        ];

        $this->view("templates/header");
        $this->view("index", $data);
        $this->view("templates/footer");
    }
}