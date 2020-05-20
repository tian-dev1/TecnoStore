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
            <h1>Gestión de sub categorias</h1>
        </div>
        <form class="formShow" method="POST" action="views/SubCategoryView.php">
            <?php
                require(__DIR__.'/views/SubCategoryView.php');
                Consultar();
            ?>
        </form>
        <form class="formInsert" method="POST" action="views/SubCategoryView.php">
            <h2>Insertar Sub Categoria:</h2>
            <input type="text" name="nameSubCategory" placeholder="Nombre sub categoria">
            <input type="text" name="descriptionSubCategory" placeholder="Descripción sub categoria" value="Sin descripción">
            <input type="number" name="idCategory" placeholder="Id categoria">
            <input type="submit" value="Insertar" name="accion">     
        </form>
        <form class="formDelete" method="POST" action="views/SubCategoryView.php">
            <div class="sub-container">
                <h2>Eliminar Sub Categoria:</h2>
                <input type="number" name="idSubCategoryDelete" placeholder="ID Sub Categoria">
                <input type="submit" value="Eliminar" name="accion">
            </div>   
        </form>
        <form class="formUpdate" method="POST" action="views/SubCategoryView.php">
            <h2>Actualizar Sub Categoria:</h2>
            <input style="margin: 20px;" type="number" name="idSubCategory" placeholder="Id sub estado">
            <input style="margin: 20px;" type="text" name="nameSubCategory" placeholder="Nombre categoria">
            <input style="margin: 20px;" type="text" name="descriptionSubCategory" placeholder="Descripción">
            <select name="idCategory">
                <?php dropDownCategory(); ?>
            </select>
            <select name="idStatus">
                <?php dropDownStatus(); ?>
            </select>
           <input style="margin: 20px;" type="submit" value="Actualizar" name="accion">
        </form>
    </div>

    



    
        
</body>
</html>