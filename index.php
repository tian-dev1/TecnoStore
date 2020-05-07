<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./public/img/IconoBlack.png" />
    <link rel="stylesheet" href="./public/css/style.css">
    <title>TecnoStore</title>
</head>

<body>
    <div class="container">
        <header style="padding: 10px 0;">
            <div class="header">
                <div class="header-left">
                    <img src="./public/img/LogoBlack.png" alt="TecnoStore Logo">
                </div>
                <div class="header-center">
                    <a href="#Computadores">Computadores</a>
                    <a href="#Tablets">Tablets</a>
                    <a href="#Moviles">Moviles</a>
                    <a href="#Relojes">Relojes</a>
                </div>
                <div class="header-rigth">
                    <a href="#contact" >Iniciar sesión</a>
                    <a href="#about">Registrarse</a>
                    <a href="#about">Contactenos</a>
                </div>
            </div>
        </header>
        <!-- <nav class="nav" style="padding: 10px 0;">
            <div class="nav-left">
                <h4 style="margin-left: 10px;">Bienvenidos a TecnoStore tienda número 1 de tecnología</h4>
            </div>
            <div class="nav-rigth">
                <a href="#Computadores">Computadores</a>
                <a href="#Tablets">Tablets</a>
                <a href="#Moviles">Moviles</a>
                <a href="#Relojes">Relojes</a>
            </div>
        </nav> -->
        <div class="jumbotron">
            <h1>Bienvenido a TecnoCenter</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam repellendus consequuntur animi debitis
                hic. Omnis ad dolorum similique nam eius cupiditate error earum impedit maiores? Quos cumque veniam
                architecto nostrum dolorem earum non dolorum at, nesciunt voluptates tenetur repudiandae asperiores vero
                ipsam dignissimos ullam officiis maiores eligendi placeat assumenda consectetur.</p>
        </div>
        <div class="container-carrousel">
            <div class="carousel">
                <button class="buttons" id="retroceder"><img src="./public/img/left-arrow.png" alt=""></button>
                <div id="imagen"></div>
                <button class="buttons" id="avanzar"><img src="./public/img/next.png" alt=""></button>
            </div>
            <div class="controles">
                <button style="margin-right: 20px; padding: 5px;" class="buttons" id="play"><img src="./public/img/play.png" width="20px" alt=""></button>
                <button style="padding: 5px;" class="buttons" id="stop" disabled><img src="./public/img/pause.png" width="20px" alt=""></button>
            </div>
        </div>
        <div class="container-accordion">
            <button class="accordion active" id="Ofertas">Ofertas</button>
            <div class="panel active" style="display: block;">
                <div class="panel-cards">
                    <div class="card">
                        <img class="img-product" src="./public/img/asus-x507-5.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Computador Asus x507-5</h4>
                            <p>Asus</p>   
                            <p>Portatil Asus x507-5 8GB Windows 10 1TB 21 5" Azul</p>   
                            <p>1'300.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/PortatilHP.png" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Portátil HP 14-ax104la</h4>
                            <p class="items-products">Asus</p>   
                            <p class="items-products">Computador Portátil HP 14" Pulgadas Intel Celeron - 4 GB Ram - Disco Duro 64 Gb - Azul</p>   
                            <p class="items-products">1'300.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/portatil-asus-x407ua.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Portátil Asus x407ua-bv385</h4>
                            <p class="items-products">Asus</p>   
                            <p class="items-products">Portátil Asus (x407ua-bv385) 14" Pulgadas Intel Core I3</p>   
                            <p class="items-products">1'100.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>


                    <div class="card">
                        <img class="img-product" src="./public/img/Tablet2.jpeg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Tablet Lenovo</h4>
                            <p>Lenovo</p>   
                            <p>Tablet Lenovo Tab M10 TB-X505F 10.1 pulgadas</p>   
                            <p>650.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/XiaomiMT9.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Xiaomi mi 9t PRO</h4>
                            <p class="items-products">Xiaomi</p>   
                            <p class="items-products">Xiaomi mi 9t PRO 128GB / 6GB RAM </p>   
                            <p class="items-products">1'100.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/IphoneS.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Apple iPhone X </h4>
                            <p class="items-products">IPhone</p>   
                            <p class="items-products">Apple iPhone X 64GB Gris Espacial</p>   
                            <p class="items-products">1'990.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/relog1.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4>Reloj inteligente </h4>
                            <p class="items-products">Gadgets & fun</p>   
                            <p class="items-products">Reloj celular Bluetooth Reloj inteligente </p>   
                            <p class="items-products">990.000</p>
                            <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                            <input type="submit" value="Comprar">
                        </form> 
                    </div>

                    
                </div>
            </div>
            <button class="accordion" id="Computadores">Computadores</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>

            </div>

            <button class="accordion" id="Tablets">Tablets</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion" id="Moviles">Moviles</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion" id="Relojes">Relojes</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
        <footer class="footer">
            <div class="footer-left">
                <img src="./public/img/LogoWhite.png" alt="TecnoStore Logo">
            </div>
            <div class="footer-rigth">
                <a class="active" href="#home">Contacta con nosotros</a>
                <a href="#contact">Iniciar sesión</a>
                <a href="#about">Registrarse</a>
            </div>
        </footer>
    </div>
    <script src="./public/js/script.js"></script>
</body>

</html>