
<?php

class Transaksi extends Controller{
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
            'section' => "transaksi",
            'tableTitle' => "Data Kelas",
            'kelas' => $this->model($table."_model")->getAll(),
            'bulan' => [
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
            ],
        ];
        $this->view("templates/header");
        $this->view("admin/transaksi/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function detail($table, $id){
        $data = [
            'title' => "Dashboard",
            'section' => "transaksi",
            'tableTitle' => "Data Siswa",
            'kelas' => $this->model($table."_model")->getById($id),
            'siswa' => $this->model("Siswa_model")->getByKelasId($id),
            'bulan' => [
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
            ],
        ];
        $this->view("templates/header");
        $this->view("admin/transaksi/detailKelas", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function siswa($table, $id){
        $data = [
            'title' => "Dashboard",
            'section' => "transaksi",
            'tableTitle' => "Data Transaksi",
            'transaksi' => $this->model($table."_model")->getBySiswaId($id),
            'siswa' => $this->model("Siswa_model")->getById($id),
            'petugas' => $this->model("Petugas_model")->getBySessionId($id),
            'bulan' => [
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
            ],
            'created' => false,
        ];
        $this->view("templates/header");
        $this->view("admin/transaksi/detailSiswa", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function history($table){
        $data = [
            'title' => "Dashboard",
            'section' => "riwayat",
            'tableTitle' => "Data Riwayat Transaksi",
            'transaksi' => $this->model($table."_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/transaksi/riwayat", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function laporan($table){
        $data = [
            'title' => "Dashboard",
            'section' => "laporan",
            'tableTitle' => "Data Riwayat Transaksi SPP",
            'transaksi' => $this->model($table."_model")->getAll(),
        ];
        $this->view("templates/header");
        $this->view("admin/transaksi/laporan", $data, $this->setFixedData());
        $this->view("templates/footer");
    }

    public function bayar($table){
        if($this->model($table."_model")->tambah($_POST) > 0){
            Flasher::setFlash("Transaksi Berhasil", "success");
            Redirect::to("/transaksi/siswa/transaksi/{$_POST['siswa_id']}");
        } else{
            Flasher::setFlash("Transaksi Gagal", "danger");
            Redirect::to("/transaksi/siswa/transaksi/{$_POST['siswa_id']}");
        }
    }

    public function edit($table){
        if($this->model($table."_model")->edit($_POST) > 0){
            Flasher::setFlash("Data Berhasil Diedit", "success");
            Redirect::to("/transaksi/index/transaksi");
        } else{
            Flasher::setFlash("Data Gagal Diedit", "danger");
            Redirect::to("/transaksi/index/transaksi");
        }
    }

    public function delete($table){
        if($this->model($table."_model")->delete($_POST) > 0){
            Flasher::setFlash("Data Berhasil Dihapus", "success");
            Redirect::to("/transaksi/index/transaksi");
        } else{
            Flasher::setFlash("Data Gagal Dihapus", "danger");
            Redirect::to("/transaksi/index/transaksi");
        }
    }
}