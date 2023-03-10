<?php

class Siswa_model{
    private $siswa = "siswa";
    private $kelas = 'kelas';
    private $pembayaran = 'pembayaran';
    private $pengguna = 'pengguna';
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->siswa INNER JOIN $this->kelas ON $this->siswa.kelas_id = $this->kelas.id_kelas INNER JOIN $this->pembayaran ON $this->siswa.pembayaran_id = $this->pembayaran.id_pembayaran");
        return $this->db->resultAll();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM $this->siswa INNER JOIN $this->kelas ON $this->siswa.kelas_id = $this->kelas.id_kelas INNER JOIN $this->pengguna ON $this->siswa.pengguna_id = $this->pengguna.id_pengguna INNER JOIN $this->pembayaran ON $this->siswa.pembayaran_id = $this->pembayaran.id_pembayaran WHERE id_siswa = :id_siswa");
        $this->db->bind("id_siswa", $id);
        return $this->db->result();
    }

    public function getSiswaByUserId($id){
        $this->db->query("SELECT * FROM $this->siswa WHERE pengguna_id = :pengguna_id");
        $this->db->bind("pengguna_id", $id);
        return $this->db->result();
    }

    public function getByKelasId($id){
        $this->db->query("SELECT * FROM $this->siswa INNER JOIN $this->kelas ON $this->siswa.kelas_id = $this->kelas.id_kelas WHERE kelas_id = :kelas_id");
        $this->db->bind("kelas_id", $id);
        return $this->db->resultAll();
    }

    public function countAllSiswa(){
        $this->db->query("SELECT * FROM $this->siswa");
        return $this->db->rowCount();
    }

    public function tambah($data, $pengguna_id){
        $this->db->query("INSERT INTO $this->siswa VALUES(NULL, :nisn, :nis, :nama_siswa, :alamat, :telepon, :kelas_id, :pengguna_id, :pembayaran_id)");
        $this->db->bind("nisn", $data['nisn']);
        $this->db->bind("nis", $data['username']);
        $this->db->bind("nama_siswa", $data['nama_siswa']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("telepon", $data['telepon']);
        $this->db->bind("kelas_id", $data['kelas_id']);
        $this->db->bind("pengguna_id", $pengguna_id);
        $this->db->bind("pembayaran_id", $data['pembayaran_id']);
        return $this->db->rowCount();
    }

    public function edit($data){
        $this->db->query("UPDATE $this->siswa SET nisn = :nisn, nis = :nis, nama_siswa = :nama_siswa, alamat = :alamat, telepon = :telepon, kelas_id = :kelas_id, pengguna_id = :pengguna_id, pembayaran_id = :pembayaran_id WHERE id_siswa = :id_siswa");
        $this->db->bind("nisn", $data['nisn']);
        $this->db->bind("nis", $data['username']);
        $this->db->bind("nama_siswa", $data['nama_siswa']);
        $this->db->bind("alamat", $data['alamat']);
        $this->db->bind("telepon", $data['telepon']);
        $this->db->bind("kelas_id", $data['kelas_id']);
        $this->db->bind("pengguna_id", $data['pengguna_id']);
        $this->db->bind("pembayaran_id", $data['pembayaran_id']);
        $this->db->bind("id_siswa", $data['id_siswa']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM $this->siswa WHERE id_siswa = :id_siswa");
        $this->db->bind("id_siswa", $data['id_siswa']);
        return $this->db->rowCount();
    }
}