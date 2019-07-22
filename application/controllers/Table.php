<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Table extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_tabelbrg';
		$isi['judul'] = 'Data Tabel';
		$isi['Welcome'] = 'Data Tabel';
		$isi['sub_judul'] = '';
		$isi['title'] = "Inventaris TIK | Data";
		$isi['menu'] = "Tampilan/menu/menu_tabel";
		$this->load->model('model_table');
		$isi['data']		= $this->model_table->getdatatable();
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function detail($id_brg)
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_detil';
		$isi['judul'] = 'Detail';
		$isi['Welcome'] = 'Detail';
		$isi['sub_judul'] = 'Detail Barang';
		$isi['title'] = "Inventaris TIK | Detail";
		$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		$this->load->model('model_table');
		$isi['data']		= $this->model_table->getdatadetail($id_brg);
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}
}
