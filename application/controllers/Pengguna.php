<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_anak'] = $this->ModelIbu->profilanak()->row_array();
        $data['ibu'] = $this->ModelIbu->profilIbu()->result_array();
        $data['anak'] = $this->ModelIbu->profilanak()->result_array();
        $data['judul'] = 'Selamat Datang';
        $this->load->view('temp_user/header', $data);
        $this->load->view('pengguna/nav',$data);
        $this->load->view('pengguna/index',$data);
        $this->load->view('temp_user/footer');

    }
    
    public function profilibu()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_anak'] = $this->ModelIbu->profilanak()->row_array();
        $data['anak'] = $this->ModelIbu->profilanak()->result_array();
        $data['ibu'] = $this->ModelIbu->profilIbu()->result_array();
        $data['judul'] = 'Profil Ibu';
        $this->load->view('temp_user/header', $data);
        $this->load->view('pengguna/nav',$data);
        $this->load->view('pengguna/profil',$data);
        $this->load->view('temp_user/footer');

    }
    public function profilanak()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Profil Anak';
        $this->load->view('temp_user/header', $data);
        $this->load->view('pengguna/nav',$data);
        $this->load->view('pengguna/profila',$data);
        $this->load->view('temp_user/footer');

    }
    public function ubahIbu()
    {
        
        $data['judul'] = 'Ubah Data Ibu';
        $data['id_anak'] = $this->ModelIbu->profilanak()->row_array();
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['ibu'] = $this->ModelIbu->profilIbu()->result_array();
        
        $this->form_validation->set_rules('no_tlp', 'no_tlp', 'required|trim', [
            'required' => 'Mohon gunakan nomor yang dapat dihubungi',
        ]);
        

        if ($this->form_validation->run() == false) {
            $this->load->view('temp_user/header', $data);
            $this->load->view('pengguna/nav',$data);
            $this->load->view('pengguna/profil',$data);
            $this->load->view('temp_user/footer');
        } else {
 

            $data = [
                'no_tlp' => $this->input->post('no_tlp', true), 
             

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

            }
            
        }
    $this->ModelIbu->updateData($data, ['id_ibu' => $this->input->post('id_ibu')]);
            redirect('pengguna');}
}

    public function history_anak_ukur()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_anak'] = $this->ModelIbu->profilanak()->row_array();
        $data['anak'] = $this->ModelIbu->profilanak()->result_array();
        $data['namaanak'] = $this->ModelIbu->profilanak()->result_array();
        $data['imunisasi'] = $this->ModelIbu->UkurWhere(['id_anak' => $this->uri->segment(3)])->result_array();
        $data['imunisasi2'] = $this->ModelIbu->ImunWhere(['id_anak' => $this->uri->segment(3)])->result_array();
        
        $this->load->view('temp_user/header', $data);
        $this->load->view('pengguna/nav',$data);
        $this->load->view('pengguna/riwayatukur', $data);
        $this->load->view('temp_user/footer');

    }
    }
    