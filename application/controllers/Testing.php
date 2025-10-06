<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
    }

    // MULAI INDEX DATA PETUGAS
    public function index()
    {
        $data['title'] = 'Data Petugas | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['users'] = $this->Petugas_model->getDataUsers();
        $data['petugas'] = $this->Petugas_model->getDataPetugas();

        $this->load->view('temp/header', $data);
        $this->load->view('temp/sidebar');
        $this->load->view('temp/content', $data);
        $this->load->view('temp/footer');
        // $this->load->view('templates/footer-datatables');
    }

}