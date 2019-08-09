<?php

class Accommodations_model extends CI_model {

    public function getAllAccommodations()
    {
        $query = $this->db->query("SELECT * from hotels")->result_array();
        return $query;
    }

    public function addAccommodations()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "address" => $this->input->post('address', true),
            "file" => $_FILES['file']['name'],
            "ket" => $this->input->post('ket', true),
            "rating" => $this->input->post('rating', true),
            "price" => $this->input->post('price', true),
        ];
        $this->db->insert('hotels', $data);
    }

    public function deleteAccommodations($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('hotels', ['id_hotels' => $id]);
    }

    public function getAccommodationsById($id)
    {
        return $this->db->get_where('hotels', ['id_hotels' => $id])->row_array();
    }

    public function updateAccommodations()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "address" => $this->input->post('address', true),
            "file" => $_FILES['file']['name'],
            "ket" => $this->input->post('ket', true),
            "rating" => $this->input->post('rating', true),
            "price" => $this->input->post('price', true),
        ];

        $this->db->where('id_hotels', $this->input->post('id_hotels'));
        $this->db->update('hotels', $data);
    }

}