<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyAccount extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'My Account';
		$this->load->view('Header/headers',$data);
		$this->load->view('MyAccount');
		$this->load->view('Footer/footers');
	}	
	
	public function Profile(){
		$data['judul'] = 'Profile';
		$this->load->view('Header/headers',$data);
		$this->load->view('Profile');
		$this->load->view('Footer/footers');
	}
	
	public function PersonalDetail(){
		$data['judul'] = 'Personal Detail';
		$this->load->view('Header/headers',$data);
		$this->load->view('PersonalDetail');
		$this->load->view('Footer/footers');
	}
	
	public function AddressBook(){
		$data['judul'] = 'Address Book';
		$this->load->view('Header/headers',$data);
		$this->load->view('AddressBook');
		$this->load->view('Footer/footers');
	}
	
	public function AddAddress(){
		$data['judul'] = 'Add Address';
		$this->load->view('Header/headers',$data);
		$this->load->view('AddAddress');
		$this->load->view('Footer/footers');
	}
}
