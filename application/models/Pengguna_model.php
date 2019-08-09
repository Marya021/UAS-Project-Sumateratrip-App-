<?php

class Pengguna_model extends CI_Model {

    // public function login($post)
    // {
    //     $this->db->select('*');
    //     $this->db->from('pelanggan');
    //     $this->db->where('email', $post['email']);
    //     $this->db->where('password', $post['password']);
    //     $query = $this->db->get();
    //     return $query;
    // }

    function validate($email,$password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $result = $this->db->get('user', 1);
        return $result;
    }

}