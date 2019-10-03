<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artikel');
        $this->load->model('M_Saran');
        $this->load->model('M_gambar');

        if ($this->session->userdata('role') != 'admin') {
            redirect('login');
        }
    }

    public function index()
    {
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data['artikel'] = $this->M_Artikel->get_one($id)->row();
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_artikel', $data);
        $this->load->view('admin/footer');
    }

    // controller untuk halaman list artikel
    public function artikel()
    {
        $data['artikels'] = $this->M_Artikel->get_all();
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('admin/footer');
    }

    public function create_artikel()
    {
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/create_artikel');
        $this->load->view('admin/footer');
    }

    public function saran()
    {
        $data['sarans'] = $this->M_Saran->get_all()->result();
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/saran', $data);
        $this->load->view('admin/footer');
    }

    public function profile()
    {
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/profile');
        $this->load->view('admin/footer');
    }

    public function gallery()
    {
        $data['images'] = $this->M_gambar->gambarAlbum();
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/gallery', $data);
        $this->load->view('admin/footer');
    }

    public function upload_gallery()
    {
        $data['massage_notif'] = $this->M_Saran->get_notif()->num_rows();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/upload_image');
        $this->load->view('admin/footer');
    }
}
