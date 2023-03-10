<?php

class Auth extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("auth/index");
        $this->view("templates/footer");
    }

    public function login(){
        if($this->model("Pengguna_model")->authByUsername($_POST) > 0){
            $user = $this->model("Pengguna_model")->getUserByUsername($_POST);
            $siswa = $this->model("Siswa_model")->getSiswaByUserId($user['id_pengguna']);
            $_SESSION['user'] = [
                'id' => $user['id_penggun'],
                'username' => $user['username'],
                'role' => $user['role'],
                'login' => true,
            ];
            if($user['role'] == '0' || $user['role'] == '1'){
                Flasher::setFlash("Selamat Datang {$_SESSION['user']['username']}", "success");
                Redirect::to("/admin");
            } else{
                $_SESSION['user'] = [
                    'id' => $user['id_pengguna'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'login' => true,
                    'id_siswa' => $siswa['id_siswa'],
                    'nama_siswa' => $siswa['nama_siswa']
                ];
                Redirect::to("/home");
            }
        } else{
            Redirect::to("/auth");
        }
    }

    public function logout(){
        session_unset();
        session_destroy();
        Redirect::to("/auth");
    }
}