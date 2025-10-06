<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_ibu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function index()
    {
        $data['judul'] = 'Data Ibu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('ibu/daftardataibu', $data);
        $this->load->view('templates/footer');


    }

    public function vtambahdata()
    {
        $data['judul'] = 'Tambah Data Ibu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('ibu/tambahibu', $data);
        $this->load->view('templates/footer');
    }
    public function tambahdata()
    {
        $data['judul'] = 'Data Ibu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim', [
            'required' => 'Nama Ibu Harus Di Isi',
        ]);

        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric|min_length[16]|is_unique[data_ibu.nik]', [
            'required' => 'NIK Harus di Isi',
            'min_length' => 'Masukan 16 digit NIK',
            'numeric' => 'Isi kolom dengan nomor(bentuk angka) NIK',
            'is_unique' => 'NIK Sudah Terdaftar, mohon di cek kembali'
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|numeric|trim', [
            'required' => 'Mohon gunakan nomor yang dapat dihubungi',
            'numeric' => 'Isi kolom hanya dengan nomor atau angka',
        ]);

        if ($this->form_validation->run() == false) {
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('ibu/tambahibu', $data);
        $this->load->view('templates/footer');
        } else {
        $data = [
            "nama_ibu" => $this->input->post('nama_ibu'),
            "nik" => $this->input->post('nik'),
            "id_ibu" => $this->input->post('nik'),
            "no_tlp" => $this->input->post('no_tlp'),
            ];
            $this->db->insert('data_ibu',$data);
            redirect('data_ibu');
        }
    }

    public function hapusdata()
    {
        $where = ['id_ibu' => $this->uri->segment(3)];
        $this->ModelIbu->hapus($where);
        redirect('data_ibu');
    }

         public function ubahIbu()
    {
        $data['judul'] = 'Ubah Data Ibu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->IbuWhere(['id_ibu' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_ibu', 'nama_ibu', 'required|trim', [
            'required' => 'Nama Ibu Harus Di Isi',
        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Mohon gunakan nomor yang dapat dihubungi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('ibu/editibu', $data);
            $this->load->view('templates/footer');
        } else {


            $data = [
                'nama_ibu' => $this->input->post('nama_ibu', true),
                'NIK' => $this->input->post('nik', true),
                'no_tlp' => $this->input->post('no_tlp', true),

            ];
            $this->ModelIbu->updateData($data, ['id_ibu' => $this->input->post('id_ibu')]);
            redirect('Data_ibu');
        }
    }
    }
    