<?php

class Class_Model extends CI_model
{
    public function getAllClass()
    {
        return $this->db->get('class')->result_array();
    }

    public function deleteClass($id)
    {
        $this->db->delete('class', ['id' => $id]);
    }

    public function getClassById($id)
    {
        return $this->db->get_where('class', ['id' => $id])->row_array();
    }
}
