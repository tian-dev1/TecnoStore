<?php 
require_once('Model.php');

class Role extends Model {
	public $idRole;
    public $nameRole; 
    /* FK */
    public $idStatus;

	public function set( $role_data = array() ) {
		foreach ($role_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO Role (nameRole, idStatus) VALUES ($nameRole, $idStatus)";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM Role WHERE idRole LIKE '%$filter%';"
			:"SELECT * FROM Role";
		
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

	public function del( $idRole = '' ) {
		$this->query = "DELETE FROM Role WHERE idRole = $idRole";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>