<?php 
require_once(__DIR__ . '/../models/RoleModel.php');

class RoleController {
	private $model;

	public function __construct() {
		$this->model = new RoleModel();
	}

	public function set( $role_data = array() ) {
		return $this->model->set($role_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idRole = '' ) {
		return $this->model->del($idRole);
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}