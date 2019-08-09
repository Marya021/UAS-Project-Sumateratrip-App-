<?php

class Flights_model extends CI_model {

    public function getAllFlights()
    {
        $query = $this->db->query("SELECT * from transports where category = 'Flights'")->result_array();
        return $query;
    }

    public function addFlights()
    {
        $cat = "Flights";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "to" => $this->input->post('to', true),
            "passengers" => $this->input->post('passengers', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "class" => $this->input->post('class', true),
            "price" => $this->input->post('price', true),
        ];
        $this->db->insert('transports', $data);
    }

    public function deleteFlights($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('transports', ['id_trans' => $id]);
    }

    public function getFlightsById($id)
    {
        return $this->db->get_where('transports', ['id_trans' => $id])->row_array();
    }

    public function updateFlights()
    {
        $cat = "Flights";
        $data = [
            "name" => $this->input->post('name', true),
            "category" => $cat,
            "from" => $this->input->post('from', true),
            "to" => $this->input->post('to', true),
            "passengers" => $this->input->post('passengers', true),
            "leave" => $this->input->post('leave', true),
            "arrived" => $this->input->post('arrived', true),
            "class" => $this->input->post('class', true),
            "price" => $this->input->post('price', true),
        ];

        $this->db->where('id_trans', $this->input->post('id_trans'));
        $this->db->update('transports', $data);
    }

    public function find($id)
    {
        $result = $this->db->where('id_trans, $id') 
                        ->get('transports');
        if($result->num_rows()>0){
            return $result->row();
        }else{
            return array();
        }
    }

}