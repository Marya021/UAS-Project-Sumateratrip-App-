<?php

class Trains extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Trains_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['trains'] = $this->Trains_model->getAllTrains();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/trains/data_trains', $data);
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
            $this->load->view('admin/trains/add_trains');
            $this->load->view('admin/templates/footer');

        } else {
            $this->Trains_model->addTrains();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('trains');
        }

    }

    public function delete($id)
    {
        $this->Flights_model->deleteTrains($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('trains');
    }

    public function update($id)
    {
        $data['trains'] = $this->Trains_model->getTrainsById($id);

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('to','To', 'required');
        $this->form_validation->set_rules('passengers','Passengers', 'required|numeric');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');;
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/trains/update_trains', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->Trains_model->updateTrains();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('trains');
        }

    }

}