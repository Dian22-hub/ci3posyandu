<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPetugas extends CI_Model
{
    public function getPetugas()
    {
        return $this->db->get('petugas');
    }
    public function simpanPetugas($table, $data) 
    
    { 
        
        $this->db->insert($table, $data); 

    } 
    public function hapus($where = null)
    {
        $this->db->delete('petugas', $where);
        $this->db->delete('user', $where);
    }
    public function profilpet()
	{ 
		$email = $this->session->userdata('email');
		return $this->db->get_where('petugas', ['email'=>$email]);
		
    }
    public function updatePetugas($data = null, $where = null)
    {
        $this->db->update('petugas', $data, $where);
    }

    public function updateUser($data = null, $where = null)
    {
        $this->db->update('user', $data, $where);
    }
    public function hapusuer($where)
    {

        $this->db->delete('user',$where); 
        
    } 
}