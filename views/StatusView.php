<?php 
require(__DIR__ . '/../controllers/StatusController.php');

$status = new StatusController();

if(isset($_POST['accion'])){
	$accion = $_POST['accion'];
	switch($accion){
		case 'Insertar':
			if( isset($_POST['nameStatus'])  && !empty($_POST['nameStatus']) ){

				$nameStatus = $_POST['nameStatus'];

				$new_status = array(
					'idStatus' => 0,
					'nameStatus' => $nameStatus
				);
				$status->set($new_status);
		
				header('Location: ../Status.php');

			}else{
				echo 'Campos vacios no se puede realizar la inserción';
			}
		break;

		case 'Consultar':
			Consultar();
		break;

		case 'Actualizar':

			if( (isset($_POST['idStatusUpdate']) && !empty($_POST['idStatusUpdate'])) && (isset($_POST['nameStatusUpdate']) && !empty($_POST['nameStatusUpdate'])) )
			{
				$idStatusUpdate = $_POST['idStatusUpdate'];
				$nameStatusUpdate = $_POST['nameStatusUpdate'];
				
				// echo "Id del status $idStatusUpdate  <br>
				// 	nuevo nombre estado $nameStatusUpdate <br>";

				$update_status = array(
					'idStatus' => $idStatusUpdate,
					'nameStatus' => $nameStatusUpdate
				);
				//print_r($update_status);
				
				$status->set($update_status);

				header('Location: ../Status.php');
				
			}else{
				echo "Campos vacios no se puede realizar la actualización";
			}
		break;

		
		case 'Eliminar':
			if(isset($_POST['idStatusDelete'])  && !empty($_POST['idStatusDelete'])   ){
				
				$idStatusDelete = $_POST['idStatusDelete'];
				//echo "$idStatusDelete";
				$status->del($idStatusDelete); 

				header('Location: ../Status.php');
			}else{
				echo 'Campos vacios no se puede realizar la eliminación';
			}

		break;
	}
}


function Consultar(){
	$status = new StatusController();
	$status_data = $status->get();
			//var_dump($status_data);
			$num_status = count($status_data);
?>
			
			<h2>Consulta de estados</h2>
			<?php echo "<h3>Número de Registros: $num_status</h3>"; ?>
				<table>
				<tr>
					<th>ID Status</th>
					<th>Name Status</th>
				</tr>
<?php 
			for ($n = 0; $n < count($status_data); $n++) {
				
				echo '<tr>
					<td>'.$status_data[$n]['idStatus'].'</td>
					<td>'.$status_data[$n]['nameStatus'].'</td>
				</tr>';
			}
				echo '</table>';
}
