<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_model extends CI_Model
{
	// MULAI GET DATA ANAK IBU
	public function getDataAnakIbu()
	{
		if ($this->session->userdata('level_id') == '3') {
			$ibu = $this->db->where('user_id', $this->session->userdata('id_users'))->get('ibu')->row();
			$id_ibu = $ibu->id_ibu;
			$query = "SELECT anak.*, ibu.nama_ibu, ibu.nama_suami
                    From anak JOIN ibu
                    ON anak.ibu_id = ibu.id_ibu where ibu_id = '$id_ibu'
                    ";
		} else {
			$query = "SELECT anak.*, ibu.nama_ibu, ibu.nama_suami
            From anak JOIN ibu
            ON anak.ibu_id = ibu.id_ibu  
            ";
		}
		return $this->db->query($query)->result_array();
	}
	// SELESAI GET DATA ANAK IBU

	// MULAI GET DATA UTK CETAK LAPORAN
	function get($where = array())
	{
		$this->db->select('i.nik_anak, i.nama_anak, i.tgl_lahir, i.jenis_kelamin, p.nama_ibu, p.nama_suami, h.tgl_skrng, h.usia, q.imunisasi, q.vit_a, q.ket, q.tgl_skrng, h.bb, h.tb, h.deteksi, h.lingkarkepala')
			->from('penimbangan h')
			->join('imunisasi q', 'q.anak_id = h.anak_id AND q.tgl_skrng = h.tgl_skrng', 'left')
			->join('ibu p', 'p.id_ibu = h.ibu_id', 'left')
			->join('anak i', 'i.id_anak = h.anak_id', 'left');

		if (!empty($where)) {
			$this->db->where($where);
		}

		$this->db->order_by('h.tgl_skrng', 'ASC');
		return $this->db->get()->result();
	}


	function getId($where = array())
	{

		$this->db->select('i.nik_anak, h.tgl_lahir, h.tgl_skrng, h.usia, h.bb, h.tb, h.deteksi, h.bb, q.imunisasi, q.vit_a, q.ket, p.id_ibu, p.nama_ibu, p.nama_suami, p.alamat, i.nama_anak')
			->from('penimbangan h')
			->join('imunisasi q', 'q.anak_id = h.anak_id')
			->join('ibu p', 'p.id_ibu = h.ibu_id')
			->join('anak i', 'i.id_anak = h.anak_id');
		if (count($where) > 0)
			$this->db->where($where);

		$this->db->group_by('h.anak_id');
		$this->db->order_by('h.tgl_skrng asc');
		// var_dump($res->result());
		// die;

		$res = $this->db->get();
		// echo $this->db->last_query();
		return $res->result();
	}
	// SELESAI GET DATA UTK CETAK LAPORAN
}
