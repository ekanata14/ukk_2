<?php

class Petugas_model{
    private $petugas = "petugas";
    private $pengguna = "pengguna";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->petugas INNER JOIN $this->pengguna ON $this->petugas.pengguna_id = $this->pengguna.id_pengguna");
        return $this->db->resultAll();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM $this->petugas INNER JOIN $this->pengguna ON $this->petugas.pengguna_id = $this->pengguna.id_pengguna WHERE id_petugas = :id_petugas");
        $this->db->bind("id_petugas", $id);
        return $this->db->result();
    }

    public function getBySessionId($id){
        $this->db->query("SELECT * FROM $this->petugas WHERE pengguna_id = :pengguna_id");
        $this->db->bind("pengguna_id", $id);
        return $this->db->result();
    }

    public function countAllPetugas(){
        $this->db->query("SELECT * FROM $this->petugas");
        return $this->db->rowCount();
    }

    public function tambah($data, $pengguna_id){
        $this->db->query("INSERT INTO $this->petugas VALUES(NULL, :nama_petugas, :pengguna_id)");
        $this->db->bind("nama_petugas", $data['username']);
        $this->db->bind("pengguna_id", $pengguna_id);
        return $this->db->rowCount();
    }

    public function edit($data){
        $this->db->query("UPDATE $this->petugas SET nama_petugas = :nama_petugas WHERE id_petugas = :id_petugas");
        $this->db->bind("nama_petugas", $data['username']);
        $this->db->bind("id_petugas", $data['id_petugas']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM $this->petugas WHERE id_petugas = :id_petugas");
        $this->db->bind("id_petugas", $data['id_petugas']);
        return $this->db->rowCount();
    }
}