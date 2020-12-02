<?php

class Staff_Model extends CI_model
{
    public function getAllStaff()
    {
        return $this->db->get('staff')->result_array();
    }

    public function deleteStaff($id)
    {
        $this->db->delete('staff', ['id' => $id]);
    }

    public function getStaffById($id)
    {
        return $this->db->get_where('staff', ['id' => $id])->row_array();
    }
}
