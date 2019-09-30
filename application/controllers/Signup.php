<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('signup_model');
	}

	public function index(){
		$this->load->view('signup');
    }

    function save(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $this->signup_model->add_pelajar($username,$password,$email);
        redirect('product');
      }
    
}
