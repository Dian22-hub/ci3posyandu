<?php 

defined('BASEPATH') or exit('No Direct script access allowed'); 

class Laporanposyandu extends CI_Controller 

{ 

	function __construct() 

	{ 

		parent::__construct(); 

		$this->load->model(['ModelUser', 'ModelBuku','ModelAnak','ModelIbu','ModelVaksin','ModelImunisasi','ModelPetugas']); 

	} 

	public function lap_imunisasi()
    {
        $data['judul'] = 'Data Imunisasi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();

        // $this->form_validation->set_rules('start_date', 'start_date', 'required|trim', [
        //     'required' => 'Nama Anak Harus Di Isi',
        // ]);

        $start_date = $this->input->get('start_date');
        $end_date = $this->input->get('end_date');

        $data['imunisasi'] = $this->ModelImunisasi->getImun($start_date, $end_date);
        $data['anak'] = $this->ModelAnak->getAnak();
        $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
        $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();

        $data['start_date'] = $start_date;
        $data['end_date'] = $end_date;

        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('laporan/laporanimunisasi', $data);
        $this->load->view('templates/footer');

    }

    public function lap_ibu()
    {
        $data['judul'] = 'Data Ibu';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['kategori'] = $this->ModelBuku->getKategori()->result_array();
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('laporan/laporanibu', $data);
        $this->load->view('templates/footer');


    }

    public function lap_anak()
    {
        $data['judul'] = 'Data Anak';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
        $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
        $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
        $data['anak'] = $this->ModelAnak->getAnak();
        // var_dump($data['anak']);die;
        $this->load->view('temp_admin/header', $data);
        $this->load->view('temp_admin/nav', $data);
        $this->load->view('temp_admin/sidebar', $data);
        $this->load->view('laporan/laporananak', $data);
        $this->load->view('templates/footer');

    }


    
public function cetak_laporan_imun() 

{ 

    $start_date = $this->input->get('start_date');
    $end_date = $this->input->get('end_date');

    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['imunisasi'] = $this->ModelImunisasi->getImun($start_date, $end_date);
    $data['anak'] = $this->ModelAnak->getAnak();
    $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
    $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();

    $data['start_date'] = $start_date;
    $data['end_date'] = $end_date;

    $this->load->view('laporan/laporanimunisasi_print', $data);
}

public function cetak_laporan_ibu() 

{ 

    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
    $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

    $this->load->view('laporan/laporanibu_print', $data);
}

public function cetak_laporan_anak() 

{ 

    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
    $data['anak'] = $this->ModelAnak->getAnak();

    $this->load->view('laporan/laporananak_print', $data);
}

public function laporan_imun_pdf()
    {
      // {
      //   $this->load->library('dompdf_gen');

      $start_date = $this->input->get('start_date');
      $end_date = $this->input->get('end_date');

      if (empty($start_date) || empty($end_date)) {
          // Set default date range to avoid error, e.g., last 30 days or no filter
          $start_date = null;
          $end_date = null;
      }

      $data['judul'] = 'Data Imunisasi';
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
      $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
      $data['imunisasi'] = $this->ModelImunisasi->getImun($start_date, $end_date);
      $data['anak'] = $this->ModelAnak->getAnak();
      $data['vaksin'] = $this->ModelVaksin->getVaksin()->result_array();
      $data['petugas'] = $this->ModelPetugas->getPetugas()->result_array();
// $this->load->library('dompdf_gen');

$sroot = $_SERVER['DOCUMENT_ROOT'];
        include $sroot . "/application/third_party/dompdf/autoload.inc.php";
        $dompdf = new Dompdf\Dompdf();

$this->load->view('laporan/laporanimunisasi_print', $data);
$paper_size = 'A4'; // ukuran kertas
$orientation = 'landscape'; //tipe format kertas potrait atau landscape
$html = $this->output->get_output();
$dompdf->set_paper($paper_size, $orientation);
//Convert to PDF
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("laporan_data_imunisasi.pdf", array('Attachment' => 0));
// nama file pdf yang di hasilkan
           
        
  
    

        // $this->dompdf->set_paper($paper_size, $orientation);
        
    // }
  }


  public function laporan_anak_pdf()
  {
    // {
    //   $this->load->library('dompdf_gen');

    $data['judul'] = 'Data Anak';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['id_petugas'] = $this->ModelPetugas->profilpet()->row_array();
    $data['petugas'] = $this->ModelPetugas->profilpet()->result_array();
    $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
    $data['anak'] = $this->ModelAnak->getAnak();
// $this->load->library('dompdf_gen');

$sroot = $_SERVER['DOCUMENT_ROOT'];
      include $sroot . "/posyandusmt4/application/third_party/dompdf/autoload.inc.php";
      $dompdf = new Dompdf\Dompdf();

$this->load->view('laporan/laporananak_print', $data);
$paper_size = 'A4'; // ukuran kertas
$orientation = 'landscape'; //tipe format kertas potrait atau landscape
$html = $this->output->get_output();
$dompdf->set_paper($paper_size, $orientation);
//Convert to PDF
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("laporan_data_anak.pdf", array('Attachment' => 0));
// nama file pdf yang di hasilkan
         
      

  
      // $this->dompdf->set_paper($paper_size, $orientation);
      
  // }
}

public function laporan_ibu_pdf()
  {
    // {
    //   $this->load->library('dompdf_gen');
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['ibu'] = $this->ModelIbu->getIbu()->result_array();
    $data['kategori'] = $this->ModelBuku->getKategori()->result_array();

// $this->load->library('dompdf_gen');

$sroot = $_SERVER['DOCUMENT_ROOT'];
      include $sroot . "/posyandusmt4/application/third_party/dompdf/autoload.inc.php";
      $dompdf = new Dompdf\Dompdf();

$this->load->view('laporan/laporanibu_print', $data);
$paper_size = 'A4'; // ukuran kertas
$orientation = 'landscape'; //tipe format kertas potrait atau landscape
$html = $this->output->get_output();
$dompdf->set_paper($paper_size, $orientation);
//Convert to PDF
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream("laporan_data_ibu.pdf", array('Attachment' => 0));
// nama file pdf yang di hasilkan
         
      

  
      // $this->dompdf->set_paper($paper_size, $orientation);
      
  // }
}

}
