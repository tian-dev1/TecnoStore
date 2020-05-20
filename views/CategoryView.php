<?php 
require(__DIR__ . '/../controllers/CategoryController.php');

$category = new CategoryController();

if(isset($_POST['accion'])){
	$accion = $_POST['accion'];
	switch($accion){
		case 'Insertar':
            if( isset($_POST['nameCategory'])  && !empty($_POST['nameCategory']) && isset($_POST['descriptionCategory'])  && !empty($_POST['descriptionCategory']) ){
                
                $nameCategory = $_POST['nameCategory'];
				$descriptionCategory = $_POST['descriptionCategory'];
                //Creación
                $new_category = array(
					'idCategory' => 0,
                    'nameCategory' => $nameCategory,
					'descriptionCategory' => $descriptionCategory,
					'idStatus' => 1
				);
				
                $category->set($new_category);
        
				header('Location: ../Category.php');
				
            }else{
                echo 'Campos vacios no se puede realizar la inserción';
            }
        break;
        
		case 'Consultar':
			Consultar();	
		break;

		case 'Actualizar':
            if( (isset($_POST['idCategory']) && !empty($_POST['idCategory'])) && (isset($_POST['nameCategory']) && !empty($_POST['nameCategory'])) 
                && (isset($_POST['descriptionCategory']) && !empty($_POST['descriptionCategory'])) && (isset($_POST['idStatus']) && !empty($_POST['idStatus'])) 
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
            if(isset($_POST['idCategoryDelete'])  && !empty($_POST['idCategoryDelete'])   ){
                        
                $idCategoryDelete = $_POST['idCategoryDelete'];
				$category->del($idCategoryDelete); 
				
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

function getCategoryId(){
	$category = new CategoryController();
	$id_category = $category->get();

	if ($id_category != 'error') {

		foreach ($id_category as $idCategory) {
		echo "<option value=". $idCategory['idCategory'] ."> ". $idCategory['idCategory'] ." </option>";
		   
		}
	} else {
		echo "<p>No hay sub categorias en BD</p>";
	}
			
			
}


function dropDownStatus()
{
    $category = new CategoryController();
	$resultado = $category->showStatus();
	
        if ($resultado != 'error') {

            foreach ($resultado as $Status) {
			// 	print_r($resultado[$n]['idStatus']);
			//    print_r($resultado[$n]['nameStatus']);
			//echo $Estado['idStatus'] . $Estado['nameStatus'] ;
			echo "<option value=". $Status['idStatus'] ."> " . $Status['nameStatus'] ." </option>";
			   
			}
        } else {
            echo "<p>No hay estados en BD</p>";
        }
}