<?php 
require_once(__DIR__ . '/../models/StatusModel.php');

class StatusController {
	private $model;

	public function __construct() {
		$this->model = new StatusModel();
	}

	public function set($status_data = array() ) {
		return $this->model->set($status_data);
	}

	public function get($filter = '' ) {
		return $this->model->get( $filter);
	}

	public function del( $idStatus = '' ) {
		return $this->model->del($idStatus);
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}