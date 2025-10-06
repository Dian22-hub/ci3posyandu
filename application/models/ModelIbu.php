<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelIbu extends CI_Model
{
    //manajemen buku

    public function countIbu()
    {
        return $this->db->get('data_ibu')->num_rows();
    }
    public function countImunisasi()
    {
        return $this->db->get('imunisasi')->num_rows();
    }
    public function countAnak()
    {
        return $this->db->get('data_anak')->num_rows();
    }
    public function getIbu()
    {
        return $this->db->get('data_ibu');
    }
    public function simpanData($data)
    {
        $this->db->insert('data_ibu',$data);
    }
    public function hapus($where = null)
    {
        $this->db->delete('data_ibu', $where);
    }
    public function hapususer($id = null)
    {
        $this->db->delete('user', $id);
    }
    public function updateData($data = null, $where = null)
    {
        $this->db->update('data_ibu', $data, $where);
    }
    public function ibuWhere($where)
    {
        return $this->db->get_where('data_ibu', $where);
    }
    public function profilIbu()
	{ 
		$nik = $this->session->userdata('email');
		return $this->db->get_where('data_ibu', ['NIK'=>$nik]);
		
    }

    public function profilAnak()
	{
		$nik = $this->session->userdata('email');
		return $this->db->get_where('data_anak', ['ibu_id'=>$nik]);
		
    }

    public function ukurWhere($where)
    {
        return $this->db->get_where('imunisasi', $where);
    }

    public function ImunWhere($where)
    {
        
        $this->db->select('
            imunisasi.tgl_imun,
            imunisasi.id_imun,
            imunisasi.bb,
            imunisasi.tb,
            imunisasi.lk,
            imunisasi.id_anak,
            imunisasi.id_pet,
            data_anak.nama_anak,
            petugas.nama_petugas,
            det_layanan.id_layanan,
            data_vaksin.id_vaksin,
            data_vaksin.nama_vaksin
            
        ');
        $this->db->join('data_anak', 'imunisasi.id_anak = data_anak.id_anak');
        
        $this->db->join('petugas', 'imunisasi.id_pet = petugas.id_pet','left');
        $this->db->join('det_layanan', 'imunisasi.id_imun = det_layanan.id_imunisasi','left');
        $this->db->join('data_vaksin', 'det_layanan.id_layanan = data_vaksin.id_vaksin','left');
        $this->db->from('imunisasi');
        $this->db->where('imunisasi.id_anak', implode (" ",$where));
        return $this->db->get();

}
public function ImunisasiWhere($where)
{
    return $this->db->get_where('imunisasi', $where);
}
}