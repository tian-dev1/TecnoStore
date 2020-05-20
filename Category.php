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
            <h1>Gestión de categorias</h1>
        </div>
        <form class="formShow" method="POST" action="views/CategoryView.php">
            <?php
                require(__DIR__.'/views/CategoryView.php');
                Consultar();
            ?>
        </form>
        <form class="formInsert" method="POST" action="views/CategoryView.php">
            <h2>Insertar Categoria:</h2>
            <input type="text" name="nameCategory" placeholder="Nombre categoria">
            <input type="text" name="descriptionCategory" placeholder="Descripción categoria" value="Sin descripción">
            <input type="hidden" name="idStatus" value="1">
            <input type="submit" value="Insertar" name="accion">     
        </form>
        <form class="formDelete" method="POST" action="views/CategoryView.php">
            <div class="sub-container">
                <h2>Eliminar Categoria:</h2>
                <input type="number" name="IdCategoryDelete" placeholder="ID Categoria">
                <input type="submit" value="Eliminar" name="accion">
            </div>   
        </form>
        <form class="formUpdate" method="POST" action="views/CategoryView.php">
            <h2>Actualizar Categoria:</h2>
            <input style="margin: 20px;" type="number" name="idCategory" placeholder="id estado">
            <input style="margin: 20px;" type="text" name="nameCategory" placeholder="Nombre categoria">
            <input style="margin: 20px;" type="text" name="descriptionCategory" placeholder="Descripción">
            <select name="idStatus">
                <?php dropDownStatus(); ?>
            </select>
           <input style="margin: 20px;" type="submit" value="Actualizar" name="accion">
        </form>
    </div>

    



    
        
</body>
</html>