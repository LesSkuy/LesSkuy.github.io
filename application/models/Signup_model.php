<?php
class Signup_model extends CI_Model{

  function add_pelajar($username,$password,$email){
    $data = array(
      'username_pelajar' => $username,
      'nama_pelajar' => $username,
      'password_pelajar' => $password,
      'email_pelajar' => $email,
      'pendidikan_pelajar' => "Sarjana Coba-coba"
    );
    $this->db->insert('pelajar',$data);
  }
}