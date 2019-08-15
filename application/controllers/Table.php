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
		$tipe=$this->input->get('tipe');
		$isi['data'] = $this->model_table->getdatatable($tipe);
		$isi['tipe'] = $this->model_table->gettabletipe();
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function get_barang(){
		$tipe=$this->input->get('tipe');
		$this->load->model('model_table');
		$data = $this->model_table->getdatatable($tipe);
		echo json_encode($data);
	}

	public function edit_barang(){
		$id=$this->input->post('id');
		$this->load->model('model_table');
		$this->model_table->edit_barang($id);
		$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h4><i class="icon fa fa-check"></i> Success</h4>
						Data Berhasil Di Update.
					</div>');
		redirect('Table');
	}

	public function getbarangkode(){
		$id=$this->input->post('id_barang');
		$this->load->model('model_table');
		$data['isi'] = $this->model_table->get_barang_by_kode($id);
		foreach ($data as $hasil) { ?>
            <table class="table">
                <tr>
                    <td width="30%">Nama Barang</td>
                    <td width="5%">:</td>
                    <td><?php echo $hasil[0]->nama_brg; ?></td>
                </tr>
                <tr>
                    <td>SN</td>
                    <td>:</td>
                    <td><?php echo $hasil[0]->SN; ?></td>
                </tr>
								<tr>
										<td>Tanggal Masuk Barang</td>
										<td>:</td>
										<td><?php echo $hasil[0]->tanggal_masuk; ?></td>
								</tr>
                <tr>
                    <td>Umur Efektif Barang(Bulan)</td>
                    <td>:</td>
                    <td><?php echo $hasil[0]->umur_brg; ?></td>
                </tr>
								<tr>
										<td>Kondisi Barang</td>
										<td>:</td>
										<td><?php echo $hasil[0]->kondisi_brg; ?></td>
								</tr>
								<tr>
										<td>Lokasi Barang</td>
										<td>:</td>
										<td><?php echo $hasil[0]->lokasi_brg; ?></td>
								</tr>
								<tr>
										<td>Keterangan</td>
										<td>:</td>
										<td><?php echo $hasil[0]->ket; ?></td>
								</tr>
            </table>
        <?php
        }
		}
		public function get_barang_kode(){
			$id=$this->input->get('id');
			$this->load->model('model_table');
			$data = $this->model_table->get_brg_by_kode($id);
			echo json_encode($data);
		}

		public function get_tipe_kode(){
			$tipe=$this->input->post('tipe');
			$this->load->model('model_table');
			$data = $this->model_table->getdatatable($tipe);
			echo json_encode($data);
		}

		// public function daftarbarang($id_brg){
		// 	$this->model_keamanan->getkeamanan();
		// 	$email_login = $this->session->userdata('Email');
		// 	$isi['konten'] = 'Tampilan/konten_tabelbrglainya';
		// 	$isi['judul'] = 'Data Barang';
		// 	$isi['Welcome'] = 'Data Barang';
		// 	$isi['sub_judul'] = '';
		// 	$isi['title'] = "Inventaris TIK | Barang";
		// 	$isi['menu'] = "Tampilan/menu/menu_nonaktif";
		// 	$this->load->model('model_table');
		// 	$data = $this->model_table->get_daftar_brg($id_brg);
		// 	$isi['data'] = json_encode($data);
		// 	$this->load->view('Tampilan/tampilan_beranda',$isi);
		// }
		//
		// public function get_daftar_brg(){
		// 	$id_brg = $this->input->post('$id_brg');
		// 	$this->load->model('model_table');
		// 	$data = $this->model_table->get_daftar_brg($id_brg);
		// 	echo json_encode($data);
		// }

}
