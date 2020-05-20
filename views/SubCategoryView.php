<?php 
require(__DIR__ . '/../controllers/SubCategoryController.php');

$sub_category = new SubCategoryController();

if(isset($_POST['accion'])){
	$accion = $_POST['accion'];
	switch($accion){
		case 'Insertar':
            if( isset($_POST['nameSubCategory'])  && !empty($_POST['nameSubCategory']) && isset($_POST['descriptionSubCategory'])  && !empty($_POST['descriptionSubCategory']) && isset($_POST['idCategory'])  && !empty($_POST['idCategory']) ){
                
                $nameSubCategory = $_POST['nameSubCategory'];
				$descriptionSubCategory = $_POST['descriptionSubCategory'];
				$idCategory = $_POST['idCategory'];
				
                //Creación
                $new_sub_category = array(
					'idSubCategory' => 0,
                    'nameSubCategory' => $nameSubCategory,
					'descriptionSubCategory' => $descriptionSubCategory,
					'idCategory' => $idCategory,
					'idStatus' => 1
				);
				
                $sub_category->set($new_sub_category);
        
				header('Location: ../SubCategory.php');
				
            }else{
				echo 'Campos vacios no se puede realizar la inserción';
				
            }
        break;
        
		case 'Consultar':
			Consultar();	
		break;

		case 'Actualizar':
            if( (isset($_POST['idSubCategory']) && !empty($_POST['idSubCategory'])) && (isset($_POST['nameSubCategory']) && !empty($_POST['nameSubCategory'])) 
                && (isset($_POST['descriptionSubCategory']) && !empty($_POST['descriptionSubCategory'])) && (isset($_POST['idCategory']) && !empty($_POST['idCategory'])) && (isset($_POST['idStatus']) && !empty($_POST['idStatus'])) 
            )
			{
				$idSubCategory = $_POST['idSubCategory'];
                $nameSubCategory = $_POST['nameSubCategory'];
				$descriptionSubCategory = $_POST['descriptionSubCategory'];
				$idCategory = $_POST['idCategory'];
				$idStatus = $_POST['idStatus'];
				
                // echo "
                //     Id Categoria $idCategory  <br>
                //     nombre de la categoria $nameCategory <br>
                //     descripción categoria $descriptionCategory <br>
                //     estado de la categoria $idStatus <br>
                //     ";

				$update_sub_category= array(
					'idSubCategory' => $idSubCategory,
                    'nameSubCategory' => $nameSubCategory,
					'descriptionSubCategory' => $descriptionSubCategory,
					'idCategory' => $idCategory,
                    'idStatus' => $idStatus 
				);
				// print_r($update_sub_category);
				
				$sub_category->set($update_sub_category);

				header('Location: ../SubCategory.php');
				
			}else{
				echo "Campos vacios no se puede realizar la actualización";
			}
		break;

		case 'Eliminar':
            if(isset($_POST['idSubCategoryDelete'])  && !empty($_POST['idSubCategoryDelete'])   ){
                        
                $idSubCategoryDelete = $_POST['idSubCategoryDelete'];
                echo "$idSubCategoryDelete";
				$sub_category->del($idSubCategoryDelete); 
				
				header('Location: ../SubCategory.php');

            }else{
                echo 'Campos vacios no se puede realizar la eliminación';
            }
		break;
	}

	
}

function Consultar(){
	$sub_category = new SubCategoryController();
	$sub_category_data = $sub_category->get();
			//var_dump($sub_category_data);
			$num_sub_category = count($sub_category_data);
?>
			
			<h2>Consulta de sub categorias</h2>
			<?php echo "<h3>Número de Registros: $num_sub_category</h3>"; ?>
				<table>
				<tr>
					<th>ID </th>
					<th>Nombre </th>
                    <th>Descripción </th>
					<th>Categoria </th>
					<th>Estado </th>
				</tr>
<?php 
			for ($n = 0; $n < count($sub_category_data); $n++) {
				
				echo '<tr>
					<td>'.$sub_category_data[$n]['idSubCategory'].'</td>
                    <td>'.$sub_category_data[$n]['nameSubCategory'].'</td>
					<td>'.$sub_category_data[$n]['descriptionSubCategory'].'</td>
					<td>'.$sub_category_data[$n]['idCategory'].'</td>
                    <td>'.$sub_category_data[$n]['idStatus'].'</td>
                    
				</tr>';
			}
				echo '</table>';
}

function getSubCategoryId(){
	$sub_category = new SubCategoryController();
	$id_sub_category = $sub_category->get();

	if ($id_sub_category != 'error') {

		foreach ($id_sub_category as $idSubCategory) {
		echo "<option value=". $idSubCategory['idSubCategory'] ."> ". $idSubCategory['idSubCategory'] ." </option>";
		   
		}
	} else {
		echo "<p>No hay sub categorias en BD</p>";
	}					
}

function dropDownStatus(){
    $sub_category = new SubCategoryController();
	$resultado = $sub_category->showStatus();
	
        if ($resultado != 'error') {

            foreach ($resultado as $Status) {
			echo "<option value=". $Status['idStatus'] ."> ". $Status['nameStatus'] ." </option>";
			   
			}
        } else {
            echo "<p>No hay estados en BD</p>";
        }
}

function dropDownCategory(){
    $sub_category = new SubCategoryController();
	$resultado = $sub_category->showCategory();
	
        if ($resultado != 'error') {

            foreach ($resultado as $Category) {
			echo "<option value=". $Category['idCategory'] ."> ". $Category['nameCategory'] ." </option>";
			   
			}
        } else {
            echo "<p>No hay estados en BD</p>";
        }
}