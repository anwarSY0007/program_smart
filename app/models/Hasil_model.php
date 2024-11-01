<?php

class Hasil_model{
    private $table = 'data_hasil';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getHasil(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function saveHasil($id_siswa,$hasil,$ket){
        $query = "INSERT INTO data_hasil (id_siswa, hasil, ket) VALUES (:id_siswa, :hasil, :ket)";
        $stmt = $this->db->query($query);
        $this->db->bind(':id_siswa', $id_siswa);
        $this->db->bind(':hasil', $hasil);
        $this->db->bind(':ket', $ket);
        $this->db->execute();
        return $this->db->rowCount();
    }
}