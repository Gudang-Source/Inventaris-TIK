<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "Inventaris TIK | Dashboard";
		$isi['menu'] = "Tampilan/menu/menu_beranda";
		$id=$this->input->get('tipe_brg');
		$this->load->model('model_table');
		$isi['data']		= $this->model_table->getdatatablemaster();
		$isi['jumlah']		= $this->model_table->get_jumlah();
		$isi['bagus']		= $this->model_table->get_bagus();
		$isi['rusak']		= $this->model_table->get_rusak();
		$isi['banyak_brg'] = $this->model_table->get_jumlah_brg($id);
		//$isi['tipe']		= $this->model_table->getdatatipe();
		$isi['tipe']		= $this->model_table->get_nama_tipe();
		//$isi['jumlah_brg']		= json_encode($data);
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
