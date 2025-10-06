<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan_Anak extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		$this->load->model('Laporan_model');
	}

	// MULAI MENAMPILKAN
	public function index()
	{
		$data['title'] = 'Laporan Semua Anak | Posyandu EH Indah';
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['laporan'] = $this->Laporan_model->get(); // tanpa filter, semua data

		// $this->load->view('templates/header-datatables', $data);
		// $this->load->view('templates/sidebar');
		// $this->load->view('templates/topbar', $data);
		// $this->load->view('laporan/laporan', $data);
		// $this->load->view('templates/footer-datatables');

		$this->load->view('temp/header', $data);
		$this->load->view('temp/sidebar');
		$this->load->view('temp/content', $data);
		$this->load->view('laporan/laporan', $data);
		$this->load->view('temp/footer');
	}

	public function cetak_semua()
	{
		$data['laporan'] = $this->Laporan_model->get();

		$mpdf = new \Mpdf\Mpdf();
		$html = "<h2 align='center'>Laporan Penimbangan & Imunisasi Semua Anak</h2><br>";
		$html .= "<table border='1' cellpadding='5' cellspacing='0' style='font-size: 12px; width:100%;'>
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Imunisasi</th>
            <th>Nama Anak</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>BB</th>
            <th>TB</th>
            <th>Lingkar Kepala</th>
            <th>Nama Ibu</th>
            <th>Nama Ayah</th>
            <th>Tanggal Periksa</th>
            <th>Usia</th>
            <th>Imunisasi</th>
            <th>Vit A</th>
            <th>Keterangan</th>
        </tr>
    </thead><tbody>";
		$no = 1;
		foreach ($data['laporan'] as $row) {
			$tglImunisasi = date('d M Y', strtotime($row->tgl_skrng));
			$tglLahir = date('d M Y', strtotime($row->tgl_lahir));
			$tglPeriksa = date('d M Y', strtotime($row->tgl_skrng));

			$html .= "<tr>
            <td>{$no}</td>
            <td>{$tglImunisasi}</td>
            <td>{$row->nama_anak}</td>
            <td>{$row->jenis_kelamin}</td>
            <td>{$tglLahir}</td>
            <td>{$row->bb} Kg</td>
            <td>{$row->tb} Cm</td>
            <td>{$row->lingkarkepala} Cm</td>
            <td>{$row->nama_ibu}</td>
            <td>{$row->nama_suami}</td>
            <td>{$tglPeriksa}</td>
            <td>{$row->usia} bulan</td>
            <td>{$row->imunisasi}</td>
            <td>{$row->vit_a}</td>
            <td>{$row->ket}</td>
        </tr>";
			$no++;
		}
		$html .= "</tbody></table>";

		$mpdf->WriteHTML($html);
		$mpdf->Output('Laporan-Semua-Anak.pdf', 'I');
	}


	// SELESAI MENAMPILKAN

	function Cetak_Laporan()
	{
		$this->load->model('Laporan_model');
		$idanak = $this->input->post('id_anak');
		$idibu = $this->input->post('ibu_id');
		$namaayah = $this->input->post('nama_ayah');
		$tgllahir = $this->input->post('tgl_lahir');
		$filter = array();

		if ($idanak != '0')
			$filter['h.anak_id'] = $idanak;
		$filter['p.id_ibu'] = $idibu;
		$filter['p.nama_suami'] = $namaayah;
		$filter['i.tgl_lahir'] = $tgllahir;


		$data['laporan'] = $this->Laporan_model->get($filter);

		if ($this->input->is_ajax_request())
			$this->load->view('laporan/daftar_data_table', $data);
		// die;
		else {
			// echo 'print';
			// $html = $this->load->view('laporan/daftar_data_table', $data, true);
			// $mpdf = new \Mpdf\Mpdf();
			// $mpdf->WriteHTML($html);
			// $mpdf->Output();

			// $header = $this->ModLaporan->LaporanHeader($id_penilaian);
			// $detail = $this->ModLaporan->LaporanDetail($id_penilaian);
			$idanak = $this->input->post('id_anak');
			$idibu = $this->input->post('ibu_id');
			$namaayah = $this->input->post('nama_ayah');
			$tgllahir = $this->input->post('tgl_lahir');
			$filter = array();

			$filter['h.anak_id'] = $idanak;
			$filter['p.id_ibu'] = $idibu;
			$filter['p.nama_suami'] = $namaayah;
			$filter['i.tgl_lahir'] = $tgllahir;

			$dt = $this->Laporan_model->get($filter);
			$dtId = $this->Laporan_model->getId($filter);
			// var_dump($dt);
			// die;

			$mpdf = new \Mpdf\Mpdf();
			// $watermark = base_url('assets/images/icon.png');
			// $logo = base_url('build/img/icon-posyandu.png');

			// $mpdf->SetHeader("<table width='100%'>
			// <tr>
			// <td width='50' align='center'><h1>POSYANDU EH INDAH</h1></td>
			// </tr>
			// </table>");
			$mpdf->SetFooter("Laporan Perkembangan Anak | POSYANDU EH INDAH | {PAGENO}");
			$mpdf->SetMargins(0, 0, 10);

			$html = "<h1 align='center' style='margin-bottom:1px'>Laporan Perkembangan Anak</h1>";

			$html = $html . "<p align='left'><b>Tanggal Terakhir Periksa  : " . tanggal() . "</b></p>";

			//MUlai Data Anak
			$html = $html . "<h3>DATA ANAK</h3>";
			$html = $html . "<table>";
			foreach ($dtId as $i) {
				$html = $html . "<tr>";
				$html = $html . "<td style='width:150px'>NIK</td><td>:</td><td>" . $i->nik_anak . "</td>";
				$html = $html . "</tr>";
				$html = $html . "<tr>";
				$html = $html . "<td style='width:150px'>Nama Anak</td><td>:</td><td>" . $i->nama_anak . "</td>";
				$html = $html . "</tr>";
				$html = $html . "<tr>";
				$html = $html . "<td style='width:150px'>Tanggal Lahir</td><td>:</td><td>" . date_format(date_create($i->tgl_lahir), "j F Y") . "</td>";
				$html = $html . "</tr>";
				$html = $html . "<tr>";
				$html = $html . "<td style='width:150px'>Nama Ayah</td><td>:</td><td>" . $i->nama_suami . "</td>";
				$html = $html . "</tr>";
				$html = $html . "<tr>";
				$html = $html . "<td style='width:150px'>Nama Ibu</td><td>:</td><td>" . $i->nama_ibu . "</td>";
				$html = $html . "</tr>";
			}
			$html = $html . "</table>";
			//Selesai Data Anak

			$html = $html . "<br>";
			$html = $html . "<h3>REKAP DATA PENIMBANGAN DAN IMUNISASI ANAK</h3>";
			$html = $html . "<table border='1' cellspacing='0' cellpading='0' >";
			$html = $html . "<thead>";
			$html = $html . "<tr>";
			$html = $html . "<th>Tanggal Periksa</th>";
			$html = $html . "<th>Usia</th>";
			$html = $html . "<th>Berat Badan</th>";
			$html = $html . "<th>Tinggi Badan</th>";
			$html = $html . "<th>Lingkar Kepala</th>";
			$html = $html . "<th>Deteksi</th>";
			$html = $html . "<th>Imunisasi</th>";
			$html = $html . "<th>Vit. A</th>";
			$html = $html . "<th>Keterangan</th>";
			$html = $html . "</tr>";
			$html = $html . "</thead>";
			$html = $html . "<tbody>";
			foreach ($dt as $rows) {
				$html = $html . "<tr>";
				$html = $html . "<td align='center'>" . date_format(date_create($rows->tgl_skrng), "j F Y") . "</td><td align='center'>" . $rows->usia . ' bulan' . "</td><td align='center'>" . $rows->bb . ' kg' . "</td><td align='center'>" . $rows->tb . ' cm' . "</td>
                <td align='center'>" . $rows->lingkarkepala . ' cm' . "</td>
                <td align='center'>" . $rows->deteksi . "</td><td align='center'>" . $rows->imunisasi . "</td><td align='center'>" . $rows->vit_a . "</td><td align='center'>" . $rows->ket . "</td>";
				$html = $html . "</tr>";
			}
			$html = $html . "</tbody>";
			$html = $html . "</table>";
			$mpdf->WriteHTML($html);
			$mpdf->Output('Laporan Anak.pdf', 'I');
		}
	}
}