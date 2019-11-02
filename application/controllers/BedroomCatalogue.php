<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BedroomCatalogue extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Bedroom';
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/bedroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function roomProduct($productCategory)
	{
		$data['judul'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/wardrobe');
		$this->load->view('Footer/footers');
	}
	
	public function detailProduct($productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/detail_product');
		$this->load->view('Footer/footers');
	}
	
	public function detailProductAdmin($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/detail_product_admin');
		$this->load->view('Footer/footers');
	}
	
	public function addProduct($productCategory)
	{
		$data['judul'] = 'Add Product';
		$data['roomCategory'] = 'Bedroom';
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/Add_Product/add_product_wardrobe.php');
		$this->load->view('Footer/footers');
	}
	
	public function editProduct($productCategory,$productName)
	{
		$data['judul'] = 'Edit Product';
		$data['roomCategory'] = 'Bedroom';
		$data['productCategory'] = $productCategory;
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('Bedroom/edit_product.php');
		$this->load->view('Footer/footers');
	}
}
