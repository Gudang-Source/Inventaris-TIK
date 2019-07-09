<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_table extends CI_model {

  public function getdatatable(){
    return $this->db->query('SELECT * FROM barang NATURAL JOIN kategori_brg NATURAL JOIN log_barang');
  }

  public function getdatatablemaster(){
    $this->db->select('*');
    $this->db->from('tabel_master');
    $this->db->join('kategori_brg', 'tabel_master.id_tipe = kategori_brg.id_tipe');
    return $this->db->get();
  }

  public function getdatamaster($id_master){
    $this->db->select('*');
    $this->db->from('tabel_master');
    $this->db->JOIN('kategori_brg', 'tabel_master.id_tipe=kategori_brg.id_tipe');
    $this->db->where('id_master',$id_master);
    $data = $this->db->get();
    return $data;
  }

  public function insertdatatable($gambar){
    $data = array('nama_master'     => $this->input->post('namabrg'),
                  'merk_master'     => $this->input->post('merkbrg'),
                  'id_tipe'         => $this->input->post('tipebrg'),
                  'versi_master'    => $this->input->post('versi'),
                  'umur_master'     => $this->input->post('umurbrg'),
                  'foto_master'     => $gambar
                );
    $this->db->insert('tabel_master', $data);
  }

}
