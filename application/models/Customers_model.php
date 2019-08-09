<?php

class Customers_model extends CI_model {

    public function getAllCustomers()
    {
        return $this->db->get('user')->result_array();
    }

    public function addCustomers()
    {
        $data = [
            "full_name" => $this->input->post('full_name', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
        ];

        $this->db->insert('user', $data);
    }

    public function deleteCustomers($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('user', ['id_user' => $id]);
    }

    public function getCustomersById($id)
    {
        return $this->db->get_where('user', ['id_user' => $id])->row_array();
    }

    public function updateCustomers()
    {
        $data = [
            "full_name" => $this->input->post('full_name', true),
            "email" => $this->input->post('email', true),
            "password" => $this->input->post('password', true),
            "phone" => $this->input->post('phone', true),
            "address" => $this->input->post('address', true),
        ];

        $this->db->where('id_user', $this->input->post('id_user'));
        $this->db->update('user', $data);
    }

}