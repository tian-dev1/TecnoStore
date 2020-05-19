<?php 
require(__DIR__ . '/../controllers/SubCategoryController.php');

$sub_category = new SubCategoryController();

if(isset($_POST['accion'])){
	$accion = $_POST['accion'];
	switch($accion){
		case 'Insertar':
            if( isset($_POST['nameSubCategory'])  && !empty($_POST['nameCategory']) && isset($_POST['descriptionSubCategory'])  && !empty($_POST['descriptionSubCategory']) && isset($_POST['idCategory'])  && !empty($_POST['idCategory']) ){
                
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
                && (isset($_POST['descriptionSubCategory']) && !empty($_POST['descriptionSubCategory'])) && (isset($_POST['idStatus']) && !empty($_POST['idStatus'])) 
            )
			{
				$idCategory = $_POST['idCategory'];
                $nameCategory = $_POST['nameCategory'];
                $descriptionCategory = $_POST['descriptionCategory'];
				$idStatus = $_POST['idStatus'];
				
                // echo "
                //     Id Categoria $idCategory  <br>
                //     nombre de la categoria $nameCategory <br>
                //     descripción categoria $descriptionCategory <br>
                //     estado de la categoria $idStatus <br>
                //     ";

				$update_category= array(
					'idCategory' => $idCategory,
                    'nameCategory' => $nameCategory,
                    'descriptionCategory' => $descriptionCategory,
                    'idStatus' => $idStatus 
				);
				// print_r($update_category);
				
				$category->set($update_category);

				header('Location: ../Category.php');
				
			}else{
				echo "Campos vacios no se puede realizar la actualización";
			}
		break;

		case 'Eliminar':
            if(isset($_POST['IdCategoryDelete'])  && !empty($_POST['IdCategoryDelete'])   ){
                        
                $IdCategoryDelete = $_POST['IdCategoryDelete'];
                echo "$IdCategoryDelete";
				$category->del($IdCategoryDelete); 
				
				header('Location: ../Category.php');

            }else{
                echo 'Campos vacios no se puede realizar la eliminación';
            }
		break;
	}

	
}

function Consultar(){
	$category = new CategoryController();
	$category_data = $category->get();
			//var_dump($category_data);
			$num_category = count($category_data);
?>
			
			<h2>Consulta de categorias</h2>
			<?php echo "<h3>Número de Registros: $num_category</h3>"; ?>
				<table>
				<tr>
					<th>ID </th>
					<th>Nombre </th>
                    <th>Descripción </th>
					<th>Estado </th>
				</tr>
<?php 
			for ($n = 0; $n < count($category_data); $n++) {
				
				echo '<tr>
					<td>'.$category_data[$n]['idCategory'].'</td>
                    <td>'.$category_data[$n]['nameCategory'].'</td>
                    <td>'.$category_data[$n]['descriptionCategory'].'</td>
                    <td>'.$category_data[$n]['idStatus'].'</td>
                    
				</tr>';
			}
				echo '</table>';
}