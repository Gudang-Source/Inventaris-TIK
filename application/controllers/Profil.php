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
		$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		$isi['title'] = "Inventaris TIK | Profil";
		$this->load->model('model_login');
		$this->load->model('model_table');
		$isi['data'] = $this->model_login->getdatauser();
		$id=$this->input->get('tipe_brg');
    $isi['banyak_brg'] = $this->model_table->get_jumlah_brg($id);
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	function updatesandi() {
		$email_login = $this->session->userdata('Email');
		$id_login = $this->session->userdata('id_user');
		$sandi_lama = $this->input->post('OldPassword');
		$sandi_baru = $this->input->post('NewPassword');
		$konfirmasi = $this->input->post('AgainNewPassword');
		$this->load->model('model_login');
		$this->model_login->updatesandi($email_login,$sandi_lama,$sandi_baru,$konfirmasi,$id_login);
		echo "<script>window.alert('Sandi Berhasil diubah Silahkan login kembali dengan sandi baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/Inventaris-TIK/Beranda/logout'>";
	}

}
