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
		$this->load->view('Tampilan/tampilan_beranda',$isi);
	}

	public function get_barang(){
		$this->load->model('model_table');
		$data = $this->model_table->getdatatable();
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

	public function update_barang(){
		$id=$this->input->post('id_barang');
		$kondisibaru=$this->input->post('kondisibrg');
		$lokasibaru=$this->input->post('lokasi_brg');
		$ketbaru=$this->input->post('textket');
		$this->load->model('model_table');
		$data=$this->model_table->update_brg($id, $kondisibaru, $lokasibaru, $ketbaru);
		echo json_encode($data);
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
                    <td>Umur Efektif Barang</td>
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
}
