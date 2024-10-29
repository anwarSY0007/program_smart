<?php

class Siswa_model{
    private $table = 'data_nilai';
    private $db;

    public function __construct()
    {
     $this->db = new Database; 
    }
 public function getSiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}