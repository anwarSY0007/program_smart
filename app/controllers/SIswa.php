<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['siswa']= $this->model('Siswa_model')->getSiswa();
        $data['judul'] = "Data Siswa";
        $this->view('template/header', $data);
        $this->view('siswa/index',$data);
        $this->view('template/footer');
    }
}