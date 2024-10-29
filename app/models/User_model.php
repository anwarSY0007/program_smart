<?php

class User_model{

    private $nama = 'Admin';
    public function getUser()
    {
        return $this->nama;
    }
}