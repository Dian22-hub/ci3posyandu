<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bidan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bidan_model');
    }

    // MULAI INDEX DATA BIDAN
    public function index()
    {
        $data['title'] = 'Data Bidan | Posyandu EH Indah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data['users'] = $this->Bidan_model->getDataUsers();
        $data['bidan'] = $this->Bidan_model->getDataBidan();

        // $this->load->view('templates/header-datatables', $data);
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/topbar', $data);
        // $this->load->view('bidan/index', $data);
        // $this->load->view('templates/footer-datatables');

        $this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('bidan/index', $data);
		$this->load->view('temp/footer');
    }
    // SELESAI INDEX DATA BIDAN

    // MULAI CREATE DATA BIDAN
    public function createDataBidan()
    {
        $simpanuser = [
            'name' => $this->input->post('nama-bidan'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'image' => 'user.png',
            'level_id' => '2',
            'is_active' => '1',
            'date_created' => date('Y-m-d'),
        ];
        $this->db->insert('user', $simpanuser);
        $user_id = $this->db->insert_id();
        $data = [
            'nama_bidan' => $this->input->post('nama-bidan'),
            'tempat_lahir' => $this->input->post('tmt-lahir'),
            'tanggal_lahir' => $this->input->post('tgl-lahir'),
            'no_hp' => $this->input->post('no-hp'),
            'pendidikan_terakhir' => $this->input->post('pendidikan-terakhir'),
            'user_id' => $user_id,
        ];

        $this->db->insert('bidan', $data);
        $this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

        redirect('bidan');
    }
    // SELESAI CREATE DATA BIDAN

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

    // MULAI UPDATE DATA BIDAN
    public function updateDataBidan($id)
    {
        $simpanuser = [
            'name' => $this->input->post('nama-bidan'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        ];
        $this->db->where('id_users', $this->input->post('id_users'));
        $this->db->update('user', $simpanuser);
        $data = [
            'nama_bidan' => $this->input->post('nama-bidan'),
            'tempat_lahir' => $this->input->post('tmt-lahir'),
            'tanggal_lahir' => $this->input->post('tgl-lahir'),
            'no_hp' => $this->input->post('no-hp'),
            'pendidikan_terakhir' => $this->input->post('pendidikan-terakhir'),
        ];

        $this->Bidan_model->updDataBidan($id, $data);
        $this->session->set_flashdata('msg', 'Berhasil Diubah');

        redirect('bidan/index');
    }
    // SELESAI UPDATE DATA BIDAN

    // MULAI DELETE DATA BIDAN
    public function deleteDataBidan($id)
    {
        $this->Bidan_model->delDataBidan($id);
        $this->session->set_flashdata('msg', 'Berhasil Dihapus');

        redirect('bidan/index');
    }
    // SELESAI DELETE DATA BIDAN
}