<?php

class Submission_Model extends CI_model
{
    public function getAllSubmission()
    {
        return $this->db->get('submission')->result_array();
    }

    public function deleteSubmission($id)
    {
        $this->db->delete('submission', ['id' => $id]);
    }

    public function getSubmissionById($id)
    {
        return $this->db->get_where('submission', ['id' => $id])->row_array();
    }
}
