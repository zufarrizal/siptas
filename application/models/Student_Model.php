<?php

class Student_Model extends CI_model
{
    public function getAllStudent()
    {
        return $this->db->get('student')->result_array();
    }

    public function deleteStudent($id)
    {
        $this->db->delete('student', ['id' => $id]);
    }

    public function getStudentById($id)
    {
        return $this->db->get_where('student', ['id' => $id])->row_array();
    }
}
