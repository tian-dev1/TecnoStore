<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./public/img/IconoBlack.png" />
    <link rel="stylesheet" href="./public/css/SubCategory.css">
    <title>Sub Categorías</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Gestión de sub categorías</h1>
        </div>
        <div class="divShow">
            <form class="formShow" method="POST" action="views/SubCategoryView.php">
                <?php
                    require(__DIR__.'/views/SubCategoryView.php');
                    Consultar();
                ?>
            </form>
        </div>
        
        <div class="formsActions">
            <form class="formInsert" method="POST" action="views/SubCategoryView.php">
                <h2>Insertar Sub Categoría:</h2>
                <div class="row">
                    <input type="text" name="nameSubCategory" placeholder="Nombre sub categoria">
                    <select name="idCategory">
                        <option value="" selected>Seleccione id de sub categoría...</option>
                        <?php dropDownCategory(); ?>
                    </select>
                </div>
                <div class="row">
                    <textarea name="descriptionSubCategory" placeholder="Descripción sub categoria">Sin descripción</textarea>    
                </div>
                <input type="submit" value="Insertar" name="accion">
            </form>
            <form class="formUpdate" method="POST" action="views/SubCategoryView.php">
                <h2>Actualizar Sub Categoria:</h2>
                <div class="row">
                    <select name="idSubCategory">
                        <option value="" selected>Seleccione id de sub categoría...</option>
                        <?php getSubCategoryId(); ?>
                    </select>
                    <input type="text" name="nameSubCategory" placeholder="Nombre sub categoria">
                </div>
                <div class="row">
                <textarea name="descriptionSubCategory" placeholder="Descripción sub categoria"></textarea>
                </div>
                <div class="row">
                    <select name="idCategory">
                        <option value="" selected>Seleccione id de categoría...</option>
                        <?php dropDownCategory(); ?>
                    </select>
                    <select name="idStatus">
                        <?php dropDownStatus(); ?>
                    </select>
                </div>
                    <input type="submit" value="Actualizar" name="accion">
            </form>
            <form class="formDelete" method="POST" action="views/SubCategoryView.php">
                <div class="sub-container">
                    <h2>Eliminar Sub Categoria:</h2>
                    <div class="row">
                        <select name="idSubCategoryDelete">
                            <option value="" selected>Seleccione id de sub categoría....</option>
                            <?php getSubCategoryId(); ?>
                        </select>
                        <input type="submit" value="Eliminar" name="accion">
                    </div>
                </div>   
            </form>
        </div>
        <div class="title">
            <h2>Footer</h2>
        </div>
    </div>

    



    
        
</body>
</html>