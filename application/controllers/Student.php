<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->model('Submission_Model');
        $this->load->model('Study_Model');
        $this->load->model('Lecturers_Model');
        $this->load->model('Class_Model');
        $this->load->model('Titles_Model');

        if (empty($this->session->userdata('role_id'))) {
            redirect('auth/login');
        }
        $login = $this->session->userdata('role_id');
        if ($login != '3') {
            redirect('auth/forbidden403');
        }
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('student', ['username' => $this->session->userdata('username')])->row_array();

        $data['submin'] = $data['user']['username'];

        $data['class'] = $this->Class_Model->getAllClass();
        $data['titles'] = $this->Titles_Model->getAllTitles();
        $data['submission'] = $this->db->get_where('submission', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('gender', 'Gender', 'required|trim');
        $this->form_validation->set_rules('class', 'Class', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Student';
            $data['title'] = 'Student';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/student_sidebar', $data);
            $this->load->view('student/index');
            $this->load->view('templates/system_footer');
        } else {
            $username = $this->input->post('username');
            $fullname = $this->input->post('name');
            $email = $this->input->post('email');
            $gender = $this->input->post('gender');
            $class = $this->input->post('class');
            $year = $this->input->post('year');
            $city = $this->input->post('city');

            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '5120';
                $config['upload_path']   = './assets/dist/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . '/assets/dist/img/profile/' . $old_image);
                    }

                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $birthdate = $this->input->post('birthdate');
            $newDate = date("y-d-m", strtotime($birthdate));

            $address = $this->input->post('address');
            $phone = $this->input->post('phone');

            $this->db->set('fullname', $fullname);
            $this->db->set('email', $email);
            $this->db->set('gender', $gender);
            $this->db->set('class', $class);
            $this->db->set('year', $year);
            $this->db->set('city', $city);
            $this->db->set('birthdate', $newDate);
            $this->db->set('address', $address);
            $this->db->set('phone', $phone);

            $this->db->where('username', $username);
            $this->db->update('student');
            redirect('student');
        }
    }

    public function submission()
    {
        $data['user'] = $this->db->get_where('student', ['username' => $this->session->userdata('username')])->row_array();

        $data['submission'] = $this->Submission_Model->getAllSubmission();

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Data Submission';
        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/student_sidebar', $data);
        $this->load->view('student/submission', $data);
        $this->load->view('templates/system_footer');
    }

    public function addsubmission()
    {
        $data['user'] = $this->db->get_where('student', ['username' => $this->session->userdata('username')])->row_array();

        $data['submission'] = $this->Submission_Model->getAllSubmission();
        $data['study'] =  $this->Study_Model->getAllStudy();
        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[submission.username]');
        $this->form_validation->set_rules('title', 'Title', 'required|trim|is_unique[submission.title]');
        $this->form_validation->set_rules('lect2', 'Lecturers 1', 'required|trim|differs[lect3]');
        $this->form_validation->set_rules('lect3', 'Lecturers 2', 'required|trim|differs[lect2]');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Add Submission';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/student_sidebar', $data);
            $this->load->view('student/addsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {

            $username = $this->input->post('username');
            $data['stdn'] = $this->db->get_where('student', ['username' => $username])->row_array();

            $lect2 = $this->input->post('lect2');
            $data['lect'] = $this->db->get_where('lecturers', ['lecturers' => $lect2])->row_array();

            $upload_file = $_FILES['file']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf|jpg|png';
                $config['max_size']      = '10240';
                $config['upload_path']   = './assets/dist/file/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('file', $new_file);
                }
            }

            $data = [
                'username' => $username,
                'fullname' => $data['stdn']['fullname'],
                'class' => $data['stdn']['class'],
                'title' => htmlspecialchars($this->input->post('title', true)),
                'lect2' => htmlspecialchars($this->input->post('lect2', true)),
                'lect3' => htmlspecialchars($this->input->post('lect3', true)),
                'study' => $data['lect']['study'],
                'phone' => $data['stdn']['phone'],
                'approval' => 3,
                'file' => $this->upload->data('file_name'),
                'date_created' => time()
            ];
            $this->db->insert('submission', $data);
            redirect('student/submission');
        }
    }

    public function editsubmission($id)
    {
        $data['user'] = $this->db->get_where('student', ['username' => $this->session->userdata('username')])->row_array();

        $data['history'] = $this->db->get_where('history')->result_array();
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);
        $data['study'] = $this->Study_Model->getAllStudy();
        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('lect2', 'Lecturers 1', 'required|trim|differs[lect3]');
        $this->form_validation->set_rules('lect3', 'Lecturers 2', 'required|trim|differs[lect2]');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Edit Submission';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/student_sidebar', $data);
            $this->load->view('student/editsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {

            $username = $this->input->post('username');
            $data['stdn'] = $this->db->get_where('student', ['username' => $username])->row_array();

            $lecturers = $this->input->post('lecturers');
            $data['lect'] = $this->db->get_where('lecturers', ['lecturers' => $lecturers])->row_array();

            $upload_file = $_FILES['file']['name'];

            if ($upload_file) {
                $config['allowed_types'] = 'pdf';
                $config['max_size']      = '10240';
                $config['upload_path']   = './assets/dist/file/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')) {
                    $old_file = $data['submission']['file'];
                    if ($old_file != 'file.pdf') {
                        unlink(FCPATH . 'assets/dist/file/' . $old_file);
                    }
                    $new_file = $this->upload->data('file_name');
                    $this->db->set('file', $new_file);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $id = $this->input->post('id');
            $fullname = $data['stdn']['fullname'];
            $class = $data['stdn']['class'];
            $title = $this->input->post('title');
            $study = $data['lect']['study'];
            $phone = $data['stdn']['phone'];
            $approval = '3';

            $this->db->set('username', $username);
            $this->db->set('fullname', $fullname);
            $this->db->set('class', $class);
            $this->db->set('title', $title);
            $this->db->set('study', $study);
            $this->db->set('lecturers', $lecturers);
            $this->db->set('phone', $phone);
            $this->db->set('approval', $approval);

            $this->db->where('id', $id);
            $this->db->update('submission');
            redirect('student/submission');
        }
    }

    public function printsub($id)
    {
        $data['user'] = $this->db->get_where('student', ['username' => $this->session->userdata('username')])->row_array();
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);
        $data['study'] = $this->Study_Model->getAllStudy();

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Report Submission';
        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/student_sidebar', $data);
        $this->load->view('student/printsub', $data);
        $this->load->view('templates/system_footer');
    }
}
