<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_imunisasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
    }

    //manajemen imunisasi
    public function index()
    {
        $data['judul'] = 'Data Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->getImun();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('pelayanan/imunisasi', $data);
        $this->load->view('templates/footer');

    }

    public function vtambahdata()
    {
        $data['judul'] = 'Data Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->getImun();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('pelayanan/tambahimunisasi', $data);
        $this->load->view('templates/footer');
    }

    public function tambahdata()
    {
        $data['judul'] = 'Data Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->getImun();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();

        // $this->form_validation->set_rules('bb', 'bb', 'required|trim|numeric', [
        //     'required' => 'Berat Badan Harus Di Isi',
        //     'numeric' => 'Gunakan angka numeric(koma) contoh:11,0'
        // ]);
        // $this->form_validation->set_rules('tb', 'tb', 'required|trim|numeric', [
        //     'required' => 'Tinggi Badan Harus Di Isi',
        // ]);
        // $this->form_validation->set_rules('lk', 'lk', 'required|trim|numeric', [
        //     'required' => 'Lingkar Kepala Harus Di Isi',
        //     'numeric' => 'Gunakan angka numeric(koma) contoh:78,9'
        // ]);

        $this->form_validation->set_rules('tgl_imun', 'tgl_imun', 'required|trim', [
            'required' => 'Masukan Tanggal Imunisasi'
        ]);
        
        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('pelayanan/tambahimunisasi', $data);
            $this->load->view('templates/footer');
        }
        else {

        $data = [
            "bb" => $this->input->post('bb'),
            "id_anak" => $this->input->post('anak_id'),
            "tgl_imun" => $this->input->post('tgl_imun'),
            "lk" => $this->input->post('lk'),
            "tb" => $this->input->post('tb'),
            "id_pet" => $this->input->post('petugas_id'),
        ]; 
        $det = [
            "id_layanan" => $this->input->post('vaksin_id')
            
        ];
            $this->ModelImunisasi->simpanDetail('det_layanan',$det);

            
            // $vaksin_id  = implode(",", $this->input->post('det_layanan'));
            $this->ModelImunisasi->InsertData('imunisasi',$data);
            redirect('data_imunisasi');
        
    }}
    public function hapusdata()
    {
        $where = ['id_imun' => $this->uri->segment(3)];
        $this->ModelImunisasi->hapus($where);
        redirect('data_imunisasi');
    }

    public function ubahImun()
    {
        $data['judul'] = 'Ubah Data Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->imunWhere(['id_imun' => $this->uri->segment(3)])->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
        $this->form_validation->set_rules('bb', 'bb', 'required|min_length[1]', [
            'required' => 'Judul imunisasi harus diisi',
            'min_length' => 'Judul imunisasi terlalu pendek'
        ]);
   
   
        //konfigurasi sebelum gambar diupload
        $config['upload_path'] = './assets/img/upload/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '3000';
        $config['max_width'] = '1024';
        $config['max_height'] = '1000';
        $config['file_name'] = 'img' . time();

        //memuat atau memanggil library upload
        $this->load->library('upload', $config);

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('pelayanan/editdataimun', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
                unlink('assets/img/upload/' . $this->input->post('old_pict', TRUE));
                $gambar = $image['file_name'];
            } else {
                $gambar = $this->input->post('old_pict', TRUE);
            }

            $data = [
                "id_anak" => $this->input->post('anak_id'),
                'bb' => $this->input->post('bb',true),
                'tb' => $this->input->post('tb'),
                'lk' => $this->input->post('lk'),
                "id_pet" => $this->input->post('petugas_id'),
            ];
            $this->ModelImunisasi->updateData($data, ['id_imun' => $this->input->post('id_imun')]);
            redirect('Data_imunisasi');
        }
    }
    public function updateData()
 
    {
        $data['judul'] = 'Ubah Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['imunisasi'] = $this->ModelImunisasi->imunWhere(['id_imun' => $this->uri->segment(3)])->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();

        $this->form_validation->set_rules('bb', 'bb', 'required|trim', [
            'required' => 'Berat Badan Harus Di Isi',
        ]);


        if ($this->form_validation->run() == false) {
            $this->load->view('temp_admin/header', $data);
            $this->load->view('temp_admin/nav', $data);
            $this->load->view('temp_admin/sidebar', $data);
            $this->load->view('pelayanan/editimun', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                "bb" => $this->input->post('bb'),
                "tb" => $this->input->post('tb'),
                "lk" => $this->input->post('lk'),
                "bb" => $this->input->post('bb'),
                "id_anak" => $this->input->post('anak_id'),
                "id_pet" => $this->input->post('petugas_id'),
            ];
            

            $this->ModelImunisasi->updateImun($data, ['id_imun' => $this->input->post('id_imun')]);
            redirect('data_imunisasi');
        }
    }}
    
    