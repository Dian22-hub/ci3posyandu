<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penimbangan_Anak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Penimbangan_model');
	}

	// MULAI MENAMPILKAN
	public function index()
	{
		$data['title'] = 'Riwayat Penimbangan Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', [
			'username' => $this->session->userdata('username')
		])->row_array();

		// Query join ke anak & ibu untuk ambil riwayat penimbangan
		$this->db->select('penimbangan.*, anak.nama_anak, anak.tgl_lahir as tgl_lahir_anak, anak.jenis_kelamin, ibu.nama_ibu');
		$this->db->from('penimbangan');
		$this->db->join('anak', 'anak.id_anak = penimbangan.anak_id');
		$this->db->join('ibu', 'ibu.id_ibu = penimbangan.ibu_id');
		$this->db->order_by('penimbangan.tgl_skrng', 'DESC');

		$data['riwayat'] = $this->db->get()->result_array();

		// $this->load->view('templates/header-datatables', $data);
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/topbar', $data);
		// $this->load->view('layanan/penimbangan-riwayat', $data); // view baru
		// $this->load->view('templates/footer-datatables');

		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/penimbangan-riwayat', $data);
		$this->load->view('temp/footer');

	}



	public function create()
	{
		$data['title'] = 'Penimbangan Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['d_anak'] = $this->Penimbangan_model->getDataAnakIbu();
		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('layanan/penimbangan-form', $data);
		$this->load->view('temp/footer');
	}
	// SELESAI MENAMPILKAN

	// MULAI TAMBAH DATA
	public function submit()
	{
		$data['title'] = 'Penimbangan Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

		$user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$deteksiValues = $_POST['deteksi'];

		$this->Penimbangan_model->add(
			array(
				'anak_id' => $this->input->post('id_anak'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'ibu_id' => $this->input->post('ibu_id'),
				'usia' => $this->input->post('usia'),
				'deteksi' => $deteksiValues[0],
				'tb' => $this->input->post('tb'),
				'bb' => $this->input->post('bb'),
				'lingkarkepala' => $this->input->post('lingkarkepala'),
				'tgl_skrng' => $this->input->post('tgl_skrng'),
				'ket' => $this->input->post('keterangan'),
				'created_by' => $user['id_users'],
			)
		);

		// $this->db->insert('penimbangan', $data);
		$this->session->set_flashdata('msg', ' Data Berhasil Ditambahkan');
		redirect('penimbangan_anak/index');
	}


	public function update($id_penimbangan)
    {
        $this->form_validation->set_rules('tgl_penimbangan', 'Tanggal Penimbangan', 'required');
        $this->form_validation->set_rules('bb', 'Berat Badan', 'required|numeric|greater_than[0]');
        $this->form_validation->set_rules('tb', 'Tinggi Badan', 'required|numeric|greater_than[0]');
        $this->form_validation->set_rules('lingkarkepala', 'Lingkar Kepala', 'required|numeric|greater_than[0]');
        $this->form_validation->set_rules('ket', 'Keterangan', 'trim');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg', 'Data gagal diupdate! Periksa kembali input Anda.');
            redirect('penimbangan_anak/index'); 
        } else {
            $data_to_update = array(
                'tgl_skrng'      => $this->input->post('tgl_penimbangan'),
                'bb'             => $this->input->post('bb'),
                'tb'             => $this->input->post('tb'),
                'lingkarkepala'  => $this->input->post('lingkarkepala'),
                'ket'            => $this->input->post('ket'),
            );
            $update_status = $this->Penimbangan_model->update($id_penimbangan, $data_to_update);
            if ($update_status) {
                $this->session->set_flashdata('msg', 'Data penimbangan anak berhasil diupdate!');
            } else {
                $this->session->set_flashdata('msg', 'Gagal mengupdate data penimbangan anak. Terjadi kesalahan pada database.');
            }

            redirect('penimbangan_anak/index'); 
        }
    }

	public function delete($id_penimbangan)
    {
        if (empty($id_penimbangan)) {
            $this->session->set_flashdata('msg', 'ID Penimbangan tidak ditemukan.');
            redirect('penimbangan_anak/index');
        }
        $delete_status = $this->Penimbangan_model->delete($id_penimbangan);

        if ($delete_status) {
            $this->session->set_flashdata('msg', 'Data penimbangan anak berhasil dihapus!');
        } else {
            $this->session->set_flashdata('msg', 'Gagal menghapus data penimbangan anak. Terjadi kesalahan pada database.');
        }
        redirect('penimbangan_anak/index');
    }
}