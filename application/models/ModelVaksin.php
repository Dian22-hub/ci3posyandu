<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelVaksin extends CI_Model
{
    //manajemen buku

    public function getVaksin()
    {
        return $this->db->get('data_vaksin');
    }
    public function simpanData($data)
    {
        $this->db->insert('data_vaksin',$data);
    }
    public function hapus($where = null)
    {
        $this->db->delete('data_vaksin', $where);
    }
    public function updateVaksin($data = null, $where = null)
    {
        $this->db->update('data_vaksin', $data, $where);
    }
    public function VaksinWhere($where)
    {
        return $this->db->get_where('data_vaksin', $where);
    }
    public function ambil_id($id_vaksin)
	{
        return $this->db->get_where('data_vaksin',['$id_vaksin'=>$id_vaksin]) ->row_array();
    }
    public function proses_edit()
	{
        $update = [
            "nama_vaksin" => $this->input->post('nama_vaksin')
            
          ];
          $this->db->where('id_vaksin', $this->input->post('id_vaksin'));
          $this->db->update('data_vaksin', $update);
    }
}