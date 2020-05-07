<?php 
require_once('Model.php');

class Category extends Model {
	public $idCategory;
    public $nameCategory; 
    public $descriptionCategory;
    /* FK */
    public $idStatus;

	public function set( $category_data = array() ) {
		foreach ($category_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO Category (nameCategory, descriptionCategory, idStatus) VALUES ($nameCategory, $descriptionCategory, $idStatus)";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM Category WHERE idCategory LIKE '%$filter%';"
			:"SELECT * FROM Category";
		
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

	public function del( $idCategory = '' ) {
		$this->query = "DELETE FROM Category WHERE idCategory = $idCategory";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>