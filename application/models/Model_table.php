<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_table extends CI_model {

  public function getdatatable(){
    return $this->db->query('SELECT * FROM barang NATURAL JOIN kategori_brg');
  }

  public function getdatadetail($id_brg){
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->JOIN('kategori_brg', 'barang.id_tipe=kategori_brg.id_tipe');
    $this->db->where('id_brg',$id_brg);
    $data = $this->db->get();
    return $data;
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

  public function deletedatamaster($id_master){
    $this->db->where('id_master', $id_master);
    $this->db->delete('tabel_master');
  }

  public function insertdatatablemaster($gambar){
    $data = array('nama_master'     => $this->input->post('namabrg'),
                  'merk_master'     => $this->input->post('merkbrg'),
                  'id_tipe'         => $this->input->post('tipebrg'),
                  'versi_master'    => $this->input->post('versi'),
                  'umur_master'     => $this->input->post('umurbrg'),
                  'foto_master'     => $gambar
                );
    $this->db->insert('tabel_master', $data);
  }

  public function insertdatatable(){
    $data = array('nama_brg'      => $this->input->post('namabrg'),
                  'merk_brg'       => $this->input->post('merkbrg'),
                  'id_tipe'        => $this->input->post('tipe_brg'),
                  'versi_brg'      => $this->input->post('versibrg'),
                  'SN'             => $this->input->post('sn_brg'),
                  'umur_brg'       => $this->input->post('umurbrg'),
                  'foto_brg'       => $this->input->post('gmbrbrg'),
                  'kondisi_brg'    => $this->input->post('kondisibrg'),
                  'lokasi_brg'     => $this->input->post('lokasibrg'),
                  'tanggal_masuk'  => $this->input->post('tanggalbrg')
                );
    $this->db->insert('barang', $data);
  }
  public function gettabletipe(){
    $hasil = $this->db->get('kategori_brg');
    return $hasil->result();
  }

  public function getdatatipe(){
    return $this->db->get('kategori_brg');
  }

  public function insert_tipe($namatipe){
    $data = array('nama_tipe' => $namatipe );
    $hasil = $this->db->insert('kategori_brg', $data);
    return $hasil;
  }

  public function update_tipe($namatipebaru, $id){
    return $hasil = $this->db->query("UPDATE kategori_brg SET nama_tipe='$namatipebaru' WHERE id_tipe=$id");
    // $data = array('nama_tipe' => $namatipebaru );
    // $this->db->where('id_tipe', $id);
    // return $hasil=$this->db->Update('kategori_brg', $data);
  }

  public function hapus_tipe($id){
    $hasil = $this->db->query("DELETE FROM kategori_brg WHERE id_tipe=$id");
    return $hasil;
  }

  public function get_tipe_by_kode($id){
    $this->db->where('id_tipe', $id);
    $hsl = $this->db->get('kategori_brg', $id);
    if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_tipe' => $data->id_tipe,
                    'nama_tipe' => $data->nama_tipe,
                    );
            }
        }
    return $hasil;
  }

  public function get_barang_by_kode($id){
    $hsl = $this->db->query("SELECT * FROM barang WHERE id_brg=$id");
    return $hsl->result();
  }

}
