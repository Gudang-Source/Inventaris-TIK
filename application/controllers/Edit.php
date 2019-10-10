<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Edit extends CI_Controller {
  function __construct(){
        parent::__construct();
        $this->load->model('model_table');
    }

  public function index(){
    $this->model_keamanan->getkeamanan();
    $email_login = $this->session->userdata('Email');
    $isi['konten'] = 'Tampilan/konten_edittipe';
    $isi['judul'] = 'Edit';
    $isi['Welcome'] = 'Edit Tipe';
    $isi['sub_judul'] = '';
    $isi['menu'] = "Tampilan/menu/menu_edit";
    $isi['title'] = "Inventaris TIK | Edit Tipe Barang";
    $isi['banyak_brg'] = $this->model_table->get_jumlah_brg();
    $this->load->view('Tampilan/tampilan_beranda',$isi);
  }

  public function get_tipe(){
    $data = $this->model_table->gettabletipe();
    echo json_encode($data);
  }

  public function gettipekode(){
    $id=$this->input->get('id');
    $data = $this->model_table->get_tipe_by_kode($id);
    echo json_encode($data);
  }

  public function tambah_tipe(){
    $namatipe=$this->input->post('namatipe');
    $data=$this->model_table->insert_tipe($namatipe);
    echo json_encode($data);
  }

  public function update_tipe(){
    $id=$this->input->post('idtipe');
    $namatipebaru=$this->input->post('namatipebaru');
    $data=$this->model_table->update_tipe($namatipebaru, $id);
    echo json_encode($data);
  }

  public function delete_tipe(){
    $id=$this->input->post('kode');
    $data=$this->model_table->hapus_tipe($id);
    echo json_encode($data);
  }
}
