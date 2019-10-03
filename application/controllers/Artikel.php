<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Artikel');
        $this->load->model('M_gambar');
    }

    public function insert()
    {
        $this->nama = $_FILES['gambar']['name'];
        $this->ukuran = $_FILES['gambar']['size'];
        $this->tipe = $_FILES['gambar']['type'];
        $tanggal = time();
        $data = array(
            'id' => uniqid(),
            'judul' => $this->input->post('judul'),
            'isi_artikel' => $this->input->post('artikel'),
            'gambar_id' => $this->_save_gambar(),
            'tanggal' => $tanggal,
            'hit_view' => 0,
            'penulis' => $this->session->userdata('username'),
        );
        // var_dump($data);
        $this->M_Artikel->insert($data);
        $this->session->set_flashdata('msg', 'Artikel Berhasil ditambahkan... ');
        redirect('admin/create_artikel');
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
            'deskripsi' => '',
        );
        // validasi type gambar
        if ($this->tipe == 'image/jpg' || $this->tipe == 'image/jpeg' || $this->tipe == 'image/gif' || $this->tipe == 'image/png') {
            // valdasi ukuran gambar
            if ($this->ukuran < 1024000) {
                $config['upload_path'] = './images/artikel/';
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

    public function do_update()
    {
        // id artikel
        $id = $this->input->post('artikel_id');
        $gambar_id = $this->input->post('gambar_id');
        // gambar baru
        $this->nama = $_FILES['gambar']['name'];
        $this->ukuran = $_FILES['gambar']['size'];
        $this->tipe = $_FILES['gambar']['type'];
        $artikel = array(
            'judul' => $this->input->post('judul'),
            'isi_artikel' => $this->input->post('artikel'),
            'gambar_id' => $this->_save_gambar(),
       );
        $this->M_Artikel->update($id, $artikel);
        $this->delete_image($gambar_id);
        $this->session->set_flashdata('msg', 'arikel berhasil di update');
        redirect('admin/update/'.$id, 'refresh');
    }

    public function delete_image($gambar_id)
    {
        $path = './images/artikel/';
        $nama = $this->M_gambar->cek_gambar($gambar_id)->row();
        $file = $path.$nama->nama;
        if (is_file($file)) {
            unlink($file);
        }
    }

    public function delete()
    {
        $gambar_id = $this->input->post('gambar_id');
        $path = './images/artikel/';
        $nama = $this->M_gambar->delete($gambar_id)->row();
        $file = $path.$nama->nama;
        if (is_file($file)) {
            unlink($file);
            $this->session->set_flashdata('msg', 'Artikel Berhsil di hapus !!!');
            $artikel_id = $this->input->post('artikel_id');
            $this->M_Artikel->delete($artikel_id);
            redirect('admin/artikel');
        } else {
            $this->session->set_flashdata('err', 'Artikel gagal di hapus !!!');
        }
    }
}
