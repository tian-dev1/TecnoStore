<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./public/img/IconoBlack.png" />
    <link rel="stylesheet" href="./public/css/Category.css">
    <title>Estados</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Gestión de estados</h1>
        </div>
        <div class="divShow">
            <form class="formShow" method="POST" action="views/StatusView.php">
                <?php
                    require(__DIR__.'/views/StatusView.php');
                    Consultar();
                ?>
            </form>
        </div>
        <div class="formsActions">
            <form class="formInsert" method="POST" action="views/StatusView.php">
                <h2>Insertar estado:</h2>
                <div class="row">
                    <input type="text" name="nameStatus" placeholder="Nombre estado">
                    <input type="submit" value="Insertar" name="accion">  
                </div> 
            </form>
            <form class="formDelete" method="POST" action="views/StatusView.php">
                <div class="sub-container">
                    <h2>Eliminar estado:</h2>
                    <div class="row">
                        <select name="idStatusDelete">
                            <option value="" selected>Seleccione id del estado...</option>
                            <?php getStatusId(); ?>
                        </select>
                        <input type="submit" value="Eliminar" name="accion">
                    </div>
                </div>   
            </form>
            <form class="formUpdate" method="POST" action="views/StatusView.php">
                <h2>Actualizar estado:</h2>
                <div class="row">
                    <select name="idStatus">
                        <option value="" selected>Seleccione id del estado...</option>
                        <?php getStatusId(); ?>
                    </select>
                    <input type="text" name="nameStatus" placeholder="Nombre estado">
                </div>
                <div class="row">
                    <input type="submit" value="Actualizar" name="accion">
                </div>
            </form>
        </div>
    </div>
        
</body>
</html>