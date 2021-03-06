<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Add extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Tampilan/konten_tambahbrg';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Tambah Barang';
		$isi['sub_judul'] = 'Tambah';
		$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		$isi['title'] = "Inventaris TIK | Add Barang";
		$this->load->model('model_table');
		$id=$this->input->get('tipe_brg');
		$isi['data']		= $this->model_table->getdatatipe();
		$isi['banyak_brg'] = $this->model_table->get_jumlah_brg($id);
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
				$this->Model_table->insertdatatablemaster($gambar);
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                Data Berhasil Di Tambah
              </div>');
				redirect('Master');
			}
			else
			{
				echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
			}
		}
		else{
			$gbr = $this->upload->do_upload('filefoto');
			$gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
			$this->Model_table->insertdatatablemaster($gambar);
			$this->session->set_flashdata('info',
					'<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-check"></i> Success</h4>
							Data Berhasil Di Tambah
						</div>');
			redirect('Master');
	}
}

	public function tambahbarang(){
				$this->model_keamanan->getkeamanan();
				$this->Model_table->insertdatatable();
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<h4><i class="icon fa fa-check"></i> Success!</h4>
														Data Berhasil Ditambah. Untuk melihat barang klik <a href="Table">disini</a>
													</div>');
				redirect('Master');

	}

}
