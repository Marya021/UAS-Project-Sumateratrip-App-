<?php

class Bus extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bus_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['bus'] = $this->Bus_model->getAllBus();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/bus/data_bus', $data);
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('to','To', 'required');
        $this->form_validation->set_rules('passengers','Passengers', 'required|numeric');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/bus/add_bus');
            $this->load->view('admin/templates/footer');

        } else {
            $this->Bus_model->addBus();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('bus');
        }

    }

    public function delete($id)
    {
        $this->Bus_model->deleteBus($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('bus');
    }

    public function update($id)
    {
        $data['bus'] = $this->Bus_model->getBusById($id);

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('to','To', 'required');
        $this->form_validation->set_rules('passengers','Passengers', 'required|numeric');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/bus/update_bus', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->Bus_model->updateBus();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('bus');
        }

    }

}