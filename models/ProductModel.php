<?php 
require_once('Model.php');

class Product extends Model {
	public $idProduct;
    public $nameProduct; 
    public $price;
    public $imgProduct;
    public $descriptionProduct;
    /* FK */
    public $idSubCategory;
    public $idStatus;

	public function set( $product_data = array() ) {
		foreach ($product_data as $key => $value) {
			$$key = $value;
		}

		$this->query = "REPLACE INTO Product (nameProduct, price, imgProduct, descriptionProduct, idSubCategory, idStatus) VALUES ($nameProduct, $price, $imgProduct, $descriptionProduct, $idSubCategory, $idStatus)";
		$this->set_query();
	}

	public function get( $filter = '' ) {
		$this->query = ( $filter != '')
			?"SELECT * FROM Product WHERE idProduct LIKE '%$filter%';"
			:"SELECT * FROM Product";
		
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

	public function del( $idProduct = '' ) {
		$this->query = "DELETE FROM Product WHERE idProduct = $idProduct";
		$this->set_query();
	}

	// public function __destruct() {
	// 	unset($this);
	// }
}

?>