<?php

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pengguna_model');
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function flights_my_book($id)
    {
        $flights = $this->Flights_model->find($id);

        $data = array(
            'id'      => $flights->id_trans,
            'qty'     => 1,
            'price'   => $flights->price,
            'name'    => $flights->name,
    );
    
    $this->cart->insert($data);
    redirect('beranda');

    }

    public function login()
    {
        check_already_login();
        $this->load->view('login');
    }

    function process()
    {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->Pengguna_model->validate($email, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $iduser  = $data['id_user'];
            $full_name = $data['full_name'];
            $email = $data['email'];
            $level = $data['level'];
            $sesdata = array(
                'id_user'  => $iduser,
                'full_name' => $full_name,
                'email'     => $email,
                'level'     => $level,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if ($level === '1') {
                redirect('page');

                // access login for staff
            } else {
                redirect('page/pengguna');
            }
            
        } else {
            echo $this->session->set_flashdata('msg', 'Email atau Password Anda Salah');
            redirect('beranda/login');
        }
    }

    
    function logout()
    {
      $this->session->sess_destroy();
      redirect('beranda/login');
    }

    public function regis()
    {
        $this->form_validation->set_rules('full_name', 'Username', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()==false)
        {
            $this->load->view('register');
        }
        else
        {
            $data = [
                'full_name' => $this->input->post('full_name'),
                'email' => $this->input->post('email'),
                'level' => 2,
                'password' => $this->input->post('password'),  
            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil terdaftar. Silahkan masuk</div>');
            redirect('beranda/login');
        }
    }

    public function flights()
    {
        $data['flights'] = $this->Flights_model->getAllFlights();
        $this->load->view('flights',$data);
    }

    public function acco()
    {
        $data['accommodations'] = $this->Accommodations_model->getAllAccommodations();
        $this->load->view('acco',$data);
    }

    public function blog()
    {
        $this->load->view('blog');
    }

    public function bus()
    {
        $data['bus'] = $this->Bus_model->getAllBus();
        $this->load->view('bus',$data);
    }

    public function car()
    {
        $data['car'] = $this->Car_model->getAllCar();
        $this->load->view('car',$data);
    }

    public function contact()
    {
        $this->load->view('contact');
    }

    public function elements()
    {
        $this->load->view('elements');
    }

    public function offers()
    {
        $this->load->view('offers');
    }

    public function single_listing()
    {
        $this->load->view('single_listing');
    }

    public function souvenir()
    {
        $data['souvenir'] = $this->Souvenir_model->getAllSouvenir();
        $this->load->view('souvenir',$data);
    }

    public function trains()
    {
        $data['trains'] = $this->Trains_model->getAllTrains();
        $this->load->view('trains',$data);
    }

    public function vocation_credit()
    {
        $data['vacation'] = $this->Vacation_model->getAllVacation();
        $this->load->view('vocation_credit',$data);
    }

    public function tour_guide()
    {
        $data['tour'] = $this->Tour_model->getAllTour();
        $this->load->view('tour_guide',$data);
    }
}
