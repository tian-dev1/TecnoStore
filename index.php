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
                <!-- <div class="header-center">
                    <a href="#Computadores">Computadores</a>
                    <a href="#Tablets">Tablets</a>
                    <a href="#Moviles">Moviles</a>
                    <a href="#Relojes">Relojes</a>
                </div> -->
                <div class="header-rigth">
                    <a href="#contact" >Iniciar sesión</a>
                    <a href="#about">Registrarse</a>
                    <a href="#about">Contactenos</a>
                </div>
            </div>
        </header>
        
        <div class="jumbotron">
            <h1 class="title-page">Bienvenido a TecnoStore!</h1>
            <p class="jumbotron-info">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam repellendus consequuntur animi debitis
                hic. Omnis ad dolorum similique nam eius cupiditate error earum impedit maiores? Quos cumque veniam
                architecto nostrum dolorem earum non dolorum at, nesciunt voluptates tenetur repudiandae asperiores vero
                ipsam dignissimos ullam officiis maiores eligendi placeat assumenda consectetur.
            </p>
        </div>
        <nav class="nav" style="padding: 10px 0;">
                <div class="nav-left">
                <a href="#Computadores">Computadores</a>
                <a href="#Tablets">Tablets</a>
                <a href="#Moviles">Moviles</a>
                <a href="#Relojes">Relojes</a>
                </div>
            <div class="nav-rigth">
                <input class="inputSearch" type="text" placeholder="Buscar producto">
            </div>
        </nav>
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
                            <h4 class="title-products">Computador Asus x507-5</h4>
                            <p class="items-products">Asus</p>   
                            <p class="items-products">Portatil Asus x507-5 8GB Windows 10 1TB 21 5" Azul</p>   
                            <p class="items-products"><b>1'300.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton"  type="submit" value="Comprar">
                            </div>
                            
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/PortatilHP.png" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Portátil HP 14-ax104la</h4>
                            <p class="items-products">Asus</p>   
                            <p class="items-products">Computador Portátil HP 14" Pulgadas Intel Celeron - 4 GB Ram - Disco Duro 64 Gb - Azul</p>   
                            <p class="items-products"><b> 1'300.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/portatil-asus-x407ua.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Portátil Asus x407ua-bv385</h4>
                            <p class="items-products">Asus</p>   
                            <p class="items-products">Portátil Asus (x407ua-bv385) 14" Pulgadas Intel Core I3</p>   
                            <p class="items-products"><b> 1'100.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>
                        </form> 
                    </div>


                    <div class="card">
                        <img class="img-product" src="./public/img/Tablet2.jpeg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Tablet Lenovo</h4>
                            <p class="items-products">Lenovo</p>   
                            <p class="items-products">Tablet Lenovo Tab M10 TB-X505F 10.1 pulgadas</p>   
                            <p class="items-products"><b> 650.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/XiaomiMT9.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Xiaomi mi 9t PRO</h4>
                            <p class="items-products">Xiaomi</p>   
                            <p class="items-products">Xiaomi mi 9t PRO 128GB / 6GB RAM </p>   
                            <p class="items-products"><b> 1'100.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>    
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/IphoneS.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Apple iPhone X </h4>
                            <p class="items-products">IPhone</p>   
                            <p class="items-products">Apple iPhone X 64GB Gris Espacial</p>   
                            <p class="items-products"><b> 1'990.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>
                        </form> 
                    </div>
                    <div class="card">
                        <img class="img-product" src="./public/img/relog1.jpg" alt="Imagen de producto">
                        <form class="information-products" action="#">
                            <h4 class="title-products">Reloj inteligente </h4>
                            <p class="items-products">Gadgets & fun</p>   
                            <p class="items-products">Reloj celular Bluetooth Reloj inteligente </p>   
                            <p class="items-products"><b> 990.000 </b></p>
                            <div class="buttons-products">
                                <input type="number"  min="1" max="10" value="1" style="width: 50px;">
                                <input class="buyButton" type="submit" value="Comprar">
                            </div>
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
                <div>
                    <p><img src="./public/img/web.png" width="20px" alt="Logo White Geek Kingdom"> Online customer service hours: Monday to Friday 7:30 a.m. to 2:45 p.m. </p>
                    <p><img src="./public/img/home.png" width="20px" alt="Logo White Geek Kingdom"> Store Address: 251 E Huron St, Chicago, IL 60611, United States</p>
                    <p><img src="./public/img/time.png" width="20px" alt="Logo White Geek Kingdom"> From Monday to Saturday 10:00 a.m. to 2:00 p.m. / 4:30 p.m. to 8:30 p.m. </p>
                    <p><img src="./public/img/phone.png" width="20px" alt="Logo White Geek Kingdom"> +13126817074 // +13127660314 </p>
                    <p><img src="./public/img/email.png" width="20px" alt="Logo White Geek Kingdom"> tiancamilo59@gmail.com </p>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/" target="_blank" class="social-link facebook"></a>
                    <a href="https://www.instagram.com/?hl=es-la" target="_blank" class="social-link instagram"></a>
                    <a href="https://twitter.com/" target="_blank" class="social-link twitter"></a>
                    <a href="https://web.whatsapp.com/" target="_blank" class="social-link whatsapp"></a>
                    <a href="https://github.com/tiancamilo01" target="_blank" class="social-link github"></a>
                </div>
                    
            </div>
            <div class="footer-rigth">
                
                <div>
                    <p><img class="imgLogo" src="./public/img/LogoWhite.png" width="150px" alt="Logo White Geek Kingdom"> &nbsp; ©2020 Cristian Camilo Arevalo Perdomo </p>
                </div>
                <div>
                    <p>Designed with ❤ by <a style="color: white;" href="https://github.com/tiancamilo01"> @tiancamilo01</a></p>
                </div>
            </div>
        </footer>
    </div>
    <script src="./public/js/script.js"></script>
</body>

</html>