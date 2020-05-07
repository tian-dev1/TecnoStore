<?php 
require_once('Model.php');

class SubCategory extends Model {
	public $idSubCategory;
    public $nameSubCategory; 
    public $descriptionSubCategory;
    /* FK */
    public $idStatus;

	public function set( $sub_category_data = array() ) {
		foreach ($sub_category_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO SubCategory (nameSubCategory, descriptionSubCategory, idStatus) VALUES ($nameSubCategory, $descriptionSubCategory, $idStatus)";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM SubCategory WHERE idSubCategory LIKE '%$filter%';"
			:"SELECT * FROM SubCategory";
		
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

	public function del( $idSubCategory = '' ) {
		$this->query = "DELETE FROM SubCategory WHERE idSubCategory = $idSubCategory";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>