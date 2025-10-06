<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imunisasi_model extends CI_Model
{
    public $table = "imunisasi";

    // MULAI GET, ADD DATA ANAK IBU
    public function getDataAnakIbu()
    {
        $query = "SELECT anak.*, ibu.nama_ibu
                    From anak JOIN ibu
                    ON anak.ibu_id = ibu.id_ibu
                    ";

        return $this->db->query($query)->result_array();
    }
    public function get_by_id($id) {
        $this->db->where('id_imunisasi', $id); 
        $query = $this->db->get('imunisasi'); 
        return $query->row_array(); 
    }

    public function update($id, $data) {
        $this->db->where('id_imunisasi', $id); 
        return $this->db->update('imunisasi', $data); 
    }

    function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function delete($id_imunisasi)
    {
        $this->db->where('id_imunisasi', $id_imunisasi); 
        return $this->db->delete($this->table); 
    }
}