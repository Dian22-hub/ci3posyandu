<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ibu_model extends CI_Model
{

	// MULAI CRUD DATA IBU
	public function getDataIbu()
	{
		$query = "SELECT * From ibu left join user on ibu.user_id = user.id_users";

		return $this->db->query($query)->result_array();
	}

	public function delDataIbu($id)
	{
		$this->db->where('id_ibu', $id);
		$this->db->delete('ibu');
	}

	public function updDataIbu($id, $data)
	{
		$this->db->where('id_ibu', $id);
		$this->db->update('ibu', $data);
	}
	// SELESAI CRUD DATA IBU
}
