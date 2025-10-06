<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelImunisasi extends CI_Model
{


    public function getImun($start_date = null, $end_date = null)
    {
        // return $this->db->get('data_anak');
        $this->db->select('
            imunisasi.tgl_imun,
            imunisasi.id_imun,
            imunisasi.bb,
            imunisasi.tb,
            imunisasi.lk,
            imunisasi.id_anak,
            imunisasi.id_pet,
            data_anak.nama_anak,
            data_anak.nik,
            petugas.nama_petugas,
            data_vaksin.id_vaksin,
            data_vaksin.nama_vaksin,
            det_layanan.id_layanan
            
        ');
        $this->db->join('data_anak', 'imunisasi.id_anak = data_anak.id_anak');
        
        $this->db->join('petugas', 'imunisasi.id_pet = petugas.id_pet','left');
        $this->db->join('det_layanan', 'imunisasi.id_imun = det_layanan.id_imunisasi','left');
        $this->db->join('data_vaksin', 'det_layanan.id_layanan = data_vaksin.id_vaksin','left');
        $this->db->from('imunisasi');

        if ($start_date && $end_date) {
            $this->db->where('imunisasi.tgl_imun >=', $start_date);
            $this->db->where('imunisasi.tgl_imun <=', $end_date);
        }

        $query = $this->db->get();
        // var_dump($query);die;
        return $query->result_array();
    }
    public function hapus($where = null)
    {
        $this->db->delete('imunisasi', $where);
    }
    public function updateData($data = null, $where = null)
    {
        $this->db->update('imunisasi', $data, $where);
    }
    public function imunWhere($where)
    {
        return $this->db->get_where('imunisasi', $where);
    }
    public function updateImun($data = null, $where = null)
    {
        $this->db->update('imunisasi', $data, $where);

    }

    public function getdet()
    {        // return $this->db->get('data_anak');
        $query = $this->db->get();
        // var_dump($query);die;
        return $query->result_array();
    }


    
    public function simpanDetail($table, $data) 
    
    { 
        $this->db->select('
    
            det_layananan.id_layanan
            data_vaksin.id_vaksin,
            data_vaksin.nama_vaksin
            
        ');
        $this->db->join('data_vaksin', 'det_layanan.id_layanan = data_vaksin.id_vaksin');
        $this->db->from('det_layanan');
    

        $this->db->insert($table, $data); 

    } 

    public function insertData($table, $data) 

    { 

        $this->db->insert($table, $data); 

    } 


}
