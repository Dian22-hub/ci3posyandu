<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['judul'] = 'Selamat Datang';
        $this->load->view('temp_user/header', $data);
        $this->load->view('pengguna/land',$data);
        $this->load->view('temp_user/footer');
    }  
}
