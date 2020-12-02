<?php

class Lecturers_Model extends CI_model
{
    public function getAllLecturers()
    {
        return $this->db->get('lecturers')->result_array();
    }

    public function deleteLecturers($id)
    {
        $this->db->delete('lecturers', ['id' => $id]);
    }

    public function getLecturersById($id)
    {
        return $this->db->get_where('lecturers', ['id' => $id])->row_array();
    }
}
