<?php

class Vacation_model extends CI_model {

    public function getAllVacation()
    {
        $query = $this->db->query("SELECT * from vacation")->result_array();
        return $query;
    }

    public function addVacation()
    {
        $data = [
            "destination" => $this->input->post('destination', true),
            "facilities" => $this->input->post('facilities', true),
            "file" => $_FILES['file']['name'],
            "price" => $this->input->post('price', true),
            "credit" => $this->input->post('credit', true),
        ];
        $this->db->insert('vacation', $data);
    }

    public function deleteVacation($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('vacation', ['id_vac' => $id]);
    }

    public function getVacationById($id)
    {
        return $this->db->get_where('vacation', ['id_vac' => $id])->row_array();
    }

    public function updateVacation()
    {
        $data = [
            "destination" => $this->input->post('destination', true),
            "facilities" => $this->input->post('facilities', true),
            "file" => $_FILES['file']['name'],
            "price" => $this->input->post('price', true),
            "credit" => $this->input->post('credit', true),
        ];

        $this->db->where('id_vac', $this->input->post('id_vac'));
        $this->db->update('vacation', $data);
    }

}