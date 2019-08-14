<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_table extends CI_model {

  public function getdatatable($tipe){
    if(!empty($tipe)){
    $hasil=$this->db->query("SELECT *, COUNT(barang.id_tipe) AS jumlah FROM barang LEFT OUTER JOIN kategori_brg ON barang.id_tipe=kategori_brg.id_tipe WHERE barang.id_tipe=$tipe GROUP BY barang.nama_brg");
  }else{
    $hasil=$this->db->query("SELECT *, COUNT(barang.id_tipe) AS jumlah FROM barang LEFT OUTER JOIN kategori_brg ON barang.id_tipe=kategori_brg.id_tipe GROUP BY barang.nama_brg");
  }
    return $hasil->result();
  }

  public function get_daftar_brg($id_brg){
    $hsl=$this->db->query("SELECT * FROM barang LEFT OUTER JOIN kategori_brg ON barang.id_tipe=kategori_brg.id_tipe WHERE barang.id_brg=".$id_brg);
    foreach ($hsl->result() as $data){
      $nama=$data->nama_brg;
      $query=$this->db->query("SELECT * FROM barang LEFT OUTER JOIN kategori_brg ON barang.id_tipe=kategori_brg.id_tipe WHERE barang.nama_brg='$nama'");
      return $query;
    }
  }

  public function update_brg($id, $kondisibaru, $lokasibaru, $ketbaru){
    return $hasil = $this->db->query("UPDATE barang SET kondisi_brg='$kondisibaru', lokasi_brg='$lokasibaru', ket='$ketbaru' WHERE id_brg=$id");
  }

  public function edit_barang($id){
    $data = array('kondisi_brg' => $this->input->post('kondisibrg'),
                  'lokasi_brg' => $this->input->post('lokasi_brg'),
                  'ket' => $this->input->post('textket')
                );
                $this->db->where('id_brg', $id);
                $this->db->update('barang', $data);
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
    $hasil = $this->db->query('SELECT * FROM tabel_master LEFT OUTER JOIN kategori_brg ON tabel_master.id_tipe=kategori_brg.id_tipe');
    return $hasil->result();
  }

  public function getdatamaster($id_master){
    $this->db->select('*');
    $this->db->from('tabel_master');
    $this->db->JOIN('kategori_brg', 'tabel_master.id_tipe=kategori_brg.id_tipe');
    $this->db->where('id_master',$id_master);
    $data = $this->db->get();
    return $data;
  }

  public function deletedatamaster($idmaster){
    $this->db->where('id_master', $idmaster);
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

  public function get_brg_by_kode($id){
    $this->db->where('id_brg', $id);
    $hsl = $this->db->get('barang', $id);
    if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_brg' => $data->id_tipe,
                    'nama_brg' => $data->nama_brg,
                    'kondisi_brg' => $data->kondisi_brg,
                    'lokasi_brg' => $data->lokasi_brg,
                    'ket' => $data->ket,
                    );
            }
        }
    return $hasil;
  }

  public function get_jumlah(){
    return $this->db->count_all_results('barang');
  }
  public function get_bagus(){
    $this->db->count_all_results('barang');
    $this->db->like('kondisi_brg', 'Bagus');
    $this->db->from('barang');
    return $this->db->count_all_results();

  }
  public function get_rusak(){
    $this->db->count_all_results('barang');
    $this->db->like('kondisi_brg', 'Rusak');
    $this->db->from('barang');
    return $this->db->count_all_results();
  }

  public function get_jumlah_brg(){
    $hasil = $this->db->query("SELECT tanggal_masuk, COUNT(id_brg) AS jumlah FROM `barang` GROUP BY tanggal_masuk");
    return $hasil;
  }

}
