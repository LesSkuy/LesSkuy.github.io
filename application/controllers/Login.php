<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index(){
		$this->load->view('login');
    }
    
    function auth(){
		// $data['pelajar'] =$this->login_model->cek_data_pelajar();
    	// $this->load->view('daftar_pelajar',$data);

        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
		
		echo "username: $username, pass: $password";

        $cek_pelajar=$this->login_model->auth_pelajar($username,$password);

        if($cek_pelajar->num_rows() > 0){ //jika login sebagai pelajar
			$data=$cek_pelajar->row_array();
        	$this->session->set_userdata('masuk',TRUE);
		    $this->session->set_userdata('akses','1');
			$this->session->set_userdata('ses_id',$data['id_pelajar']);
		    $this->session->set_userdata('ses_nama',$data['username_pelajar']);
		    redirect(base_url().'welcome');

        }else{ //jika login sebagai manager
			$cek_manager=$this->login_model->auth_manager($username,$password);
			if($cek_manager->num_rows() > 0){
				$data=$cek_manager->row_array();
        		$this->session->set_userdata('masuk',TRUE);
				$this->session->set_userdata('akses','2');
				$this->session->set_userdata('ses_id',$data['id_manager']);
				$this->session->set_userdata('ses_nama',$data['username']);
				redirect(base_url().'product/manager_view');
			}else{  // jika username dan password tidak ditemukan atau salah
				echo $this->session->set_flashdata('msg','Username Atau Password Salah');
				redirect(base_url().'login');
			}
        }
    }
}
