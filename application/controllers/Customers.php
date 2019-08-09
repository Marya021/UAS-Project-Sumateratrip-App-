<?php

class Customers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customers_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['customers'] = $this->Customers_model->getAllCustomers();
        $this->load->view('admin/templates/header');
        $this->load->view('admin/customers/data_customers', $data);
        $this->load->view('admin/templates/footer');
    }

    public function add()
    {
        $this->form_validation->set_rules('full_name','Full Name', 'required');
        $this->form_validation->set_rules('password','Password', 'required');
        $this->form_validation->set_rules('email','Email', 'required|valid_email');
        $this->form_validation->set_rules('phone','Phone', 'required|numeric');
        $this->form_validation->set_rules('address','Location', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/customers/add_customers');
            $this->load->view('admin/templates/footer');

        } else {
            $this->Customers_model->addCustomers();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('customers');
        }

    }

    public function delete($id)
    {
        $this->Customers_model->deleteCustomers($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('customers');
    }

    public function update($id)
    {
        $data['user'] = $this->Customers_model->getCustomersById($id);
 
        $this->form_validation->set_rules('full_name', 'Full Name', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric');
        $this->form_validation->set_rules('address','Location', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/customers/update_customers', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->Customers_model->updateCustomers();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('customers');
        }

    }

}