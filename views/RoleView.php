<?php 
require(__DIR__ . '/../controllers/RoleController.php');

$role = new RoleController();

if(isset($_POST['accion'])){
	$accion = $_POST['accion'];
	switch($accion){
		case 'Insertar':
			if( isset($_POST['nameRole'])  && !empty($_POST['nameRole']) ){

				$nameRole = $_POST['nameRole'];

				$new_role = array(
					'idRole' => 0,
                    'nameRole' => $nameRole,
                    'idStatus' => 1
				);
                $role->set($new_role);
		
				header('Location: ../Role.php');

			}else{
				echo 'Campos vacios no se puede realizar la inserción';
			}
		break;

		case 'Consultar':
			Consultar();
		break;

		case 'Actualizar':

			if( (isset($_POST['idRoleUpdate']) && !empty($_POST['idRoleUpdate'])) && (isset($_POST['nameRoleUpdate']) && !empty($_POST['nameRoleUpdate'])) )
			{
				$idRoleUpdate = $_POST['idRoleUpdate'];
                $nameRoleUpdate = $_POST['nameRoleUpdate'];
                $idStatusUpdate = $_POST['idStatusUpdate'];
				
				// echo "Id del status $idStatusUpdate  <br>
				// 	nuevo nombre estado $nameStatusUpdate <br>";

				$update_role = array(
					'idRole' => $idRoleUpdate,
                    'nameRole' => $nameRoleUpdate,
                    'idStatus' => $idStatusUpdate 
				);
				//print_r($update_role);
				
				$role->set($update_role);

				header('Location: ../Role.php');
				
			}else{
				echo "Campos vacios no se puede realizar la actualización";
			}
		break;

		
		case 'Eliminar':
			if(isset($_POST['idRoleDelete'])  && !empty($_POST['idRoleDelete'])   ){
				
				$idRoleDelete = $_POST['idRoleDelete'];
				//echo "$idStatusDelete";
				$role->del($idRoleDelete); 

				header('Location: ../Role.php');
			}else{
				echo 'Campos vacios no se puede realizar la eliminación';
			}

		break;
	}
}


function Consultar(){
	$role = new RoleController();
	$role_data = $role->get();
			//var_dump($role_data);
			$num_role = count($role_data);
?>
			
			<h2>Consulta de roles</h2>
			<?php echo "<h3>Número de Registros: $num_role </h3>"; ?>
				<table>
				<tr>
					<th>ID Role</th>
					<th>Name Role</th>
                    <th>ID Status</th>
				</tr>
<?php 
			for ($n = 0; $n < count($role_data); $n++) {
				
				echo '<tr>
					<td>'.$role_data[$n]['idRole'].'</td>
                    <td>'.$role_data[$n]['nameRole'].'</td>
                    <td>'.$role_data[$n]['idStatus'].'</td>
				</tr>';
			}
				echo '</table>';
}

function dropDownStatus()
{
    $role = new RoleController();
	$resultado = $role->showStatus();
	
        if ($resultado != 'error') {

            foreach ($resultado as $Status) {
			// 	print_r($resultado[$n]['idStatus']);
			//    print_r($resultado[$n]['nameStatus']);
			//echo $Estado['idStatus'] . $Estado['nameStatus'] ;
			   echo "<option value='". $Status['idStatus'] ."'> " . $Status['nameStatus'] . "  </option>";
           
			}
        } else {
            echo "<p>No hay estados en BD</p>";
        }
}
