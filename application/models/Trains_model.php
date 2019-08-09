<?php

class Trains_model extends CI_model {

    public function getAllTrains()
    {
        $query = $this->db->query("SELECT * from transports where category = 'Trains'")->result_array();
        return $query;
    }

    public function addTrains()
    {
        $cat = "Trains";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "to" => $this->input->post('to', true),
            "passengers" => $this->input->post('passengers', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "price" => $this->input->post('price', true),
        ];
        $this->db->insert('transports', $data);
    }

    public function deleteTrains($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('transports', ['id_trans' => $id]);
    }

    public function getTrainsById($id)
    {
        return $this->db->get_where('transports', ['id_trans' => $id])->row_array();
    }

    public function updateTrains()
    {
        $cat = "Trains";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "to" => $this->input->post('to', true),
            "passengers" => $this->input->post('passengers', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "price" => $this->input->post('price', true),
        ];

        $this->db->where('id_trans', $this->input->post('id_trans'));
        $this->db->update('transports', $data);
    }

}