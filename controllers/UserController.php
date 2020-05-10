<?php 
require_once(__DIR__ . '/../models/UserModel.php');

class UserController {
	private $model;

	public function __construct() {
		$this->model = new UserModel();
	}

	public function set( $user_data = array() ) {
		return $this->model->set($user_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idUser = '' ) {
		return $this->model->del($idUser);
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}