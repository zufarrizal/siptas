<?php

class Admin_Model extends CI_model
{
    public function getAllAdmin()
    {
        return $this->db->get('admin')->result_array();
    }

    public function deleteAdmin($id)
    {
        $this->db->delete('admin', ['id' => $id]);
    }

    public function getAdminById($id)
    {
        return $this->db->get_where('admin', ['id' => $id])->row_array();
    }
}
