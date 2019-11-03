<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class KitchenCatalogue extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Kitchen';
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/kitchen_home');
		$this->load->view('Footer/footers');
	}
	
	public function roomProduct($productCategory)
	{
		$data['judul'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/productCategory');
		$this->load->view('Footer/footers');
	}
	
	public function detailProduct($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/detail_product');
		$this->load->view('Footer/footers');
	}
	
	public function detailProductAdmin($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/detail_product_admin');
		$this->load->view('Footer/footers');
	}
	
	public function addProduct($productCategory)
	{
		$data['judul'] = 'Add Product';
		$data['roomCategory'] = 'Kitchen';
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/add_product.php');
		$this->load->view('Footer/footers');
	}
	
	public function editProduct($productCategory,$productName)
	{
		$data['judul'] = 'Edit Product';
		$data['roomCategory'] = 'Kitchen';
		$data['productCategory'] = $productCategory;
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('Kitchen/edit_product.php');
		$this->load->view('Footer/footers');
	}
}
