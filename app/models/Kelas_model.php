<?php

class Kelas_model{
    private $kelas = "kelas";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->kelas");
        return $this->db->resultAll();
    }

    public function countAllKelas(){
        $this->db->query("SELECT * FROM $this->kelas");
        return $this->db->rowCount();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM $this->kelas WHERE id_kelas = :id_kelas");
        $this->db->bind("id_kelas", $id);
        return $this->db->result();
    }

    public function tambah($data){
        $this->db->query("INSERT INTO $this->kelas VALUES(NULL, :nama_kelas, :kompetensi_keahlian)");
        $this->db->bind("nama_kelas", $data['nama_kelas']);
        $this->db->bind("kompetensi_keahlian", $data['kompetensi_keahlian']);
        return $this->db->rowCount();
    }

    public function edit($data){
        $this->db->query("UPDATE $this->kelas SET nama_kelas = :nama_kelas, kompetensi_keahlian = :kompetensi_keahlian WHERE id_kelas = :id_kelas");
        $this->db->bind("nama_kelas", $data['nama_kelas']);
        $this->db->bind("kompetensi_keahlian", $data['kompetensi_keahlian']);
        $this->db->bind("id_kelas", $data['id_kelas']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM $this->kelas WHERE id_kelas = :id_kelas");
        $this->db->bind("id_kelas", $data['id_kelas']);
        return $this->db->rowCount();
    }
}