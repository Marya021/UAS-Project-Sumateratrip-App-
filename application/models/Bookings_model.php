<?php

class Bookings_model extends CI_model {

    public function getAllBookings()
    {
        $query = $this->db->query("SELECT * from bookings")->result_array();
        return $query;
    }

    public function addBookings()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "booking" => $this->input->post('booking', true),
            "detail" => $this->input->post('detail', true),
            "price" => $this->input->post('price', true),
            "status" => $this->input->post('status', true),
        ];
        $this->db->insert('bookings', $data);
    }

    public function deleteBookings($id)
    {
        //$this->db->where('id_user', $id);
        $this->db->delete('bookings', ['id_book' => $id]);
    }

    public function getBookingsById($id)
    {
        return $this->db->get_where('bookings', ['id_book' => $id])->row_array();
    }

    public function updateBookings()
    {
        $data = [
            "id_user" => $this->input->post('id_user', true),
            "booking" => $this->input->post('booking', true),
            "detail" => $this->input->post('detail', true),
            "price" => $this->input->post('price', true),
            "status" => $this->input->post('status', true),
        ];

        $this->db->where('id_book', $this->input->post('id_book'));
        $this->db->update('bookings', $data);
    }

}