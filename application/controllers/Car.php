<?php

class Car extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Car_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['car'] = $this->Car_model->getAllCar();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/car/data_car', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('ket','ket', 'required');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/car/add_car');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Car_model->addCar();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('car');
        }

    }

    public function delete($id)
    {
        $this->Car_model->deleteCar($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('car');
    }

    public function update($id)
    {
        $data['car'] = $this->Car_model->getCarById($id);

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('from','From', 'required');
        $this->form_validation->set_rules('ket','ket', 'required');
        $this->form_validation->set_rules('leave','Leave', 'required');
        $this->form_validation->set_rules('arrived','Arrived', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/car/update_car', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['transports']['file']);
            $this->upload();
            $this->Car_model->updateCar();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('car');
        }

    }

    public function upload()
    {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|png|jpg';

        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('file'))
        {
            //
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
        }
    }

}