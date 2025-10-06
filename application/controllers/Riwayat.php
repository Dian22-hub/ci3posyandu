<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function ukur()
    {
        $det = [
            "id_layanan" => $this->input->post('vaksin_id')
            
        ];

        $data['judul'] = 'Riwayat Penimbangan';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->getImun();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('riwayat/ukur', $data);
        $this->load->view('templates/footer');

    }
    public function vaksin()
    {
        $det = [
            "id_layanan" => $this->input->post('vaksin_id')
            
        ];

        $data['judul'] = 'Riwayat Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->getImun();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('riwayat/h_imunisasi', $data);
        $this->load->view('templates/footer');

    }
}