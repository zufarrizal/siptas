<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

        $this->load->library('form_validation');
        $this->load->model('Admin_Model');
        $this->load->model('Staff_Model');
        $this->load->model('Student_Model');
        $this->load->model('Class_Model');
        $this->load->model('Lecturers_Model');
        $this->load->model('Titles_Model');
        $this->load->model('Study_Model');
        $this->load->model('Submission_Model');

        if (empty($this->session->userdata('role_id'))) {
            redirect('auth/login');
        }
        $login = $this->session->userdata('role_id');
        if ($login != '2') {
            redirect('auth/forbidden403');
        }
    }

    public function index()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Count Data Table
        $data['HStudent'] = $this->db->get('student')->num_rows();
        $data['HAdmin'] = $this->db->get('admin')->num_rows();
        $data['HStaff'] = $this->db->get('staff')->num_rows();
        $data['HClass'] = $this->db->get('class')->num_rows();
        $data['HLecturers'] = $this->db->get('lecturers')->num_rows();
        $data['HTitle'] = $this->db->get('titles')->num_rows();
        $data['HSubmission'] = $this->db->get('submission')->num_rows();

        // Memuat Data Student
        $data['student'] = $this->db->order_by('id', "desc")->get('student')->result_array();

        // Memuat Data View
        $data['title'] = 'Dashboard';
        $data['HeadTitle'] = 'Dashboard';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/index', $data);
        $this->load->view('templates/system_footer');
    }

    public function student()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['student'] = $this->db->get('student')->result_array();

        $data['HeadTitle'] = 'Student';
        $data['title'] = 'Data Student';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/student', $data);
        $this->load->view('templates/system_footer');
    }

    public function editstudent($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['student'] = $this->Student_Model->getStudentById($id);
        $data['class'] = $this->db->get('class')->result_array();

        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('class', 'class', 'required|trim');
        $this->form_validation->set_rules('city', 'city', 'required|trim');
        $this->form_validation->set_rules('birthdate', 'birthdate', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Student';
            $data['HeadTitle'] = 'Student';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/editstudent', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
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

            $this->db->set('username', $username);
            $this->db->set('fullname', $fullname);
            $this->db->set('email', $email);
            $this->db->set('gender', $gender);
            $this->db->set('class', $class);
            $this->db->set('year', $year);
            $this->db->set('city', $city);
            $this->db->set('birthdate', $newDate);
            $this->db->set('address', $address);
            $this->db->set('phone', $phone);

            $this->db->where('id', $id);
            $this->db->update('student');
            redirect('staff/student');
        }
    }

    public function addstudent()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['class'] = $this->Class_Model->getAllClass();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Student';
            $data['HeadTitle'] = 'Student';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/addstudent', $data);
            $this->load->view('templates/system_footer');
        } else {
            $birthdate = $this->input->post('birthdate');
            $newDate = date("y-d-m", strtotime($birthdate));

            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'fullname' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'gender' => $this->input->post('gender'),
                'class' => $this->input->post('class'),
                'year' => $this->input->post('year'),
                'city' => $this->input->post('city'),
                'birthdate' => $newDate,
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time(),
            ];
            $this->db->insert('student', $data);
            redirect('staff/student');
        }
    }

    public function deleteStudent($id)
    {
        $this->Student_Model->deleteStudent($id);
        redirect('staff/student');
    }


    public function class()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['class'] = $this->db->get('class')->result_array();

        $data['HeadTitle'] = 'Class';
        $data['title'] = 'Data Class';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/class', $data);
        $this->load->view('templates/system_footer');
    }

    public function editclass($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['class'] = $this->Class_Model->getClassById($id);

        $this->form_validation->set_rules('class', 'Class', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Class';
            $data['HeadTitle'] = 'Class';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/editclass', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $class = $this->input->post('class');

            $this->db->set('class', $class);

            $this->db->where('id', $id);
            $this->db->update('class');
            redirect('staff/class');
        }
    }

    public function addclass()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('class', 'Class', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Class';
            $data['title'] = 'Add Class';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/addclass', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'class' => htmlspecialchars($this->input->post('class', true)),
            ];
            $this->db->insert('class', $data);
            redirect('staff/class');
        }
    }

    public function deleteClass($id)
    {
        $this->Class_Model->deleteClass($id);
        redirect('staff/class');
    }

    public function study()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['study'] = $this->db->get('study')->result_array();

        $data['HeadTitle'] = 'Study';
        $data['title'] = 'Data Study';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/study', $data);
        $this->load->view('templates/system_footer');
    }

    public function editstudy($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['study'] = $this->Study_Model->getStudyById($id);

        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Study';
            $data['HeadTitle'] = 'Study';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/editstudy', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $study = $this->input->post('study');

            $this->db->set('study', $study);

            $this->db->where('id', $id);
            $this->db->update('study');
            redirect('staff/study');
        }
    }

    public function addstudy()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Study';
            $data['title'] = 'Add Study';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/addstudy', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'study' => htmlspecialchars($this->input->post('study', true)),
            ];

            $this->db->insert('study', $data);
            redirect('staff/study');
        }
    }

    public function deleteStudy($id)
    {
        $this->Study_Model->deleteStudy($id);
        redirect('staff/study');
    }

    public function lecturers()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['lecturers'] = $this->db->get('lecturers')->result_array();

        $data['HeadTitle'] = 'Lecturers';
        $data['title'] = 'Data Lecturers';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/lecturers', $data);
        $this->load->view('templates/system_footer');
    }

    public function editlecturers($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['lecturers'] = $this->Lecturers_Model->getLecturersById($id);
        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');
        $this->form_validation->set_rules('study', 'study', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim|numeric');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Lecturers';
            $data['title'] = 'Edit Lecturers';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/editlecturers', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $lecturers = $this->input->post('lecturers');
            $study = $this->input->post('study');
            $phone = $this->input->post('phone');

            $this->db->set('lecturers', $lecturers);
            $this->db->set('study', $study);
            $this->db->set('phone', $phone);

            $this->db->where('id', $id);
            $this->db->update('lecturers');
            redirect('staff/lecturers');
        }
    }

    public function addlecturers()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();
        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');
        $this->form_validation->set_rules('study', 'study', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Lecturers';
            $data['HeadTitle'] = 'Lecturers';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/addlecturers', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'lecturers' => htmlspecialchars($this->input->post('lecturers', true)),
                'study' => htmlspecialchars($this->input->post('study', true)),
                'phone' => htmlspecialchars($this->input->post('phone', true)),
            ];
            $this->db->insert('lecturers', $data);
            redirect('staff/lecturers');
        }
    }

    public function deleteLecturers($id)
    {
        $this->Lecturers_Model->deleteLecturers($id);
        redirect('staff/lecturers');
    }

    public function titles()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['titles'] = $this->db->get('titles')->result_array();

        $data['HeadTitle'] = 'Titles';
        $data['title'] = 'Data Titles';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/titles', $data);
        $this->load->view('templates/system_footer');
    }

    public function edittitles($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['titles'] = $this->Titles_Model->getTitlesById($id);
        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Titles';
            $data['title'] = 'Edit Titles';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/edittitles', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $study = $this->input->post('study');

            $this->db->set('title', $title);
            $this->db->set('study', $study);

            $this->db->where('id', $id);
            $this->db->update('titles');
            redirect('staff/titles');
        }
    }

    public function addtitles()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Titles';
            $data['HeadTitle'] = 'Titles';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/addtitles', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title', true)),
                'study' => htmlspecialchars($this->input->post('study', true))
            ];
            $this->db->insert('titles', $data);
            redirect('staff/titles');
        }
    }

    public function deleteTitles($id)
    {
        $this->Titles_Model->deleteTitles($id);
        redirect('staff/titles');
    }

    public function submission()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        $data['submission'] = $this->db->order_by('id', "desc")->get('submission')->result_array();

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Data Submission';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/submission', $data);
        $this->load->view('templates/system_footer');
    }

    public function detailsubmission($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);
        $data['history'] = $this->db->get_where('history')->result_array();

        $this->form_validation->set_rules('approval', 'Approval', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Detail Submission';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/staff_sidebar', $data);
            $this->load->view('staff/detailsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $note = $this->input->post('note');
            $approval = $this->input->post('approval');
            $this->db->set('note', $note);
            $this->db->set('approval', $approval);

            $this->db->where('id', $id);
            $this->db->update('submission');

            if ($approval == 1) {
                redirect('staff/submission');
            } elseif ($approval == 3) {
                redirect('staff/submission');
            } else {
                $data = [
                    'username' => $this->input->post('username'),
                    'history' => $this->input->post('note'),
                    'date' => time()
                ];
                $this->db->insert('history', $data);
                redirect('staff/submission');
            }
        }
    }

    public function printsub($id)
    {
        $data['user'] = $this->db->get_where('staff', ['username' => $this->session->userdata('username')])->row_array();
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Report Submission';
        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/staff_sidebar', $data);
        $this->load->view('staff/printsub', $data);
        $this->load->view('templates/system_footer');
    }
}
