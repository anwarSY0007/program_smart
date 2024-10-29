<?php

class Users extends Controller
{
    public function index()
    {
        $data['users']= $this->model('User_model')->getUser();
        $data['judul'] = "Data User";
        $this->view('template/header', $data);
        $this->view('user/index',$data);
        $this->view('template/footer');
    }
}