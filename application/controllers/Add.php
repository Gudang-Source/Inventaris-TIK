<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_tambahbrg';
		$isi['judul'] = 'Tambah';
		$isi['Welcome'] = 'Tambah Barang';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		$isi['title'] = "Inventaris TIK | Add Barang";
		$this->load->model('model_table');
		$isi['data']		= $this->model_table->getdatatable();
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function adddata()
	{
		$this->model_keamanan->getkeamanan();
		$config['upload_path'] = './assets/foto_brg/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
				$this->Model_table->insertdatatable($gambar);
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Info</h4>
                Data Berhasil Di Tambah
              </div>');
				redirect('Beranda');
			}
			else
			{
				echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
			}
		}
	}
	public function addbarang($id_master)
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_addbarang';
		$isi['judul'] = 'Tambah';
		$isi['Welcome'] = 'Tambah Barang';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		$isi['title'] = "Inventaris TIK | Add Barang";
		$this->load->model('model_table');
		$isi['data']		= $this->model_table->getdatamaster($id_master);
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

}
