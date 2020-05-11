<?php 
require_once('Model.php');

class StatusModel extends Model {
	public $idStatus;
    public $nameStatus; 

	public function set( $status_data = array() ) {
		foreach ($status_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO Status (idStatus, nameStatus) VALUES ( $idStatus, '$nameStatus')";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM Status WHERE idStatus LIKE '%$filter%';"
			:"SELECT * FROM Status";
		
		$this->get_query();
		//var_dump($this->rows);

		$num_rows = count($this->rows);
		//echo $num_rows;

		$data = array();

		foreach ($this->rows as $key => $value) {
			array_push($data, $value);
			//$data[$key] =  $value;
		}

		return $data;
	}

	public function del( $idStatus = '' ) {
		$this->query = "DELETE FROM Status WHERE idStatus = $idStatus";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>