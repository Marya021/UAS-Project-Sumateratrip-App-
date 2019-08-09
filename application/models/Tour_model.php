<?php

class Tour_model extends CI_model {

    public function getAllTour()
    {
        $query = $this->db->query("SELECT * from tour")->result_array();
        return $query;
    }

    public function addTour()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "age" => $this->input->post('age', true),
            "phone" => $this->input->post('phone', true),
            "destination" => $this->input->post('destination', true),
            "file" => $_FILES['file']['name'],
            "address" => $this->input->post('address', true),
            "price" => $this->input->post('price', true),
        ];
        $this->db->insert('tour', $data);
    }

    public function deleteTour($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('tour', ['id_tour' => $id]);
    }

    public function getTourById($id)
    {
        return $this->db->get_where('tour', ['id_tour' => $id])->row_array();
    }

    public function updateTour()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "age" => $this->input->post('age', true),
            "phone" => $this->input->post('phone', true),
            "destination" => $this->input->post('destination', true),
            "file" => $_FILES['file']['name'],
            "address" => $this->input->post('address', true),
            "price" => $this->input->post('price', true),
        ];

        $this->db->where('id_tour', $this->input->post('id_tour'));
        $this->db->update('tour', $data);
    }

}