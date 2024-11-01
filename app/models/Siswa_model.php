<?php

class Siswa_model
{
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
    public function addSiswa($data)
    {

        $query = "INSERT INTO data_nilai VALUES ('', :nama_siswa, :kelas,:k1,:k2,:k3,:k4,:k5)";
        $this->db->query($query);
        $this->db->bind('nama_siswa', $data['nama_siswa']); // Bind for :nama_kriteria
        $this->db->bind('kelas', $data['kelas']); // Bind for :bobot
        $this->db->bind('k1', $data['k1']);
        $this->db->bind('k2', $data['k2']);
        $this->db->bind('k3', $data['k3']);
        $this->db->bind('k4', $data['k4']);
        $this->db->bind('k5', $data['k5']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_siswa = :id_siswa');
        $this->db->bind('id_siswa', $id);
        return $this->db->single();
    }

    public function ubahSiswa($data)
    {
        $query = "UPDATE data_nilai SET 
        nama_siswa = :nama_siswa,
        kelas = :kelas,
        k1 = :k1,
        k2 = :k2,
        k3 = :k3,
        k4 = :k4,
        k5 = :k5
        WHERE id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind('nama_siswa', $data['nama_siswa']); // Bind for :nama_siswa
        $this->db->bind('kelas', $data['kelas']); // Pastikan Anda juga mengikat :bobot
        $this->db->bind('k1', $data['k1']);
        $this->db->bind('k2', $data['k2']);
        $this->db->bind('k3', $data['k3']);
        $this->db->bind('k4', $data['k4']);
        $this->db->bind('k5', $data['k5']);
        $this->db->bind('id_siswa', $data['id_siswa']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusSiswa($id)
    {
        $query = "DELETE FROM data_nilai WHERE id_siswa = :id_siswa";
        $this->db->query($query);
        $this->db->bind('id_siswa', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getSiswaValue($type = 'min')
    {
        $aggregateFunction = ($type === 'max') ? 'max' : 'min';

        $this->db->query("SELECT {$aggregateFunction}(k1) as {$type}K1, 
                             {$aggregateFunction}(k2) as {$type}K2, 
                             {$aggregateFunction}(k3) as {$type}K3, 
                             {$aggregateFunction}(k4) as {$type}K4, 
                             {$aggregateFunction}(k5) as {$type}K5 
                      FROM " . $this->table);

        $this->db->execute();

        return $this->db->single();
    }

    public function normalize($value, $min, $max, $weight)
    {
        if ($max - $min == 0) return 0; // Cegah pembagian dengan nol
        return (($value - $min) / ($max - $min)) * 100 * $weight;
    }
}
