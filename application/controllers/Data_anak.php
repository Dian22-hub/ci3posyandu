<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_anak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen anak
    public function index()
    {
        $data['judul'] = 'Data Anak';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();

        // var_dump($data['anak']);die;
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('anak/daftardataanak', $data);
        $this->load->view('templates/footer');

    }

    public function vtambahdata()
    {
        $data['judul'] = 'Data Anak';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();
        // var_dump($data['anak']);die;
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('anak/tambahanak', $data);
        $this->load->view('templates/footer');
    }

    public function tambahdata()
    {
        $data['judul'] = 'Data Anak';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();


        $this->form_validation->set_rules('nama_anak', 'nama_anak', 'required|trim', [
            'required' => 'Nama Anak Harus Di Isi',
        ]);

        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric|min_length[16]|is_unique[data_anak.nik]', [
            'required' => 'NIK Harus di Isi',
            'numeric' => 'Isi kolom dengan nomor(bentuk angka) NIK',
            'min_length' => 'Masukan 16 digit NIK',
            'is_unique' => 'NIK Sudah Terdaftar, mohon di cek kembali'
        ]);

        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim', [
            'required' => 'Masukan Tanggal Lahir',
        ]);

        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required|trim', [
            'required' => 'Nama Ayah perlu di isi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('anak/tambahanak', $data);
            $this->load->view('templates/footer');
            } else {
        $data = [
            "nama_anak" => $this->input->post('nama_anak'),
            "nik" => $this->input->post('nik'),
            "ibu_id" => $this->input->post('ibu_id'),
            "tgl_lahir" => $this->input->post('tgl_lahir'),
            "nama_ayah" =>$this->input->post('nama_ayah')
            ];
            $this->db->insert('data_anak',$data);
            redirect('data_anak');
        
    }}
    public function hapusdata()
    {
        $where = ['id_anak' => $this->uri->segment(3)];
        $this->ModelAnak->hapus($where);
        redirect('data_anak');
    }
    
    public function editdata()
    {
    $data['title'] = 'Edit Data Anak';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama_anak', 'nama_anak', 'required|min_length[3]', [
        'required' => 'Judul anak harus diisi',
        'min_length' => 'Judul anak terlalu pendek'
    ]);
    
    if ($this->form_validation->run() == false) {
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('anak/editanak', $data);
        $this->load->view('templates/footer');
    } else {
        $data = [
            'nama_anak' => $this->input->post('nama_anak', true),
            'nik' => $this->input->post('nik', true),
            'tanggal lahir' => $this->input->post('tanggal lahir', true),
            'penerbit' => $this->input->post('penerbit', true),
        ];
    }
    
    
}
    public function ubahAnak()
    {
        $data['judul'] = 'Ubah Data Anak';
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['nibu'] = $this->ModelIbu->getIbu()->row_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['anak'] = $this->ModelAnak->anakWhere(['id_anak' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_anak', 'nama_anak', 'required|trim', [
            'required' => 'Nama Anak Harus Di Isi',
        ]);


        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required|trim', [
            'required' => 'Masukan Tanggal Lahir',
        ]);

        $this->form_validation->set_rules('nama_ayah', 'nama_ayah', 'required|trim', [
            'required' => 'Nama Ayah perlu di isi',
        ]);
   
        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('anak/editanak', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                'nama_anak' => $this->input->post('nama_anak', true),
                'nik' => $this->input->post('nik', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'ibu_id' => $this->input->post('ibu_id', true),
                'nama_ayah' => $this->input->post('nama_ayah', true),

            ];
            $this->ModelAnak->updateAnak($data, ['id_anak' => $this->input->post('id_anak')]);
            redirect('Data_anak');
        }
    }
    public function umur()
    {

    }
    }