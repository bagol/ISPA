<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Ispa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artikel');
        $this->load->model('M_gambar');
    }

    public function index()
    {
        $data['artikels'] = $this->M_Artikel->get_all()->result();
        $data['slides'] = $this->M_Artikel->popular(3)->result();
        $data['populars'] = $this->M_Artikel->popular(6)->result();
        $this->load->view('web/header');
        $this->load->view('web/index', $data);
        $this->load->view('web/sidebar', $data);
        $this->load->view('web/footer');
    }

    public function penyuluhan()
    {
        $this->load->view('web/header');
        $this->load->view('web/download');
        $this->load->view('web/footer');
    }

    public function readmore()
    {
        $id = $this->uri->segment(3);
        $data['artikel'] = $this->M_Artikel->readmore($id)->row();
        $data['populars'] = $this->M_Artikel->popular(6)->result();
        $this->load->view('web/header');
        $this->load->view('web/readmore', $data);
        $this->load->view('web/sidebar', $data);
        $this->load->view('web/footer');
    }

    public function kontak()
    {
        $this->load->view('web/header');
        $this->load->view('web/kontak');
        $this->load->view('web/footer');
    }

    public function gallery()
    {
        $data['images'] = $this->M_gambar->gambarAlbum()->result();
        $this->load->view('web/header');
        $this->load->view('web/gallery', $data);

        $this->load->view('web/footer');
    }
}
