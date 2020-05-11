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
            <h1>Gestión de estados</h1>
        </div>
        <form class="formShow" method="POST" action="views/StatusView.php">
            <?php
                require(__DIR__.'/views/StatusView.php');
                Consultar();
            ?>
        </form>
        <form class="formInsert" method="POST" action="views/StatusView.php">
            <h2>Insertar estatus:</h2>
            <input type="text" name="nameStatus" placeholder="nombre estado">
            <input type="submit" value="Insertar" name="accion">     
        </form>
        <form class="formDelete" method="POST" action="views/StatusView.php">
            <div class="sub-container">
                <h2>Eliminar estatus</h2>
                <input type="number" name="idStatusDelete" placeholder="id estado">
                <input type="submit" value="Eliminar" name="accion">
            </div>   
        </form>
        <form class="formUpdate" method="POST" action="views/StatusView.php">
            <h2>Actualizar estatus:</h2>
            <input style="margin: 20px;" type="number" name="idStatusUpdate" placeholder="id estado">
            <input style="margin: 20px;" type="text" name="nameStatusUpdate" placeholder="nombre estado">
            <input style="margin: 20px;" type="submit" value="Actualizar" name="accion">
        </form>
    </div>
        
</body>
</html>