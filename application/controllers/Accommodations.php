<?php

class Accommodations extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Accommodations_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['accommodations'] = $this->Accommodations_model->getAllAccommodations();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/accommodations/data_hotels', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        $data['rating'] = [1, 2, 3, 4, 5];

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('address','Address', 'required');
        $this->form_validation->set_rules('ket','ket', 'required');
        $this->form_validation->set_rules('rating','Rating', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/accommodations/add_hotels', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Accommodations_model->addAccommodations();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('accommodations');
        }

    }

    public function delete($id)
    {
        $this->Accommodations_model->deleteAccommodations($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('accommodations');
    }

    public function update($id)
    {
        $data['accommodations'] = $this->Accommodations_model->getAccommodationsById($id);
        $data['rating'] = [1, 2, 3, 4, 5];
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('address','Address', 'required');
        $this->form_validation->set_rules('ket','ket', 'required');
        $this->form_validation->set_rules('rating','Rating', 'required');
        $this->form_validation->set_rules('price','Price', 'required|numeric');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/accommodations/update_hotels', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['hotels']['file']);
            $this->upload();
            $this->Accommodations_model->updateAccommodations();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('accommodations');
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