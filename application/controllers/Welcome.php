<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}
	public function login()
	{
		$this->load->view('login');
	}

	public function signup()
	{
		$this->load->view('signup');
	}

	public function content()
	{
		$this->load->view('content');
	}

	public function detail()
	{
		$this->load->view('detail');
	}
}
