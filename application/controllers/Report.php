<?php

class Report extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bookings_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['bookings'] = $this->Bookings_model->getAllBookings();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/report/data_report', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }
    
}