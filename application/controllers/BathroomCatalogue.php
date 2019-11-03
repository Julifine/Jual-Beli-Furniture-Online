<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BathroomCatalogue extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Bathroom';
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/Bathroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function roomProduct($productCategory)
	{
		$data['judul'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/productCategory');
		$this->load->view('Footer/footers');
	}
	
	public function detailProduct($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;		
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/detail_product');
		$this->load->view('Footer/footers');
	}
	
	public function detailProductAdmin($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/detail_product_admin');
		$this->load->view('Footer/footers');
	}
	
	public function addProduct($productCategory)
	{
		$data['judul'] = 'Add Product';
		$data['roomCategory'] = 'Bathroom';
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/add_product.php');
		$this->load->view('Footer/footers');
	}
	
	public function editProduct($productCategory,$productName)
	{
		$data['judul'] = 'Edit Product';
		$data['roomCategory'] = 'Bathroom';
		$data['productCategory'] = $productCategory;
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('BathRoom/edit_product.php');
		$this->load->view('Footer/footers');
	}
}
