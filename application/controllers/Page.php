<?php

class Page extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged_in') !== TRUE) {
            redirect('beranda');
        }
    }

    function index()
    {
        //Allowing akses to admin only
        if ($this->session->userdata('level') === '1') {
            redirect('home');
        } else {
            echo "Access Denied";
        }
    }

    function pengguna()
    {
        //Allowing akses to staff only
        if ($this->session->userdata('level') === '2') {
            $this->load->view('index');
        } else {
            echo "Access Denied";
        }
    }

}
