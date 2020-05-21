<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/Category.css">
    <link rel="icon" type="image/png" href="./public/img/IconoBlack.png" />
    <title>Categorías</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1>Gestión de categorías</h1>
        </div>
        <div class="divShow">
            <form class="formShow" method="POST" action="views/CategoryView.php">
                <?php
                    require(__DIR__.'/views/CategoryView.php');
                    Consultar();
                ?>
            </form>
        </div>
        <div class="formsActions">
            <form class="formInsert" method="POST" action="views/CategoryView.php">
                <h2>Insertar Categoría:</h2>
                <div class="row">
                    <input type="text" name="nameCategory" placeholder="Nombre categoria">
                    <input type="text" name="descriptionCategory" placeholder="Descripción categoria" value="Sin descripción">  
                </div>
                <input type="submit" value="Insertar" name="accion">     
            </form>
            <form class="formUpdate" method="POST" action="views/CategoryView.php">
                <h2>Actualizar Categoría:</h2>
                <div class="row">
                    <select name="idCategory">
                        <option value="" selected>Seleccione id de categoría...</option>
                        <?php getCategoryId(); ?>
                    </select>
                    <input type="text" name="nameCategory" placeholder="Nombre categoría">
                </div>
                <div class="row">
                    <input type="text" name="descriptionCategory" placeholder="Descripción categoría">
                    <select name="idStatus">
                        <?php dropDownStatus(); ?>
                    </select>    
                </div>
                
            <input type="submit" value="Actualizar" name="accion">
            </form>
            <form class="formDelete" method="POST" action="views/CategoryView.php">
                <div class="sub-container">
                    <h2>Eliminar Categoria:</h2>
                    <div class="row">
                        <select name="idCategoryDelete">
                            <option value="" selected>Seleccione id de categoría...</option>
                            <?php getCategoryId(); ?>
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