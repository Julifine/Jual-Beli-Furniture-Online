<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DiningroomCatalogue extends CI_Controller {

	public function index()
	{
		$data['judul'] = 'Diningroom';
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/diningroom_home');
		$this->load->view('Footer/footers');
	}
	
	public function roomProduct($productCategory)
	{
		$data['judul'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/productCategory');
		$this->load->view('Footer/footers');
	}
	
	public function detailProduct($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/detail_product');
		$this->load->view('Footer/footers');
	}
	
	public function detailProductAdmin($productCategory,$productName)
	{
		$data['judul'] = 'Detail Product';
		$data['productName'] = $productName;
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/detail_product_admin');
		$this->load->view('Footer/footers');
	}
	
	public function addProduct($productCategory)
	{
		$data['judul'] = 'Add Product';
		$data['roomCategory'] = 'Diningroom';
		$data['productCategory'] = $productCategory;
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/add_product.php');
		$this->load->view('Footer/footers');
	}
	
	public function editProduct($productCategory,$productName)
	{
		$data['judul'] = 'Edit Product';
		$data['roomCategory'] = 'Diningroom';
		$data['productCategory'] = $productCategory;
		$data['productName'] = $productName;
		$this->load->view('Header/headers',$data);
		$this->load->view('DiningRoom/edit_product.php');
		$this->load->view('Footer/footers');
	}
}
