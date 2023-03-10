<?php

class Pengguna_model{
    private $pengguna = "pengguna";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getLastInsertedId(){
        return $this->db->getLastInsertId();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->pengguna");
        return $this->db->resultAll();
    }

    public function countAllPengguna(){
        $this->db->query("SELECT * FROM $this->pengguna");
        return $this->db->rowCount();
    }

    public function getUserByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username");
        $this->db->bind("username", $data['username']);
        return $this->db->result();
    }

    public function authByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username AND password = :password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        return $this->db->rowCount();
    }

    public function tambah($data){
        $this->db->query("INSERT INTO $this->pengguna VALUES(NULL, :username, :password, :role)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->bind("role", $data['role']);
        return $this->db->rowCount();
    }

    public function edit($data){
        $this->db->query("UPDATE $this->pengguna SET username = :username, password = :password, role = :role WHERE id_pengguna = :id_pengguna");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        $this->db->bind("role", $data['role']);
        $this->db->bind("id_pengguna", $data['id_pengguna']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM $this->pengguna WHERE id_pengguna = :id_pengguna");
        $this->db->bind("id_pengguna", $data['id_pengguna']);
        return $this->db->rowCount();
    }
}