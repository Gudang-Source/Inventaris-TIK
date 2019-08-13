<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('email_user',$u);
		$this->db->where('pass_user',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('Email'	=> $row->email_user,
							  'password'	=> $row->pass_user,
								'id_user' => $row->id_user);
				$this->session->set_userdata($sess);
				redirect('Beranda');
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Maaf Email atau Sandi salah
					              </div>');
			redirect('login');
		}
	}

	public function updatesandi($email_login,$sandi_lama,$sandi_baru,$konfirmasi,$id_login) {
		$pwd = hash('sha512', $sandi_lama . config_item('encryption_key'));
		$p = hash('sha512', $sandi_baru . config_item('encryption_key'));
		$this->db->where('id_user',$id_login);
		$this->db->where('pass_user',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
					if ($sandi_baru != $konfirmasi) {
						$this->session->set_flashdata('info',
								'<div class="alert alert-danger alert-dismissible">
								                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
								                Konfirmasi Salah
								              </div>');
						redirect('Profil/ubahsandi');
					}
					else {
						$hasil=$this->db->query("UPDATE `user` SET `pass_user` ='$p' WHERE `id_user` =".$id_login);
						return $hasil;
					}
		}
		else {
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Sandi Lama Salah
					              </div>');
			redirect('Profil/ubahsandi');
		}
	}

	public function getdatauser(){
		return $this->db->get('user');
	}

	public function hash($string)
	{
			return hash('sha512', $string . config_item('encryption_key'));
	}

}
