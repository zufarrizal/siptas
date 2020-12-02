<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Home';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/index');
        $this->load->view('templates/auth_footer');
    }

    public function login()
    {
        $login = $this->session->userdata();

        if (!empty($login['role_id'])) {
            if ($login['role_id'] == 1) {
                redirect('admin');
            } elseif ($login['role_id'] == 2) {
                redirect('staff');
            } else {
                redirect('student');
            }
        }

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $role = $this->input->post('role');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($role == 1) {
            $user = $this->db->get_where('admin', ['username' => $username])->row_array();
        } elseif ($role == 2) {
            $user = $this->db->get_where('staff', ['username' => $username])->row_array();
        } else {
            $user = $this->db->get_where('student', ['username' => $username])->row_array();
        }

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id'],
                        'fullname' => $user['fullname']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } elseif ($user['role_id'] == 2) {
                        redirect('staff');
                    } else {
                        redirect('student');
                    }
                } else {
                    redirect('auth/login');
                }
            } else {
                redirect('auth/login');
            }
        } else {
            redirect('auth/login');
        }
    }

    public function register()
    {
        $login = $this->session->userdata();

        if (!empty($login['role_id'])) {
            if ($login['role_id'] == 1) {
                redirect('admin');
            } elseif ($login['role_id'] == 2) {
                redirect('staff');
            } else {
                redirect('student');
            }
        }

        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('fullname');

        $this->form_validation->set_rules('username', 'Username', 'required|trim|numeric|is_unique[student.username]');
        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[student.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => $this->input->post('password1'),
                'fullname' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 3,
                'is_active' => 1,
                'date_created' => time(),
            ];
            $this->db->insert('student', $data);
            redirect('auth/login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('fullname');
        redirect('auth/login');
    }

    public function forbidden403()
    {
        $data['title'] = 'Forbidden 403';
        $this->load->view('templates/auth_header', $data);
        $this->load->view('auth/forbidden403');
        $this->load->view('templates/auth_footer');
    }
}
