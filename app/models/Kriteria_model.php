<?php

class Kriteria_model
{
    private $table = 'data_kriteria';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getKriteria()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDataById($id) {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kriteria = :id_kriteria');
        $this->db->bind('id_kriteria', $id);
        return $this->db->single();
    }

    public function addKriteria($data)
    {

        $query = "INSERT INTO data_kriteria VALUES ('', :nama_kriteria, :bobot)";
        $this->db->query($query);
        $this->db->bind('nama_kriteria', $data['kriteria']); // Bind for :nama_kriteria
        $this->db->bind('bobot', $data['bobot']); // Bind for :bobot

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahKriteria($data)
    {
        $query = "UPDATE data_kriteria SET 
        nama_kriteria = :nama_kriteria,
        bobot = :bobot
        WHERE id_kriteria = :id_kriteria";

        $this->db->query($query);
        $this->db->bind('nama_kriteria', $data['kriteria']); // Bind for :nama_kriteria
        $this->db->bind('bobot', $data['bobot']); // Bind for :bobot
        $this->db->bind('id_kriteria', $data['id_kriteria']);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function hapusKriteria($id)
    {
        $query = "DELETE FROM data_kriteria WHERE id_kriteria = :id_kriteria";
        $this->db->query($query);
        $this->db->bind('id_kriteria', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
