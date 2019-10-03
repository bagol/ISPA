<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_user');
        $this->load->model('M_gambar');
    }

    function update_data(){
        $namaGambar = $_FILES["gambar"]["name"];
        $id = $this->input->post('id');
        if(empty($namaGambar)){
            $namaGambar =$this->session->userdata('gambar');
            $data = array(
                'username'      => $this->input->post('username'),
                'email'         => $this->input->post('email'),
                'gambar'        => $namaGambar 
            );
        }else{
            $id = $this->input->post('id');
            $data = array(
            'username'      => $this->input->post('username'),
            'email'         => $this->input->post('email'),
            'gambar'        => $this->_gambar($namaGambar)
            );
        }
        $this->M_user->update($id,$data);
        $unset = array('username', 'email','gambar');
        $this->session->unset_userdata($unset);
        $user = $this->M_user->get_user($id)->row();
        $set = array(
                'username'  => $user->username,
                'email'     => $user->email,
                'gambar'    => $user->gambar
        );
        $this->session->set_userdata($data);
        redirect('admin/profile','refresh');
    }

    function _gambar($namaGambar){
        $config['upload_path']          = './images/album/user/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['file_name']            = $namaGambar;
        $config['overwrite']            = true;
        $config['max_size']             = 1024;
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        // memanggil library upload file CI
        $this->load->library('upload', $config);
        
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }else{
            $error = array('error' => $this->upload->display_errors());
            return $error;
        }
    }
}