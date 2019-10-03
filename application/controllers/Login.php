<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index()
    {
        if ($this->session->userdata('role') != '') {
            redirect('admin');
        }
        $this->load->view('admin/login');
    }

    public function verifikasi()
    {
        $password = $this->input->post('password');
        $user_email = $this->input->post('user_email');
        $user = $this->M_user->get_user($user_email)->num_rows();
        if ($user == 1) {
            $user = $this->M_user->get_user($user_email)->row();
            if (password_verify($password, $user->password)) {
                $data = array(
                    'id' => $user->id,
                    'username' => $user->username,
                    'email' => $user->email,
                    'role' => $user->role,
                    'gambar' => $user->gambar,
                );
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('err', 'Password yang anda masukan salah!!!');
                redirect('Login');
            }
        } else {
            $this->session->set_flashdata('err', 'Anda belum terdaftar!!!');
            redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }
}
