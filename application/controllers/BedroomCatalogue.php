<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BedroomCatalogue extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['judul'] = 'Bedroom';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/bedroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function Wardrobe()
	{
		$data['judul'] = 'Wardrobe';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/wardrobe');
		$this->load->view('Footer/footers');
	}
	
	public function addWardrobe()
	{
		$data['judul'] = 'Add Product';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/Add_Product/add_product_wardrobe.php');
		$this->load->view('Footer/footers');
	}
	
	public function Bed()
	{
		$data['judul'] = 'Bed';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/bed');
		$this->load->view('Footer/footers');
	}
	
	public function Pillow()
	{
		$data['judul'] = 'Pillow';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/pillow');
		$this->load->view('Footer/footers');
	}
	
	public function Carpet()
	{
		$data['judul'] = 'Carpet';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/carpet');
		$this->load->view('Footer/footers');
	}
	
	public function Curtain()
	{
		$data['judul'] = 'Curtain';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/curtain');
		$this->load->view('Footer/footers');
	}
	
	public function Lamp()
	{
		$data['judul'] = 'Lamp';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/lamp');
		$this->load->view('Footer/footers');
	}
	
	public function Accessories()
	{
		$data['judul'] = 'Accessories';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/accessories');
		$this->load->view('Footer/footers');
	}
	
	public function Decorations()
	{
		$data['judul'] = 'Decorations';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/decorations');
		$this->load->view('Footer/footers');
	}
}
