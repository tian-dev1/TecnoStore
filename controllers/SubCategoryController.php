<?php 
require_once(__DIR__ . '/../models/SubCategoryModel.php');

class /SubCategoryController {
	private $model;

	public function __construct() {
		$this->model = new SubCategoryModel();
	}

	public function set( $sub_category_data = array() ) {
		return $this->model->set($sub_category_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idSubCategory = '' ) {
		return $this->model->del($idSubCategory);
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}