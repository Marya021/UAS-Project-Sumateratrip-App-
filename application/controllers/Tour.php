<?php

class Tour extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tour_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['tour'] = $this->Tour_model->getAllTour();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/tour/data_tourguide', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('age','Age', 'required');
        $this->form_validation->set_rules('phone','Phone', 'required');
        $this->form_validation->set_rules('destination','Destination', 'required');
        $this->form_validation->set_rules('address','Address', 'required');
        $this->form_validation->set_rules('price','Price', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/tour/add_tourguide');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Tour_model->addTour();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('tour');
        }

    }

    public function delete($id)
    {
        $this->Tour_model->deleteTour($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('tour');
    }

    public function update($id)
    {
        $data['tour'] = $this->Tour_model->getTourById($id);

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('age','Age', 'required');
        $this->form_validation->set_rules('phone','Phone', 'required');
        $this->form_validation->set_rules('destination','Destination', 'required');
        $this->form_validation->set_rules('address','Address', 'required');
        $this->form_validation->set_rules('price','Price', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/tour/update_tourguide', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['tour']['file']);
            $this->upload();
            $this->Tour_model->updateTour();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('tour');
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