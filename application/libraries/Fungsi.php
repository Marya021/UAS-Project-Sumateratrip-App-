<?php

class Fungsi {

    protected $ci;

    function __construct()
    {
        $this->ci =& get_instance();
    }

    function pengguna_login()
    {
        $this->ci->load->model(Pengguna_model);
        $iduser = $this->ci->session->userdata(id_user);
        $userdata = $this->ci->Pengguna_model($iduser)->row();
        return $userdata; 
    }

}