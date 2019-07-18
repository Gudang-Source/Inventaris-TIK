<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit extends CI_Controller {
  public function index(){
    $this->model_keamanan->getkeamanan();
    $email_login = $this->session->userdata('Email');
    $isi['konten'] = 'Tampilan/konten_edittipe';
    $isi['judul'] = 'Edit';
    $isi['Welcome'] = 'Edit Tipe';
    $isi['sub_judul'] = '';
    $isi['menu'] = "Tampilan/menu/menu_nonaktif";
    $isi['title'] = "Inventaris TIK | Edit Tipe Barang";
    $this->load->model('model_table');
    $isi['data'] = $this->model_table->gettabletipe();
    $this->load->view('Tampilan/tampilan_beranda',$isi);

  }
  public function tambah($id_master)
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
  public function hapus($id_master)
  {
    $this->model_keamanan->getkeamanan();
    $email_login = $this->session->userdata('Email');
    $this->load->model('model_table');
    $this->model_table->deletedatamaster($id_master);
    $this->session->set_flashdata('info',
        '<div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Success!</h4>
                        Data Berhasil Di Hapus.
                      </div>');
    redirect('Beranda');

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
  			redirect('Beranda');

  }
}
