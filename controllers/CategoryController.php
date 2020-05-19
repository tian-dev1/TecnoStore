<?php 
require_once(__DIR__ . '/../models/CategoryModel.php');

class CategoryController {
	private $model;

	public function __construct() {
		$this->model = new CategoryModel();
	}
	
	public function set( $category_data = array() ) {
		return $this->model->set($category_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idCategoty = '' ) {
		return $this->model->del($idCategoty);
	}

	public function showStatus(){
		return $this->model->showStatus();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}