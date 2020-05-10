<?php 
require_once(__DIR__ . '/../models/ProductModel.php');

class ProductController {
	private $model;

	public function __construct() {
		$this->model = new ProductModel();
	}

	public function set( $product_data = array() ) {
		return $this->model->set($product_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idProduct = '' ) {
		return $this->model->del($idProduct);
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}