<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kader extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    } 

    public function index()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
        $data['datpetugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['judul'] = 'Dashboard Admin';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('admin/land_ad');
        $this->load->view('templates/footer');



    }

    public function profil()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
        $data['judul'] = 'Profil Admin';
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('temp_admin/profile',$data);
        $this->load->view('templates/footer');

    }
    public function profilAdmin()
 
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
        $data['judul'] = 'Profil Admin';

        $this->form_validation->set_rules('nama_petugas', 'nama_petugas', 'required|trim', [
            'required' => 'Nama Petugas',
        ]);
        $this->form_validation->set_rules('jabatan', 'jabatan', 'required', [
            'required' => 'Jabatan Harus di Isi',

        ]);
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Mohon gunakan nomor yang dapat dihubungi',
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('temp_admin/profile',$data);
            $this->load->view('templates/footer');
        } else {

            $data = [
                "nama_petugas" => $this->input->post('nama_petugas'),
                "jabatan" => $this->input->post('jabatan'),
                "no_tlp" => $this->input->post('no_tlp')
            ]; $upload_image = $_FILES['image']['name'];
                    
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/img/';
          
                $this->load->library('upload', $config);
                
                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                      } else { 
                        echo $this->upload->dispay_errors();
                      }
                    }

            $this->ModelPetugas->updatePetugas($data, ['id_pet' => $this->input->post('id_pet')]);

            $datauser = [
                        "nama" => $this->input->post('nama_petugas'),
                    ];
                    $upload_image = $_FILES['image']['name'];
                    
                    if ($upload_image) {
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size']      = '2048';
                        $config['upload_path'] = './assets/img/';
                  
                        $this->load->library('upload', $config);
                        
                        if ($this->upload->do_upload('image')) {
                            $old_image = $data['user']['image'];
                            if ($old_image != 'default.jpg') {
                                unlink(FCPATH . 'assets/img/' . $old_image);
                            }
                            $new_image = $this->upload->data('file_name');
                            $this->db->set('image', $new_image);
                              } else { 
                                echo $this->upload->dispay_errors();
                              }
                            }
                $this->ModelPetugas->updateUser($datauser, ['id' => $this->input->post('id_pet')]);
                redirect('kader/profiladmin');
        }
}}