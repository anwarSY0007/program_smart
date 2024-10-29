<?php

class About extends Controller
{
    public function index($nama = 'Anwar', $pekerjaan = 'web Design')
    {

        $data['nama'] = $nama;
        $data['Pekerjaan'] = $pekerjaan;
        $this->view('template/header');
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
    public function page()
    {
        echo "About/page";
    }
}
