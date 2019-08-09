<?php

class Car_model extends CI_model {

    public function getAllCar()
    {
        $query = $this->db->query("SELECT * from transports where category = 'Car'")->result_array();
        return $query;
    }

    public function addCar()
    {
        $cat = "Car";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "file" => $_FILES['file']['name'],
            "ket" => $this->input->post('ket', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "price" => $this->input->post('price', true),
        ];
        $this->db->insert('transports', $data);
    }

    public function deleteCar($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('transports', ['id_trans' => $id]);
    }

    public function getCarById($id)
    {
        return $this->db->get_where('transports', ['id_trans' => $id])->row_array();
    }

    public function updateCar()
    {
        $cat = "Car";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "file" => $_FILES['file']['name'],
            "ket" => $this->input->post('ket', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "price" => $this->input->post('price', true),
        ];

        $this->db->where('id_trans', $this->input->post('id_trans'));
        $this->db->update('transports', $data);
    }

}