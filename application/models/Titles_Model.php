<?php

class Titles_Model extends CI_model
{
    public function getAllTitles()
    {
        return $this->db->get('titles')->result_array();
    }

    public function deleteTitles($id)
    {
        $this->db->delete('titles', ['id' => $id]);
    }

    public function getTitlesById($id)
    {
        return $this->db->get_where('titles', ['id' => $id])->row_array();
    }
}
