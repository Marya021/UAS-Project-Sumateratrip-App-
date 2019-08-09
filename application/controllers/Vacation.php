<?php

class Vacation extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Vacation_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['vacation'] = $this->Vacation_model->getAllVacation();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/vacation/data_vacation', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        
        $this->form_validation->set_rules('destination','Destination', 'required');
        $this->form_validation->set_rules('facilities','Facilities', 'required');
        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('credit','Credit', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/vacation/add_vacation');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Vacation_model->addVacation();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('vacation');
        }

    }

    public function delete($id)
    {
        $this->Vacation_model->deleteVacation($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('vacation');
    }

    public function update($id)
    {
        $data['vacation'] = $this->Vacation_model->getVacationById($id);

        $this->form_validation->set_rules('destination','Destination', 'required');
        $this->form_validation->set_rules('facilities','Facilities', 'required');
        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('credit','Credit', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/vacation/update_vacation', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['vacation']['file']);
            $this->upload();
            $this->Vacation_model->updateVacation();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('vacation');
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