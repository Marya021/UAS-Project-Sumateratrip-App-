<?php

class Souvenir_model extends CI_model {

    public function getAllSouvenir()
    {
        $query = $this->db->query("SELECT * from souvenir")->result_array();
        return $query;
    }

    public function addSouvenir()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "location" => $this->input->post('location', true),
            "file" => $_FILES['file']['name'],
            "address" => $this->input->post('address', true),
            "info" => $this->input->post('info', true),
        ];
        $this->db->insert('souvenir', $data);
    }

    public function deleteSouvenir($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('souvenir', ['id_souv' => $id]);
    }

    public function getSouvenirById($id)
    {
        return $this->db->get_where('souvenir', ['id_souv' => $id])->row_array();
    }

    public function updateSouvenir()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "location" => $this->input->post('location', true),
            "file" => $_FILES['file']['name'],
            "address" => $this->input->post('address', true),
            "info" => $this->input->post('info', true),
        ];

        $this->db->where('id_souv', $this->input->post('id_souv'));
        $this->db->update('souvenir', $data);
    }

}