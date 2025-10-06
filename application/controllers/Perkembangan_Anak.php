<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perkembangan_Anak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Penimbangan_model');
	}

	// MULAI MENAMPILKAN
	public function index()
	{
		$data['title'] = 'Riwayat Perkembangan Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();

		$this->db->select('anak.*, ibu.nama_ibu');
		$this->db->from('anak');
		$this->db->join('ibu', 'ibu.id_ibu = anak.ibu_id');

		$data['riwayat'] = $this->db->get()->result_array();

		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/perkembangan-riwayat', $data);
		$this->load->view('temp/footer');
	}

	public function detail($anakId)
	{
		$data['title'] = 'Detail Perkembangan Anak | Posyandu EH Indah';

		$data['user'] = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();

		$anak = $this->db->get_where('anak', ['id_anak' => $anakId])->row();

		// Ambil data penimbangan 0-40 bulan
		$penimbangan = $this->db->where('anak_id', $anakId)
			->where('usia <=', 40)
			->order_by('usia', 'ASC')
			->get('penimbangan')
			->result();

		$data['anak'] = $anak;
		$data['penimbangan'] = $penimbangan;

		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/perkembangan-detail', $data);
		$this->load->view('temp/footer');
	}
}
