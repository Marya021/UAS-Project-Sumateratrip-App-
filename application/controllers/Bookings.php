<?php

class Bookings extends CI_Controller {

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
        $this->load->view('admin/bookings/data_bookings', $data, array('error' => ''));
        $this->load->view('admin/templates/footer');
    }

   public function add()
    {
        $data['status'] = ['Waiting','Paid'];

        $this->form_validation->set_rules('id_user','Id User', 'required');
        $this->form_validation->set_rules('booking','Booking', 'required');
        $this->form_validation->set_rules('detail','Detail', 'required');
        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('status','Status', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/bookings/add_bookings', $data);
            $this->load->view('admin/templates/footer');

        } else {
            $this->upload();
            $this->Bookings_model->addBookings();
            $this->session->set_flashdata('flash', "Add Success!");  
            redirect('bookings');
        }

    }

    public function delete($id)
    {
        $this->Bookings_model->deleteBookings($id);
        $this->session->set_flashdata('flash', 'Deleted Success!');
        redirect('bookings');
    }

    public function update($id)
    {
        $data['bookings'] = $this->Bookings_model->getBookingsById($id);
        $data['status'] = ['Waiting','Paid'];

        $this->form_validation->set_rules('id_user','Id User', 'required');
        $this->form_validation->set_rules('booking','Booking', 'required');
        $this->form_validation->set_rules('detail','Detail', 'required');
        $this->form_validation->set_rules('price','Price', 'required');
        $this->form_validation->set_rules('status','Status', 'required');

        if($this->form_validation->run()==FALSE) {
            $this->load->view('admin/templates/header');
            $this->load->view('admin/bookings/update_bookings', $data);
            $this->load->view('admin/templates/footer');

        } else {
            unlink("./uploads/".$data['bookings']['file']);
            $this->upload();
            $this->Bookings_model->updateBookings();
            $this->session->set_flashdata('flash', "Updated Success!");  
            redirect('bookings');
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