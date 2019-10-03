<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Gambar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_gambar');
    }

    public function insert()
    {
        $this->nama = $_FILES['gambar']['name'];
        $this->ukuran = $_FILES['gambar']['size'];
        $this->tipe = $_FILES['gambar']['type'];
        $this->deskripsi = $this->input->post('deskripsi');
        $this->_save_gambar();
        $this->session->set_flashdata('msg', 'gambar berhasil di input');
        redirect('admin/gallery');
    }

    public function _save_gambar()
    {
        $id_gambar = uniqid();
        $gambar = array(
            'id' => $id_gambar,
            'album_id' => '',
            'nama' => $this->nama,
            'ukuran_file' => $this->ukuran,
            'tipe' => $this->tipe,
            'deskripsi' => $this->deskripsi,
        );
        // validasi type gambar
        if ($this->tipe == 'image/jpg' || $this->tipe == 'image/jpeg' || $this->tipe == 'image/gif' || $this->tipe == 'image/png') {
            // valdasi ukuran gambar
            if ($this->ukuran < 1024000) {
                $config['upload_path'] = './images/album/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = 1024;
                // $config['max_width'] = 1024;
                // $config['max_height'] = 768;

                // memanggil library upload file CI
                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $this->M_gambar->insert($gambar);

                    return $id_gambar;
                } else {
                    $error = array('error' => $this->upload->display_errors());
                }
            } else {
                $this->session->set_flashdata('err', 'ukuran file lebih dari 1MB ');
            }
        } else {
            $this->session->set_flashdata('err', 'type gambar tidak di izinkan ');
        }
    }

    public function delete()
    {
        $id = $this->input->post('id');
        $nama = $this->M_gambar->delete($id);
        $this->session->set_flashdata('msg', "$nama Gambar telah dihapus");
        redirect('admin/gallery');
    }
}
