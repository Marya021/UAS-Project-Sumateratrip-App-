<?php

class Souvenir extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Souvenir_model');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['souvenir'] = $this->Souvenir_model->getAllSouvenir();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/souvenir/data_souvenir', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        
        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('location','Location', 'required');
        $this->form_validation->set_rules('address','address', 'required');
        $this->form_validation->set_rules('info','info', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/souvenir/add_souvenir');
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Souvenir_model->addSouvenir();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('souvenir');
        }

    }

    public function delete($id)
    {
        $this->Souvenir_model->deleteSouvenir($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('souvenir');
    }

    public function update($id)
    {
        $data['souvenir'] = $this->Souvenir_model->getSouvenirById($id);

        $this->form_validation->set_rules('name','Name', 'required');
        $this->form_validation->set_rules('location','Location', 'required');
        $this->form_validation->set_rules('address','address', 'required');
        $this->form_validation->set_rules('info','info', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/souvenir/update_souvenir', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['transports']['file']);
            $this->upload();
            $this->Souvenir_model->updateSouvenir();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('souvenir');
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