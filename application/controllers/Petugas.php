<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas extends CI_Controller
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

        // $this->load->view('templates/header-datatables', $data);
        // $this->load->view('temp/sidebar');
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('petugas/index', $data);
        // $this->load->view('templates/footer-datatables');

        $this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('petugas/index', $data);
		$this->load->view('temp/footer');

    }
    // SELESAI INDEX DATA PETUGAS


    // MULAI CREATE DATA PETUGAS
    public function createDataPetugas()
    {
        $simpanuser = [
            'name' => $this->input->post('nama-petugas'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'image' => 'user.png',
            'level_id' => '1',
            'is_active' => '1',
            'date_created' => date('Y-m-d'),
        ];
        $this->db->insert('user', $simpanuser);
        $user_id = $this->db->insert_id();
        $data = [
            'nama_petugas' => $this->input->post('nama-petugas'),
            'tempat_lahir' => $this->input->post('tmt-lahir'),
            'tgl_lahir' => $this->input->post('tgl-lahir'),
            'no_hp' => $this->input->post('no-hp'),
            'jabatan' => $this->input->post('jabatan'),
            'pendidikan_terakhir' => $this->input->post('pendidikan-terakhir'),
            'lama_kerja' => $this->input->post('lama-kerja'),
            'tugas_pokok' => $this->input->post('tugas-pokok'),
            'user_id' => $user_id,
        ];

        $this->db->insert('petugas', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('petugas');
    }
    // SELESAI CREATE DATA PETUGAS

    //     // MULAI READ DATA IBU
    //     public function viewData()
    //     {
    //         $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    //         // print_r($data);

    //         $this->load->view('templates/header-datatables');
    //         $this->load->view('templates/sidebar');
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('ibu/index', $data);
    //         $this->load->view('templates/footer-datatables');
    //     }
    //     // SELESAI READ DATA IBU

    // MULAI UPDATE DATA PETUGAS
    public function updateDataPetugas($id)
    {
        $simpanuser = [
            'name' => $this->input->post('nama-petugas'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];
        $this->db->where('id_users', $this->input->post('id_users'));
        $this->db->update('user', $simpanuser);
        $data = [
            'nama_petugas' => $this->input->post('nama-petugas'),
            'tempat_lahir' => $this->input->post('tmt-lahir'),
            'tgl_lahir' => $this->input->post('tgl-lahir'),
            'no_hp' => $this->input->post('no-hp'),
            'jabatan' => $this->input->post('jabatan'),
            'pendidikan_terakhir' => $this->input->post('pendidikan-terakhir'),
            'lama_kerja' => $this->input->post('lama-kerja'),
            'tugas_pokok' => $this->input->post('tugas-pokok'),
        ];

        $this->Petugas_model->updDataPetugas($id, $data);
        $this->session->set_flashdata('msg', 'Berhasil Diubah');

        redirect('petugas/index');
    }
    // SELESAI UPDATE DATA PETUGAS

    // MULAI DELETE DATA PETUGAS
    public function deleteDataPetugas($id)
    {
        $this->Petugas_model->delDataPetugas($id);
        $this->session->set_flashdata('msg', 'Berhasil Dihapus');

        redirect('petugas/index');
    }
    // SELESAI DELETE DATA PETUGAS
}