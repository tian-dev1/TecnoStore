<?php 
require_once('Model.php');

class User extends Model {
	public $idUser;
    public $identification;
    public $names;
    public $lastNames;
    public $email;
    public $pass;
    /* FK */
    public $idRole;
    public $idStatus;

	public function set( $user_data = array() ) {
		foreach ($user_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO Person (idPerson, identification, names, lastNames, email, pass, idRole, idStatus) VALUES ($identification, $names, $lastNames, $email, $pass, $idRole, $idStatus)";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM User WHERE idUser LIKE '%$filter%';"
			:"SELECT * FROM User";
		
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

	public function del( $idUser = '' ) {
		$this->query = "DELETE FROM User WHERE idUser = $idUser";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>