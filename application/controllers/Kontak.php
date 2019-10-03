<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Saran');
    }

    public function insert()
    {
        $tanggal = time();
        $data = array(
            'id' => uniqid(),
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'pesan' => $this->input->post('pesan'),
            'tanggal' => $tanggal,
        );
        $this->M_Saran->insert($data);
        $this->session->set_flashdata('msg', 'Pesan Terkirim !!!');
        redirect('ispa/kontak');
    }

    public function delete()
    {
    }

    public function replay()
    {
    }
}
