<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_vaksin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen Buku
    public function index()
    {
        $data['judul'] = 'Data Vaksin';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('vaksin/daftardatavaksin', $data);
        $this->load->view('templates/footer');

    }

    public function vtambahdata()
    {
        $data['judul'] = 'Data Vaksin';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('vaksin/tambahvaksin', $data);
        $this->load->view('templates/footer');
    }

    public function tambahdata()
    {
        $data['judul'] = 'Data Vaksin';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $this->form_validation->set_rules('nama_vaksin', 'nama_vaksin', 'required|trim', [
            'required' => 'Nama Layanan Harus Di Isi',
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('vaksin/tambahvaksin', $data);
            $this->load->view('templates/footer');
        } else {

        $data = [
            "nama_vaksin" => $this->input->post('nama_vaksin'),

            ];
            $this->db->insert('data_vaksin',$data);
            redirect('data_vaksin');
        
    }}
    public function hapusdata()
    {
        $where = ['id_vaksin' => $this->uri->segment(3)];
        $this->ModelVaksin->hapus($where);
        redirect('data_vaksin');
    }

    public function updateData()
 
    {
        $data['judul'] = 'Ubah Vaksin';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['vaksin'] = $this->ModelVaksin->VaksinWhere(['id_vaksin' => $this->uri->segment(3)])->result_array();


        $this->form_validation->set_rules('nama_vaksin', 'nama_vaksin', 'required|trim', [
            'required' => 'Nama Vaksin harus diisi',
        ]);

        if ($this->form_validation->run() == false) {
            $data['vaksin'] = $this->ModelVaksin->VaksinWhere(['id_vaksin' => $this->uri->segment(3)])->result_array();

            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('vaksin/editvaksin', $data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                "nama_vaksin" => $this->input->post('nama_vaksin'),
            ];

            $this->ModelVaksin->updateVaksin($data, ['id_vaksin' => $this->input->post('id_vaksin')]);
            redirect('data_vaksin');
        }
    }
  public function edit($id_vaksin)
  {
    $data['vaksin'] = $this->ModelVaksin->ambil_id($id_vaksin);
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_vaksin', 'nama_vaksin', 'required',[
      'required' => 'Nama Parfum perlu di ii'
  ]);
    if ($this->form_validation->run() == false) {
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('vaksin/editvaksin', $data);
        $this->load->view('templates/footer');
    }else{
      $this->ModelVaksin->proses_edit();
      
      redirect('data_vaksin');
      
    }}
}