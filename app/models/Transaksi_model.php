<?php

class Transaksi_model{
    private $transaksi = "transaksi";
    private $siswa = "siswa";
    private $petugas = "petugas";
    private $pembayaran = "pembayaran";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->transaksi INNER JOIN $this->siswa ON $this->transaksi.siswa_id = $this->siswa.id_siswa INNER JOIN $this->petugas ON $this->transaksi.petugas_id = $this->petugas.id_petugas INNER JOIN $this->pembayaran ON $this->transaksi.pembayaran_id = $this->pembayaran.id_pembayaran ORDER BY tanggal_bayar DESC");
        return $this->db->resultAll();
    }

    public function countAllTransaksi(){
        $this->db->query("SELECT * FROM $this->transaksi");
        return $this->db->rowCount();
    }

    public function getBySiswaId($id){
        $this->db->query("SELECT * FROM $this->transaksi INNER JOIN $this->siswa ON $this->transaksi.siswa_id = $this->siswa.id_siswa INNER JOIN $this->petugas ON $this->transaksi.petugas_id = $this->petugas.id_petugas INNER JOIN $this->pembayaran ON $this->siswa.pembayaran_id = $this->pembayaran.id_pembayaran WHERE siswa_id = :siswa_id");
        $this->db->bind("siswa_id", $id);
        return $this->db->resultAll();
    }

    public function tambah($data){
        $this->db->query("INSERT INTO $this->transaksi VALUES(NULL, NOW(), :bulan_dibayar, :tahun_dibayar, :siswa_id, :petugas_id, :pembayaran_id)");
        $this->db->bind("bulan_dibayar", $data['bulan_dibayar']);
        $this->db->bind("tahun_dibayar", date('Y'));
        $this->db->bind("siswa_id", $data['siswa_id']);
        $this->db->bind("petugas_id", $data['petugas_id']);
        $this->db->bind("pembayaran_id", $data['pembayaran_id']);
        return $this->db->rowCount();
    }

    // public function edit($data){
    //     $this->db->query("UPDATE $this->transaksi SET nama_transaksi = :nama_transaksi, kompetensi_keahlian = :kompetensi_keahlian WHERE id_transaksi = :id_transaksi");
    //     $this->db->bind("nama_transaksi", $data['nama_transaksi']);
    //     $this->db->bind("kompetensi_keahlian", $data['kompetensi_keahlian']);
    //     $this->db->bind("id_transaksi", $data['id_transaksi']);
    //     return $this->db->rowCount();
    // }

    // public function delete($data){
    //     $this->db->query("DELETE FROM $this->transaksi WHERE id_transaksi = :id_transaksi");
    //     $this->db->bind("id_transaksi", $data['id_transaksi']);
    //     return $this->db->rowCount();
    // }
}