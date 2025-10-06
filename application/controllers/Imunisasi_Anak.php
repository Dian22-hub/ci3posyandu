<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imunisasi_Anak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Imunisasi_model');
	}

	// MULAI MENAMPILKAN
	public function index()
	{
		$data['title'] = 'Riwayat Imunisasi Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();

		// Ambil data imunisasi + join ke anak dan ibu
		$this->db->select('imunisasi.*, anak.nama_anak, anak.tgl_lahir as tgl_lahir_anak, anak.jenis_kelamin, ibu.nama_ibu');
		$this->db->from('imunisasi');
		$this->db->join('anak', 'anak.id_anak = imunisasi.anak_id');
		$this->db->join('ibu', 'ibu.id_ibu = imunisasi.ibu_id');
		$this->db->order_by('imunisasi.tgl_skrng', 'DESC');

		$data['riwayat'] = $this->db->get()->result_array();

		// $this->load->view('templates/header-datatables', $data);
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/topbar', $data);
		// $this->load->view('layanan/imunisasi-riwayat', $data);
		// $this->load->view('templates/footer-datatables');

		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/imunisasi-riwayat', $data);
		$this->load->view('temp/footer');
	}


	// MULAI MENAMPILKAN
	public function create()
	{
		$data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['d_anak'] = $this->Imunisasi_model->getDataAnakIbu();
		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/imunisasi-form', $data);
		$this->load->view('temp/footer');

	}

	// MULAI MENAMPILKAN
	public function imunisasi()
	{
		$data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['d_anak'] = $this->Imunisasi_model->getDataAnakIbu();

		// var_dump($data['d_anak']);
		// die;
		// $this->load->view('templates/header-datatables', $data);
		// $this->load->view('templates/sidebar-bidan');
		// $this->load->view('templates/topbar', $data);
		// $this->load->view('layanan/imunisasi-form-bidan', $data);
		// $this->load->view('templates/footer-datatables');
		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/imunisasi-form-bidan',$data);
		$this->load->view('temp/footer');
	}
	// SELESAI MENAMPILKAN

	// MULAI TAMBAH DATA
	public function submit()
	{
		$data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$vitValues = $_POST['vit'];

		$this->Imunisasi_model->add(
			array(
				'anak_id' => $this->input->post('id_anak'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'ibu_id' => $this->input->post('ibu_id'),
				'usia' => $this->input->post('usia'),
				'imunisasi' => $this->input->post('imun'),
				'vit_a' => $vitValues[0],
				'tgl_skrng' => $this->input->post('tgl_skrng'),
				'ket' => $this->input->post('keterangan'),
				'created_by' => $user['id_users'],
			)
		);

		// $this->db->insert('penimbangan', $data);
		$this->session->set_flashdata('msg', 'Data Berhasil Ditambahkan');

		redirect('imunisasi_anak/index');
	}
	// SELESAI TAMBAH DATA

	// MULAI TAMBAH DATA
	public function submit_imun()
	{
		$data['title'] = 'Imunisasi Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$vitValues = $_POST['vit'];

		$this->Imunisasi_model->add(
			array(
				'anak_id' => $this->input->post('id_anak'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'ibu_id' => $this->input->post('ibu_id'),
				'usia' => $this->input->post('usia'),
				'imunisasi' => $this->input->post('imun'),
				'vit_a' => $vitValues[0],
				'tgl_skrng' => $this->input->post('tgl_skrng'),
				'ket' => $this->input->post('keterangan'),
				'created_by' => $user['id_users'],
			)
		);

		// $this->db->insert('penimbangan', $data);
		$this->session->set_flashdata('msg', 'Berhasil Ditambahkan');

		redirect('imunisasi_anak/imunisasi');
	}

	public function update($id_imunisasi)
    {
        $this->form_validation->set_rules('tgl_skrng', 'Tanggal Imunisasi', 'required');
        $this->form_validation->set_rules('imunisasi', 'Jenis Imunisasi', 'required|trim');
        $this->form_validation->set_rules('vit_a', 'Vitamin A', 'required|trim');
        $this->form_validation->set_rules('ket', 'Keterangan', 'trim');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', 'Data gagal diupdate! Periksa kembali input Anda.');
            redirect('imunisasi_anak/index'); 
        } else {
            $data_to_update = array(
                'tgl_skrng'     => $this->input->post('tgl_skrng'),
                'imunisasi'     => $this->input->post('imunisasi'),
                'vit_a'         => $this->input->post('vit_a'),
                'ket'           => $this->input->post('ket'),
            );
            $update_status = $this->Imunisasi_model->update($id_imunisasi, $data_to_update);
            if ($update_status) {
                $this->session->set_flashdata('msg', 'Data imunisasi anak berhasil diupdate!');
            } else {
                $this->session->set_flashdata('msg', 'Gagal mengupdate data imunisasi anak. Terjadi kesalahan pada database.');
            }

            redirect('imunisasi_anak/index'); 
        }
    }


	    public function delete($id_imunisasi)
    {
        if (empty($id_imunisasi) || !is_numeric($id_imunisasi)) {
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert">ID imunisasi tidak valid.</div>');
            redirect('imunisasi_anak/index'); 
        }

        $imunisasi_data = $this->Imunisasi_model->get_by_id($id_imunisasi);
        if (empty($imunisasi_data)) {
            $this->session->set_flashdata('msg', 'Data imunisasi tidak ditemukan.');
            redirect('imunisasi_anak/index');
        }
        $delete_status = $this->Imunisasi_model->delete($id_imunisasi);
        if ($delete_status) {
            $this->session->set_flashdata('msg', 'Data imunisasi anak berhasil dihapus!');
        } else {
            $this->session->set_flashdata('msg', 'Gagal menghapus data imunisasi anak. Terjadi kesalahan.');
        }
        redirect('imunisasi_anak/index');
    }

	

}