<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	
	public function Register()
	{
		$this->load->view('Register');
	}
	
	public function Login()
	{
		$this->load->view('Login');
	}
	
	public function RegisterAdmin()
	{
		$this->load->view('RegisterAdmin');
	}
}
