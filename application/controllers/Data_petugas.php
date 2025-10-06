<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_petugas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function index()
    {
        $data['judul'] = 'Data petugas';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('petugas/daftardatapetugas', $data);
        $this->load->view('templates/footer');

    }
    public function hapusdata()
    {
        $where = ['email' => $this->uri->segment(3)];
        $this->ModelPetugas->hapus($where);
        redirect('data_petugas');
    }
}