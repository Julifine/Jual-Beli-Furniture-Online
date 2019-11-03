<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class OutdoorCatalogue extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Outdoor';
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/outdoor_home');
		$this->load->view('Footer/footers');
	}
	
	public function roomProduct($productCategory)
	{
		$data['judul'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/productCategory');
		$this->load->view('Footer/footers');
	}
	
	public function detailProduct($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/detail_product');
		$this->load->view('Footer/footers');
	}
	
	public function detailProductAdmin($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/detail_product_admin');
		$this->load->view('Footer/footers');
	}
	
	public function addProduct($productCategory)
	{
		$data['judul'] = 'Add Product';
		$data['roomCategory'] = 'Outdoor';
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/add_product.php');
		$this->load->view('Footer/footers');
	}
	
	public function editProduct($productCategory,$productName)
	{
		$data['judul'] = 'Edit Product';
		$data['roomCategory'] = 'Outdoor';
		$data['productCategory'] = $productCategory;
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('Outdoor/edit_product.php');
		$this->load->view('Footer/footers');
	}
}
