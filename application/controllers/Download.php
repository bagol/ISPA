<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Download extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
    }

    public function index()
    {
        echo 'download';
    }

    public function file()
    {
        $nama_file = $this->uri->segment(3);
        $data = file_get_contents('./assets/file/'.$nama_file);
        $file = $nama_file;
        force_download($nama_file, $data);
        redirect('ispa/penyuluhan');
    }
}
