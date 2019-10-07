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
        $file = '/assets/file/'.$nama_file;
        force_download("/assets/file/TTL.pptx", null);
    }
}
