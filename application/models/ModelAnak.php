<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAnak extends CI_Model
{
    //manajemen buku 

    public function getAnak()
    {
        // return $this->db->get('data_anak');
        $this->db->select('
        data_anak.id_anak,
        data_anak.nik,
        data_anak.nama_ayah,
        data_anak.nama_anak,
        data_anak.tgl_lahir,
        data_anak.ibu_id,
        data_ibu.nama_ibu');
        $this->db->join('data_ibu', 'data_anak.ibu_id = data_ibu.id_ibu');
        $this->db->from('data_anak');
        $query = $this->db->get();
        // var_dump($query);die;
        return $query->result_array();
    }
    public function simpanData($data)
    {
        $this->db->insert('data_anak',$data);
    }
    public function hapus($where = null)
    {
        $this->db->delete('data_anak', $where);
    }
    public function updateAnak($data = null, $where = null)
    {
        $this->db->update('data_anak', $data, $where);
    }
    public function anakWhere($where)
    {
        return $this->db->get_where('data_anak', $where);
    }
    public function ambil_id($id_anak)
	{
        return $this->db->get_where('data_anak',['$id_anak'=>$id_anak]) ->row_array();
    }
    public function proses_edit()
	{
        $update = [
            "nama_anak" => $this->input->post('nama_anak'),
            "NIK" => $this->input->post('NIK'),
            "tgl_lahir" => $this->input->post('stok'),
            
          ];
          $this->db->where('id_anak', $this->input->post('id_anak'));
          $this->db->update('data_anak', $update);
    }
    public function namaibu()
    {
        $sql="SELECT nama_ibu FROM data_ibu where id_ibu = 3";
        $this->db->query($sql); 
    }
    public function joinIbuAnak($where)
    {
        //$this->db->select('buku.id_kategori,kategori.kategori');
        $this->db->select('*');
        $this->db->from('data_anak');
        $this->db->join('data_ibu','data_ibu.id_ibu = data_anak.nama_ibu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function umur()
    {    
        $birthDate = "12/17/1983";
  $birthDate = explode("/", $tgl_lahir);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
  return $this->db->get('data_anak');
    }

    public function age()
    {    
        $bday = new Datetime('tgl_lahir'); // Your date of birth
$today = new Datetime(date('y-m-d'));
$diff = $today->diff($bday);
return $this->db->get('data_anak');
    }
}