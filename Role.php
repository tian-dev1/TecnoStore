<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/Category.css">
    <title>Vista</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Gestión de roles</h1>
        </div>
        <form class="formShow" method="POST" action="views/RoleView.php">
            <?php
                require(__DIR__.'/views/RoleView.php');
                Consultar();
            ?>
        </form>
        <form class="formInsert" method="POST" action="views/RoleView.php">
            <h2>Insertar rol:</h2>
            <input type="text" name="nameRole" placeholder="nombre rol">
            <input type="submit" value="Insertar" name="accion">     
        </form>
        <form class="formDelete" method="POST" action="views/RoleView.php">
            <div class="sub-container">
                <h2>Eliminar rol</h2>
                <input type="number" name="idRoleDelete" placeholder="id rol">
                <input type="submit" value="Eliminar" name="accion">
            </div>   
        </form>
        <form class="formUpdate" method="POST" action="views/RoleView.php">
            <h2>Actualizar rol:</h2>
            <input style="margin: 20px;" type="number" name="idRoleUpdate" placeholder="id estado">
            <input style="margin: 20px;" type="text" name="nameRoleUpdate" placeholder="nombre estado">
            <select name="idStatusUpdate">
                <?php desplegableEstado(); ?>
            </select>
            <input style="margin: 20px;" type="submit" value="Actualizar" name="accion">
        </form>
    </div>
        
</body>
</html>