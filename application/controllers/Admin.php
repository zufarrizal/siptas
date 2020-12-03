<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Admin_Model');
        $this->load->model('Staff_Model');
        $this->load->model('Student_Model');
        $this->load->model('Class_Model');
        $this->load->model('Study_Model');
        $this->load->model('Lecturers_Model');
        $this->load->model('Titles_Model');
        $this->load->model('Submission_Model');
        $this->load->model('Study_Model');

        if (empty($this->session->userdata('role_id'))) {
            redirect('auth/login');
        }
        $login = $this->session->userdata('role_id');
        if ($login != '1') {
            redirect('auth/forbidden403');
        }
    }

    public function index()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Count Data Table
        $data['HStudent'] = $this->db->get('student')->num_rows();
        $data['HAdmin'] = $this->db->get('admin')->num_rows();
        $data['HStaff'] = $this->db->get('staff')->num_rows();
        $data['HClass'] = $this->db->get('class')->num_rows();
        $data['HLecturers'] = $this->db->get('lecturers')->num_rows();
        $data['HTitle'] = $this->db->get('titles')->num_rows();
        $data['HSubmission'] = $this->db->get('submission')->num_rows();
        $data['HStudy'] = $this->db->get('study')->num_rows();

        // Memuat Data Student
        $data['student'] = $this->db->order_by('id', "desc")->get('student')->result_array();

        // Memuat Data View
        $data['title'] = 'Dashboard';
        $data['HeadTitle'] = 'Dashboard ';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/system_footer');
    }

    public function admin()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        // Memuat Data View
        $data['admin'] = $this->Admin_Model->getAllAdmin();

        $data['title'] = 'Admin';
        $data['HeadTitle'] = 'Admin';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templates/system_footer');
    }

    public function edit($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        // Memuat Data By ID
        $data['admin'] = $this->Admin_Model->getAdminById($id);

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Admin';
            $data['HeadTitle'] = 'Admin';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/edit', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $fullname = $this->input->post('name');

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

            $this->db->set('fullname', $fullname);

            $this->db->where('username', $username);
            $this->db->update('admin');
            redirect('admin/admin');
        }
    }

    public function addadmin()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['admin'] = $this->Admin_Model->getAllAdmin();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Admin';
            $data['HeadTitle'] = 'Admin';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addadmin', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'fullname' => htmlspecialchars($this->input->post('name', true)),
                'image' => 'default.jpg',
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('admin', $data);
            redirect('admin/admin');
        }
    }

    public function deleteAdmin($id)
    {
        $this->Admin_Model->deleteAdmin($id);
        redirect('admin/admin');
    }

    public function staff()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['staff'] = $this->Staff_Model->getAllStaff();

        $data['HeadTitle'] = 'Staff';
        $data['title'] = 'Data Staff';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/staff', $data);
        $this->load->view('templates/system_footer');
    }

    public function editstaff($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        // Memuat Data By ID
        $data['staff'] = $this->Staff_Model->getStaffById($id);

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Staff';
            $data['HeadTitle'] = 'Staff';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editstaff', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $fullname = $this->input->post('name');
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

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

            $this->db->set('username', $username);
            $this->db->set('fullname', $fullname);

            if ($password == !null) {
                $this->db->set('password', $password);
            }

            $this->db->where('id', $id);
            $this->db->update('staff');
            redirect('admin/staff');
        }
    }

    public function addstaff()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['staff'] = $this->Staff_Model->getAllStaff();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $this->form_validation->set_rules('name', 'Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Staff';
            $data['HeadTitle'] = 'Staff';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addstaff', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'fullname' => htmlspecialchars($this->input->post('name', true)),
                'image' => 'default.jpg',
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];
            $this->db->insert('staff', $data);
            redirect('admin/staff');
        }
    }

    public function deleteStaff($id)
    {
        $this->Staff_Model->deleteStaff($id);
        redirect('admin/staff');
    }

    public function student()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['student'] = $this->db->get('student')->result_array();

        $data['HeadTitle'] = 'Student';
        $data['title'] = 'Data Student';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/student', $data);
        $this->load->view('templates/system_footer');
    }

    public function editstudent($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['student'] = $this->Student_Model->getStudentById($id);
        $data['class'] = $this->db->get('class')->result_array();

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('birthdate', 'Birthdate', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Student';
            $data['HeadTitle'] = 'Student';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editstudent', $data);
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
            $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

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
            if ($password == !null) {
                $this->db->set('password', $password);
            }
            $this->db->where('id', $id);
            $this->db->update('student');
            redirect('admin/student');
        }
    }

    public function addstudent()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

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
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addstudent', $data);
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
            redirect('admin/student');
        }
    }

    public function deleteStudent($id)
    {
        $this->Student_Model->deleteStudent($id);
        redirect('admin/student');
    }


    public function class()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['class'] = $this->db->get('class')->result_array();

        $data['HeadTitle'] = 'Class';
        $data['title'] = 'Data Class';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/class', $data);
        $this->load->view('templates/system_footer');
    }

    public function editclass($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['class'] = $this->Class_Model->getClassById($id);

        $this->form_validation->set_rules('class', 'Class', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Class';
            $data['HeadTitle'] = 'Class';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editclass', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $class = $this->input->post('class');

            $this->db->set('class', $class);

            $this->db->where('id', $id);
            $this->db->update('class');
            redirect('admin/class');
        }
    }

    public function addclass()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('class', 'Class', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Class';
            $data['title'] = 'Add Class';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addclass', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'class' => htmlspecialchars($this->input->post('class', true)),
            ];
            $this->db->insert('class', $data);
            redirect('admin/class');
        }
    }

    public function deleteClass($id)
    {
        $this->Class_Model->deleteClass($id);
        redirect('admin/class');
    }

    public function study()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['study'] = $this->db->get('study')->result_array();

        $data['HeadTitle'] = 'Study';
        $data['title'] = 'Data Study';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/study', $data);
        $this->load->view('templates/system_footer');
    }

    public function editstudy($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['study'] = $this->Study_Model->getStudyById($id);

        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Study';
            $data['HeadTitle'] = 'Study';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editstudy', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $study = $this->input->post('study');

            $this->db->set('study', $study);

            $this->db->where('id', $id);
            $this->db->update('study');
            redirect('admin/study');
        }
    }

    public function addstudy()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Study';
            $data['title'] = 'Add Study';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addstudy', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'study' => htmlspecialchars($this->input->post('study', true)),
            ];

            $this->db->insert('study', $data);
            redirect('admin/study');
        }
    }

    public function deleteStudy($id)
    {
        $this->Study_Model->deleteStudy($id);
        redirect('admin/study');
    }

    public function lecturers()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['lecturers'] = $this->db->get('lecturers')->result_array();

        $data['HeadTitle'] = 'Lecturers';
        $data['title'] = 'Data Lecturers';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/lecturers', $data);
        $this->load->view('templates/system_footer');
    }

    public function editlecturers($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

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
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editlecturers', $data);
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
            redirect('admin/lecturers');
        }
    }

    public function addlecturers()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();
        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');
        $this->form_validation->set_rules('study', 'study', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Lecturers';
            $data['HeadTitle'] = 'Lecturers';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addlecturers', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'lecturers' => htmlspecialchars($this->input->post('lecturers', true)),
                'study' => htmlspecialchars($this->input->post('study', true)),
                'phone' => htmlspecialchars($this->input->post('phone', true)),
            ];
            $this->db->insert('lecturers', $data);
            redirect('admin/lecturers');
        }
    }

    public function deleteLecturers($id)
    {
        $this->Lecturers_Model->deleteLecturers($id);
        redirect('admin/lecturers');
    }

    public function titles()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['titles'] = $this->db->get('titles')->result_array();

        $data['HeadTitle'] = 'Titles';
        $data['title'] = 'Data Titles';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/titles', $data);
        $this->load->view('templates/system_footer');
    }

    public function edittitles($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['titles'] = $this->Titles_Model->getTitlesById($id);
        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Titles';
            $data['title'] = 'Edit Titles';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/edittitles', $data);
            $this->load->view('templates/system_footer');
        } else {
            $id = $this->input->post('id');
            $title = $this->input->post('title');
            $study = $this->input->post('study');

            $this->db->set('title', $title);
            $this->db->set('study', $study);

            $this->db->where('id', $id);
            $this->db->update('titles');
            redirect('admin/titles');
        }
    }

    public function addtitles()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['study'] = $this->Study_Model->getAllStudy();

        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('study', 'Study', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Add Titles';
            $data['HeadTitle'] = 'Titles';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addtitles', $data);
            $this->load->view('templates/system_footer');
        } else {
            $data = [
                'title' => htmlspecialchars($this->input->post('title', true)),
                'study' => htmlspecialchars($this->input->post('study', true))
            ];
            $this->db->insert('titles', $data);
            redirect('admin/titles');
        }
    }

    public function deleteTitles($id)
    {
        $this->Titles_Model->deleteTitles($id);
        redirect('admin/titles');
    }

    public function submission()
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['submission'] = $this->Submission_Model->getAllSubmission();

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Data Submission';

        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/submission', $data);
        $this->load->view('templates/system_footer');
    }

    public function detailsubmission($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);
        $data['history'] = $this->db->get_where('history')->result_array();
        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();

        $this->form_validation->set_rules('approval', 'Approval', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Detail Submission';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/detailsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {
            $lecturers = $this->input->post('lecturers');
            $year = $this->input->post('year');

            $filter = array("lecturers" => $lecturers, "year" => $year);
            $data['submax'] = $this->db->get_where('submission', $filter)->num_rows();
            $max = $data['submax'];

            if ($max < 10) {
                $id = $this->input->post('id');
                $note = $this->input->post('note');
                $approval = $this->input->post('approval');

                $this->db->set('lecturers', $lecturers);
                $this->db->set('note', $note);
                $this->db->set('approval', $approval);

                $this->db->where('id', $id);
                $this->db->update('submission');

                if ($approval == 1) {
                    redirect('admin/submission');
                } elseif ($approval == 3) {
                    redirect('admin/submission');
                } else {
                    $data = [
                        'username' => $this->input->post('username'),
                        'history' => $this->input->post('note'),
                        'date' => time()
                    ];
                    $this->db->insert('history', $data);
                    redirect('admin/submission');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">The lecturer you choose is full this year. please choose another lecturer!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect('Admin/detailsubmission/' . $id);
            }
        }
    }

    public function editsubmission($id)
    {
        // SetData User Login
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        // Memuat Data By ID
        $data['student'] = $this->Student_Model->getAllStudent();
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);
        $data['study'] =  $this->Study_Model->getAllStudy();
        $data['lecturers'] =  $this->Lecturers_Model->getAllLecturers();

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('title', 'Title', 'required|trim');
        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');
        $this->form_validation->set_rules('lect2', 'Lecturers 2', 'required|trim|differs[lect3]');
        $this->form_validation->set_rules('lect3', 'Lecturers 3', 'required|trim|differs[lect2]');
        $this->form_validation->set_rules('approval', 'Approval', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Edit Submission';

            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/editsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {
            $lect1 = $this->input->post('lecturers');
            $year = $this->input->post('year');
            $filter = array("lecturers" => $lect1, "year" => $year);
            $data['submax'] = $this->db->get_where('submission', $filter)->num_rows();
            $max = $data['submax'];

            if ($max < 10) {
                $username = $this->input->post('username');
                $data['stdn'] = $this->db->get_where('student', ['username' => $username])->row_array();

                $lecturers = $this->input->post('lecturers');

                $data['lect'] = $this->db->get_where('lecturers', ['lecturers' => $lecturers])->row_array();

                $upload_file = $_FILES['file']['name'];

                if ($upload_file) {
                    $config['allowed_types'] = 'pdf|jpg|png';
                    $config['max_size']      = '10240';
                    $config['upload_path']   = './assets/dist/file/';

                    $this->load->library('upload', $config);

                    if ($this->upload->do_upload('file')) {
                        $old_file = $data['submission']['file'];
                        if ($old_file != 'default.pdf') {
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
                $approval = $this->input->post('approval');

                $lect2 = $this->input->post('lect2');
                $lect3 = $this->input->post('lect3');

                $this->db->set('username', $username);
                $this->db->set('fullname', $fullname);
                $this->db->set('class', $class);
                $this->db->set('title', $title);
                $this->db->set('study', $study);
                $this->db->set('lecturers', $lecturers);
                $this->db->set('lect2', $lect2);
                $this->db->set('lect3', $lect3);
                $this->db->set('phone', $phone);
                $this->db->set('approval', $approval);

                $this->db->where('id', $id);
                $this->db->update('submission');
                redirect('admin/submission');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">The lecturer you choose is full this year. please choose another lecturer!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect('Admin/editsubmission/' . $id);
            }
        }
    }

    public function addsubmission()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['student'] = $this->Student_Model->getAllStudent();
        $data['submission'] = $this->Submission_Model->getAllSubmission();
        $data['study'] =  $this->Study_Model->getAllStudy();
        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();

        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[submission.username]');
        $this->form_validation->set_rules('title', 'Title', 'required|trim|is_unique[submission.title]');
        $this->form_validation->set_rules('year', 'Year', 'required|trim');
        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');
        $this->form_validation->set_rules('lect2', 'Lecturers 2', 'required|trim|differs[lect3]');
        $this->form_validation->set_rules('lect3', 'Lecturers 3', 'required|trim|differs[lect2]');

        if ($this->form_validation->run() == false) {
            $data['HeadTitle'] = 'Submission';
            $data['title'] = 'Add Submission';
            $this->load->view('templates/system_header', $data);
            $this->load->view('templates/admin_sidebar', $data);
            $this->load->view('admin/addsubmission', $data);
            $this->load->view('templates/system_footer');
        } else {
            $lect1 = $this->input->post('lecturers');
            $year = $this->input->post('year');
            $filter = array("lecturers" => $lect1, "year" => $year);
            $data['submax'] = $this->db->get_where('submission', $filter)->num_rows();
            $max = $data['submax'];

            if ($max < 10) {
                $username = $this->input->post('username');
                $data['stdn'] = $this->db->get_where('student', ['username' => $username])->row_array();

                $lecturers = $this->input->post('lecturers');
                $data['lect'] = $this->db->get_where('lecturers', ['lecturers' => $lecturers])->row_array();

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
                    'year' => $this->input->post('year'),
                    'lecturers' => $lecturers,
                    'lect2' => htmlspecialchars($this->input->post('lect2', true)),
                    'lect3' => htmlspecialchars($this->input->post('lect3', true)),
                    'study' => $data['lect']['study'],
                    'phone' => $data['stdn']['phone'],
                    'approval' => 3,
                    'file' => $this->upload->data('file_name'),
                    'date_created' => time()
                ];
                $this->db->insert('submission', $data);
                redirect('admin/submission');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">The lecturer you choose is full this year. please choose another lecturer!<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button></div>');
                redirect('Admin/addsubmission');
            }
        }
    }

    public function deleteSubmission($id)
    {
        $data['sub'] = $this->db->get_where('submission', ['id' => $id])->row_array();
        $filename = $data['sub']['file'];
        unlink(FCPATH . 'assets/dist/file/' . $filename);
        $this->Submission_Model->deleteSubmission($id);
        redirect('admin/submission');
    }

    public function printsub($id)
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['submission'] = $this->Submission_Model->getSubmissionById($id);

        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Report Submission';
        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/printsub', $data);
        $this->load->view('templates/system_footer');
    }

    public function Excel()
    {
        $data['user'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['lecturers'] = $this->Lecturers_Model->getAllLecturers();
        $data['submission'] = $this->Submission_Model->getAllSubmission();
        $data['study'] = $this->Study_Model->getAllStudy();
        $data['HeadTitle'] = 'Submission';
        $data['title'] = 'Export Submission to Excel';

        $this->form_validation->set_rules('lecturers', 'Lecturers', 'required|trim');


        $this->load->view('templates/system_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('admin/pexcel', $data);
        $this->load->view('templates/system_footer');
    }
    public function Excel_ly()
    {
        $lect = $this->input->post('lecturers');
        $year = $this->input->post('year');

        $filter = array("lecturers" => $lect, "year" => $year);
        $data['submission'] = $this->db->get_where('submission', $filter)->result_array();

        $this->_printsub($data);
    }
    public function Excel_year()
    {
        $year = $this->input->post('year');

        $filter = array("year" => $year);
        $data['submission'] = $this->db->get_where('submission', $filter)->result_array();

        $this->_printsub($data);
    }

    public function Excel_class()
    {
        $class = $this->input->post('class');
        $year = $this->input->post('year');

        $filter = array("class" => $class, "year" => $year);
        $data['submission'] = $this->db->get_where('submission', $filter)->result_array();

        $this->_printsub($data);
    }
    public function Excel_study()
    {
        $study = $this->input->post('study');
        $year = $this->input->post('year');

        $filter = array("study" => $study, "year" => $year);
        $data['submission'] = $this->db->get_where('submission', $filter)->result_array();

        $this->_printsub($data);
    }

    private function _printsub($data)
    {
        require(APPPATH . 'PHPExcel-1.8\Classes\PHPExcel.php');
        require(APPPATH . 'PHPExcel-1.8\Classes\PHPExcel\Writer\Excel2007.php');

        $object = new PHPExcel();
        $object->getProperties()->setCreator("SIPTAS");
        $object->getProperties()->setLastModifiedBy("SIPTAS");
        $object->getProperties()->setTitle("Submission");

        $object->setActiveSheetIndex(0);

        $object->getActiveSheet()->SetCellValue('A1', 'NO');
        $object->getActiveSheet()->SetCellValue('B1', 'NPM');
        $object->getActiveSheet()->SetCellValue('C1', 'NAMA LENGKAP');
        $object->getActiveSheet()->SetCellValue('D1', 'KELAS');
        $object->getActiveSheet()->SetCellValue('E1', 'DOSEN PEMBIMBING');
        $object->getActiveSheet()->SetCellValue('F1', 'JUDUL');

        $object->getSheet(0)->getColumnDimension('A')->setAutoSize(true);
        $object->getSheet(0)->getColumnDimension('B')->setAutoSize(true);
        $object->getSheet(0)->getColumnDimension('C')->setAutoSize(true);
        $object->getSheet(0)->getColumnDimension('D')->setAutoSize(true);
        $object->getSheet(0)->getColumnDimension('E')->setAutoSize(true);
        $object->getSheet(0)->getColumnDimension('F')->setAutoSize(true);

        $baris = 2;
        $no = 1;

        foreach ($data['submission'] as $sbm) {
            $object->getActiveSheet()->setCellValue('A' . $baris, $no++);
            $object->getActiveSheet()->setCellValue('B' . $baris, $sbm['username']);
            $object->getActiveSheet()->setCellValue('C' . $baris, $sbm['fullname']);
            $object->getActiveSheet()->setCellValue('D' . $baris, $sbm['class']);
            $object->getActiveSheet()->setCellValue('E' . $baris, $sbm['lecturers']);
            $object->getActiveSheet()->setCellValue('F' . $baris, $sbm['title']);
            $baris++;
        }

        $filename = "Data Submission" . '.xlsx';
        $object->getActiveSheet()->setTitle("Data Submission");
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '"');
        header('Cache-control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($object, 'Excel2007');
        $writer->save('php://output');

        exit;
    }
}
