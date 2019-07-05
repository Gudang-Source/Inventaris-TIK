<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_profil';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Tampilan/menu/menu_profil";
		$isi['title'] = "Inventaris TIK | Profil";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function ubahsandi()
	{
		//$this->model_keamanan->getkeamanan();
		//$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_profil_ubahsandi';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Tampilan/menu/menu_profil";
		$isi['title'] = "Inventaris TIK | Profil";
		//$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		//$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}


	function updatesandi() {
		$email_login = $this->session->userdata('Email');
		$sandi_lama = $this->input->post('OldPassword');
		$sandi_baru = $this->input->post('NewPassword');
		$konfirmasi = $this->input->post('AgainNewPassword');
		$this->load->model('model_login');
		$this->model_login->updatesandi($email_login,$sandi_lama,$sandi_baru,$konfirmasi);
		echo "<script>window.alert('Sandi Berhasil diubah Silahkan login kembali dengan sandi baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Inventaris-TIK/Beranda/logout'>";
	}
}
