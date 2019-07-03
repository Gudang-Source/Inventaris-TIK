<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_table extends CI_model {

  public function getdatatable(){
    return $this->db->query('SELECT * FROM barang NATURAL JOIN kategori_brg NATURAL JOIN riwayat');
  }

}
