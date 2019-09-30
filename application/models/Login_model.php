<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login_model extends CI_Model{
	
	function auth_pelajar($username,$password){
		$query=$this->db->query("SELECT * FROM pelajar WHERE username_pelajar='$username' AND password_pelajar='$password' LIMIT 1");
		return $query;
	}

	function cek_data_pelajar(){
		$result = $this->db->get('pelajar');
    return $result;
	}

	//cek nim dan password mahasiswa
	// function auth_manager($username,$password){
	// 	$query=$this->db->query("SELECT * FROM manager WHERE username='$username' AND password='$password' LIMIT 1");
	// 	return $query;
	// }

	function save($username,$password,$alamat,$jabatan){
		$data = array(
			'username' => $username,
			'password' => $password,
			'alamat' => $alamat,
			'akses' => $jabatan
		  );
		  if($jabatan==1){
			$this->db->insert('karyawan',$data);
		  }else{
			$this->db->insert('manager',$data);
		  }
		  
	}

}