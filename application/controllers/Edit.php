<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit extends CI_Controller {
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
    redirect('Beranda');  

  }
}
