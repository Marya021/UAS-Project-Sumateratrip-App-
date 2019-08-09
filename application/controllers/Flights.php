<?php

class Flights extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Flights_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['flights'] = $this->Flights_model->getAllFlights();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/flights/data_flights', $data);
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        $data['class'] = ['Economy','Regular','Business'];
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('to','To', 'required');
        $this->form_validation->set_rules('passengers','Passengers', 'required|numeric');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('class','Class', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/flights/add_flights', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->Flights_model->addFlights();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('flights');
        }

    }

    public function delete($id)
    {
        $this->Flights_model->deleteFlights($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('flights');
    }

    public function update($id)
    {
        $data['flights'] = $this->Flights_model->getFlightsById($id);
        $data['class'] = ['Economy','Regular','Business'];

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('to','To', 'required');
        $this->form_validation->set_rules('passengers','Passengers', 'required|numeric');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('class','Class', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/flights/update_flights', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->Flights_model->updateFlights();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('flights');
        }

    }

}