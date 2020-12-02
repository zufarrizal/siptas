<?php

class Study_Model extends CI_model
{
    public function getAllStudy()
    {
        return $this->db->get('study')->result_array();
    }

    public function deleteStudy($id)
    {
        $this->db->delete('study', ['id' => $id]);
    }

    public function getStudyById($id)
    {
        return $this->db->get_where('study', ['id' => $id])->row_array();
    }
}
