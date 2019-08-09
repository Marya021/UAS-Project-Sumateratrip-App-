<?php

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Pengguna_model');
    }

    public function login()
    {
        check_already_login();
        $this->load->view('index');
    }

    function process()
    {
        $email    = $this->input->post('email', TRUE);
        $password = $this->input->post('password', TRUE);
        $validate = $this->Pengguna_model->validate($email, $password);
        if ($validate->num_rows() > 0) {
            $data  = $validate->row_array();
            $idpelanggan  = $data['id_user'];
            $nama = $data['full_name'];
            $email = $data['email'];
            $level = $data['level'];
            $sesdata = array(
                'id_user'  => $idpelanggan,
                'full_name'     => $nama,
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
            redirect('auth/login');
        }
    }

    // public function process()
    // {
    //     $post = $this->input->post(null, TRUE);
    //     if(isset($_POST['login']))
    //     {
    //         $this->load->model('Pengguna_model');
    //         $query = $this->Pengguna_model->login($post);
    //         if($query->num_rows() > 0)
    //         {
    //             $row = $query->row();
    //             $params = array(
    //                 'idpelanggan' => $row->id_pelanggan,
    //                 'level' => $row->level['1']
    //             );
    //             $this->session->set_userdata($params);
    //             echo "<script>alert('Login berhasil');
    //                     window.location='".site_url('dashboard')."';
    //                     </script>";
    //         }
    //         else if($query->num_rows() > 0)
    //         {
    //             $row = $query->row();
    //             $params = array(
    //                 'idpelanggan' => $row->id_pelanggan,
    //                 'level' => $row->level['2']
    //             );
    //             $this->session->set_userdata($params);
    //             echo "<span class='text-danger'>user</span>";
    //         }
    //         else
    //         {
    //             echo "<script>alert('Gagal berhasil');
    //                     window.location='".site_url('auth/login')."';
    //                     </script>";
    //         }
    //     }
    // }
    
    function logout()
    {
      $this->session->sess_destroy();
      redirect('auth/login');
    }

    public function regis()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[percetakan.email]',
                ['is_unique' => 'Email ini telah terdaftar!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nohp', 'No Hp', 'required|trim');

        if($this->form_validation->run()==false)
        {
            $this->load->view('home');
        }
        else
        {
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'level' => 'pelanggan',
                'file' => 'default.jpg',
                'password' => $this->input->post('password'),
                'nohp' => $this->input->post('nohp'),
                'alamat' => $this->input->post('alamat')    
            ];
            $this->db->insert('pelanggan', $data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Berhasil terdaftar. Silahkan masuk</div>');
            redirect('auth');
        }
    }

}