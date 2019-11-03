<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Home';
		$this->load->view('Header/headers',$data);
		$this->load->view('Homepage');
		$this->load->view('Footer/footers');
	}
	
	public function Cart(){
		$data['judul'] = 'Cart';
		$this->load->view('Header/headers',$data);
		$this->load->view('Cart');
		$this->load->view('Footer/footers');
	}
	
	public function User(){
		$data['judul'] = 'Home';
		$this->load->view('Header/headers',$data);
		$this->load->view('Homepage');
		$this->load->view('Footer/footers');
	}
	
	public function BedroomCatalogue()
	{
		$data['judul'] = 'Bedroom';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/bedroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function LivingRoomCatalogue()
	{
		$data['judul'] = 'Living Room';
		$this->load->view('Header/headers',$data);
		$this->load->view('LivingRoom/livingroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function KitchenCatalogue()
	{
		$data['judul'] = 'Kitchen';
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/kitchen_home');
		$this->load->view('Footer/footers');
	}
	
	public function DiningRoomCatalogue()
	{
		$data['judul'] = 'Dining Room';
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/diningroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function WorkRoomCatalogue()
	{
		$data['judul'] = 'Work Room';
		$this->load->view('Header/headers',$data);
		$this->load->view('WorkRoom/workroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function BathRoomCatalogue()
	{
		$data['judul'] = 'Bath Room';
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/bathroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function KidsRoomCatalogue()
	{
		$data['judul'] = 'Kids Room';
		$this->load->view('Header/headers',$data);
		$this->load->view('KidsRoom/kidsroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function OutdoorCatalogue()
	{
		$data['judul'] = 'Outdoor';
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/outdoor_home');
		$this->load->view('Footer/footers');
	}
}
