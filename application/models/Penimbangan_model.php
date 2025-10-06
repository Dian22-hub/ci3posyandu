<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penimbangan_model extends CI_Model
{
    public $table = "penimbangan";

    // MULAI GET, ADD DATA ANAK IBU
    public function getDataAnakIbu()
    {
        $query = "SELECT anak.*, ibu.nama_ibu
                    From anak JOIN ibu
                    ON anak.ibu_id = ibu.id_ibu
                    ";

        return $this->db->query($query)->result_array();
    }

    function add($data)
    {
        $this->db->insert($this->table, $data);
    }

    public function update($id, $data) {
        $this->db->where('id_penimbangan', $id); 
        return $this->db->update('penimbangan', $data); 
    }

    public function delete($id) {
        $this->db->where('id_penimbangan', $id);
        return $this->db->delete($this->table);
    }

}