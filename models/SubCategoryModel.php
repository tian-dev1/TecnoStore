<?php 
require_once('Model.php');

class SubCategoryModel extends Model {
	public $idSubCategory;
    public $nameSubCategory; 
    public $descriptionSubCategory;
    /* FK */
    public $idStatus;

	public function set( $sub_category_data = array() ) {
		foreach ($sub_category_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO SubCategory (idSubCategory, nameSubCategory, descriptionSubCategory, idCategory, idStatus) VALUES ($idSubCategory, '$nameSubCategory', '$descriptionSubCategory', $idCategory, $idStatus)";
		//print_r($this->query);
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

	public function showStatus(){

        $this->query = "SELECT * FROM Status";
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
	
	public function showCategory(){

        $this->query = "SELECT * FROM Category";
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

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>