<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./public/img/IconoBlack.png" />
    <link rel="stylesheet" href="./public/css/Category.css">
    <title>Roles</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Gestión de roles</h1>
        </div>
        <div class="divShow">
            <form class="formShow" method="POST" action="views/RoleView.php">
                <?php
                    require(__DIR__.'/views/RoleView.php');
                    Consultar();
                ?>
            </form>
        </div>
        <div class="formsActions">
            <form class="formInsert" method="POST" action="views/RoleView.php">
                <h2>Insertar rol:</h2>
                <div class="row">
                    <input type="text" name="nameRole" placeholder="Nombre rol">
                    <input type="submit" value="Insertar" name="accion"> 
                </div>
                    
            </form>
            <form class="formDelete" method="POST" action="views/RoleView.php">
                <div class="sub-container">
                    <h2>Eliminar rol</h2>
                    <div class="row">
                        <select name="idRoleDelete">
                            <option value="" selected>Seleccione id del rol...</option>
                            <?php getRoleId(); ?>
                        </select>
                        <input type="submit" value="Eliminar" name="accion"> 
                    </div>
                    
                </div>   
            </form>
            <form class="formUpdate" method="POST" action="views/RoleView.php">
                <h2>Actualizar rol:</h2>
                <div class="row">
                    <select name="idRole">
                        <option value="" selected>Seleccione id del rol...</option>
                        <?php getRoleId(); ?>
                    </select>
                    <input type="text" name="nameRole" placeholder="Nombre rol">
                </div>
                <div class="row">
                    <select name="idStatus">
                        <?php dropDownStatus(); ?>
                    </select>
                    <input type="submit" value="Actualizar" name="accion">   
                </div>
            </form>
        </div>
        <div class="title">
            <h2>Footer</h2>
        </div> 
    </div>
        
</body>
</html>