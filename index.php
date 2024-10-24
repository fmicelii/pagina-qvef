<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="website icon" type="png" href="img/logo_negro_icono_QVEF.png">
    <!-- Fuentes e iconos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Que Viva El Futbol</title>
</head>
<body>
    <div class="pantallainicialcelu">
        <div class="iniciocelu">
            <h1>QUE VIVA EL FUTBOL</h1>
            <div class="flechita">
                <a href="#headcelu" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
    </div>
    <div class="pantallainicialpc">
        <div class="iniciopc">
            <h1>QUE VIVA EL FUTBOL</h1>
            <div class="flechita">
                <a href="#headpc" class="material-symbols-outlined">keyboard_double_arrow_down</a>
            </div>
        </div>
    </div>

    <div class="todo">
        <header>
            <div class="headcelu" id="headcelu">
                <div class="izquierdaHC">
                    <span class="material-symbols-outlined">menu</span>
                    <span class="material-symbols-outlined">search</span>
                </div>

                <div class="medioHC">
                    <a href="index.html"><img class="logohead" src="img/logo_negro_QVEF.png" alt=""></a>
                </div>

                <div class="derechaHC">

                    <div class="perfildesplegable">
                        <span class="material-symbols-outlined">account_circle</span>
                        <ul class="perfilcategorias">
                            <li><a href="log/form.html" rel="noreferrer" >> Registrarse</a></li>
                            <li><a href="log/login.html">> Logearse</a></li>
                        </ul>
                    </div>
                    <span class="material-symbols-outlined">local_mall</span>
                </div>
            </div>
<!-- -------------------HEADPC----------------------- -->
            <div class="headpc" id="headpc">
                <div class="izquierdaHP">
                    <a href="index.html"><img class="logohead" src="img/logo_negro_QVEF.png" alt=""></a>
                </div>
                
                <div class="medioHP">
                    <div class="contenedorbusqueda">
                        <input type="search" placeholder="Que buscas?">
                        <button type="submit">
                        <span class="material-symbols-outlined">search</span>
                    </div>
                </div>

                <div class="derechaHP">
                    <?php
                    if(isset($_SESSION["nombre"])){
                        echo $_SESSION["nombre"];
                        ?>
                        <div class="perfildesplegable">
                            <span class="material-symbols-outlined">account_circle</span>
                        </div>
                   <?php }else{
                    ?>
                    
                    <div class="perfildesplegable">
                        <span class="material-symbols-outlined">account_circle</span>
                        <ul class="perfilcategorias">
                            <li><a href="log/form.html">> Registrarse</a></li>
                            <li><a href="log/login.html">> Logearse</a></li>
                        </ul>
                    </div>
                    <?php }
                    ?>
                    <div class="bolsa-compra">
                        <span class="material-symbols-outlined">local_mall</span>
                    </div>
                </div>

            </div>
<!-- -------------------HEADPC----------------------- -->
        </header>

        <main>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                    <div class="slide">
                        <p>6 CUOTAS SIN INTERES!</p>
                    </div>
                </div>
            </div>
            
            <div id="botines-destacados" class="destacados">
                <h3>BOTINES DESTACADOS</h3>
                <div class="carousel">
                    <div class="tarjeta">
                        <a href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                        <div class="tarjetainfo">
                            <h4>Nike Phantom</h4>
                            <p class="desc">botines rojos</p>
                            <p>$30.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/botines_rosas_future.avif" alt="botin puma future">
                        <div class="tarjetainfo">
                            <h4>Puma Future 7</h4>
                            <p class="desc">botines rosas</p>
                            <p>$109.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/botines_verdes_mercurial.jpg" alt="botin nike mercurial">
                        <div class="tarjetainfo">
                            <h4>Nike Mercurial</h4>
                            <p class="desc">botines verdes</p>
                            <p>$85.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/botines_blancos_copa.jfif" alt="botin">
                        <div class="tarjetainfo">
                            <h4>Adidas Copa</h4>
                            <p class="desc">botines blancos</p>
                            <p>$68.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/botines_negros_borussia.jfif" alt="botin puma borussia">
                        <div class="tarjetainfo">
                            <h4>Puma Borussia</h4>
                            <p class="desc">botines maradona</p>
                            <p>$10.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/botines_grises_cosmic.webp" alt="botin umbro cosmic">
                        <div class="tarjetainfo">
                            <h4>Umbro Cosmic</h4>
                            <p class="desc">botines mati</p>
                            <p>$100.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/botines.jpg" alt="botin">
                        <div class="tarjetainfo">
                            <h4>Botines blancos</h4>
                            <p class="desc">botines malardos</p>
                            <p>$200.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-varios">    
                <div class="productos-varios">
                    <div class="product">
                        <img src="img/botines_f50.jpeg" alt="botines f50">
                    </div>
                    <div class="product">
                        <img src="img/botin_naranja.webp" alt="botines botin_naranja">
                    </div>
                    <div class="product">
                        <img src="img/botines_verdes_mercurial2.jpg" alt="botines azules">
                    </div>
                    <div class="product">
                        <img src="img/botines_nike_mercurial.webp" alt="botines azules">
                    </div>
                </div>
            </div>
            <div id="camisetas-destacadas" class="destacados">
                <h3>CAMISETAS DESTACADAS</h3>
                <div class="carousel">
                    <div class="tarjeta">
                        <img src="img/camiseta_boca_lolo.jpg" alt="camiseta boca horrible">
                        <div class="tarjetainfo">
                            <h4>Boca Alternativa</h4>
                            <p class="desc">Camiseta boca</p>
                            <p>$3.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/camiseta_river_fran.jpg" alt="camiseta river">
                        <div class="tarjetainfo">
                            <h4>River Training</h4>
                            <p class="desc">Camiseta river  </p>
                            <p>$100.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/camiseta_argentina.jpg" alt="camiseta argentina">
                        <div class="tarjetainfo">
                            <h4>Nike Mercurial</h4>
                            <p class="desc">botines verdes</p>
                            <p>$85.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                            <img src="img/camiseta_racing.jpg" alt="camiseta racing">
                        <div class="tarjetainfo">
                            <h4>Adidas Copa</h4>
                            <p class="desc">botines blancos</p>
                            <p>$68.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/camiseta_barcelona.jpg" alt="camiseta barcelona">
                        <div class="tarjetainfo">
                            <h4>Puma Borussia</h4>
                            <p class="desc">botines maradona</p>
                            <p>$10.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/camiseta_city.jpg" alt="camiseta manchester ciry">
                        <div class="tarjetainfo">
                            <h4>Umbro Cosmic</h4>
                            <p class="desc">botines mati</p>
                            <p>$100.000</p>
                        </div>
                    </div>
                    <div class="tarjeta">
                        <img src="img/camiseta_defe.jpg" alt="camiseta defensores">
                        <div class="tarjetainfo">
                            <h4>Botines blancos</h4>
                            <p class="desc">botines malardos</p>
                            <p>$200.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-neymar">
                <h2>VIVE LA EXPERIENCIA</h2>
                <h3>DE LA COMODIDAD</h3>
                <a href="https://ar.puma.com/?utm_source=GGL&utm_medium=BS&gad_source=1&gclid=Cj0KCQjwveK4BhD4ARIsAKy6pMLytKaFUMlky1WqANf08one1GZNKHTbPOjd9PZvPOujvhd_NmetFtsaAvYJEALw_wcB"><img src="img/puma_logo.png" alt="logo de puma"></a>
            </div>
            
            <div id="productos" class="general">
                <h3>NUESTROS PRODUCTOS</h3>
                    <section id="tarjetas">
                        <div class="tarjeta1">
                            <a class="tarjeta-imagen" href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                            <div class="tarjetainfo">
                                <h4>Nike Phantom</h4>
                                <p class="desc">botines rojos</p>
                                <p>$30.000</p>
                            </div>
                        </div>
                        <div class="tarjeta1">
                            <a class="tarjeta-imagen" href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                            <div class="tarjetainfo">
                            <h4>Nike Phantom</h4>
                            <p class="desc">botines rojos</p>
                            <p>$30.000</p>
                        </div>
                    </div>
                    <div class="tarjeta1">
                        <a class="tarjeta-imagen" href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                        <div class="tarjetainfo">
                            <h4>Nike Phantom</h4>
                            <p class="desc">botines rojos</p>
                            <p>$30.000</p>
                        </div>
                    </div>
                    <div class="tarjeta1">
                        <a class="tarjeta-imagen" href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                        <div class="tarjetainfo">
                            <h4>Nike Phantom</h4>
                            <p class="desc">botines rojos</p>
                            <p>$30.000</p>
                        </div>
                    </div>
                    <div class="tarjeta1">
                        <a class="tarjeta-imagen" href="producto.html" target="_blank"><img src="img/botines_rojos_phantom1.jpeg" alt="botin nike phantom"></a>
                        <div class="tarjetainfo">
                            <h4>Nike Phantom</h4>
                            <p class="desc">botines rojos</p>
                            <p>$30.000</p>
                        </div>
                    </div>
                </section>
            </div>
            
        </div> <!--DIV TODO-->
        </main>
    <footer>
        <div class="footer">
            <div class="footer-container">
                <div class="footer-row">
                    <div class="footer-links">
                        <h4>Aclaracion</h4>
                        <div class="aclaracion">
                            <p>En esta página, la presentación de marcas de ropa de fútbol se utiliza con fines experimentales y educativos.
                            No buscamos asociarnos oficialmente con ninguna marca en particular.</p>
                        </div>
                    </div>
                    <div class="footer-links">
                        <!-- <h4>ejemplo</h4>
                        <ul>
                            <li><p>anashe</p></li>
                            <li><p>asssssssssss</p></li>
                            <li><p>asi es</p></li>
                            <li><p>texto ass</p></li>
                        </ul> -->
                        <h4>índice</h4>
                        <ul>
                            <li><a href="#botines-destacados">Botines Destacados</a></li>
                            <li><a href="#camisetas-destacadas">Camisetas Destacadas</a></li>
                            <li><a href="#productos">Nuestros Productos</a></li>
                        </ul>
                    </div>
                    <div class="footer-links">
                        <h4>Contacto</h4>
                        <ul>
                            <li><p><a href="mailto:elcorreoquequieres@correo.com">franmiceli08@gmail.com</a></p></li>
                            <a href="tel:+541162351561">+541162351561</a>
                            <li><p><a href="mailto:elcorreoquequieres@correo.com">tabuadalorenzo88@gmail.com</a></p></li>
                            <a href="tel:+541123711344">+541123711344</a>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-contact">
            <span class="material-symbols-outlined psychology">psychology</span>
            <ul class="gallery-ig">
                <li><a href="https://www.instagram.com/franmicelii/">Francisco Miceli</a></li>
                <li><a href="https://www.instagram.com/lolotabuada_/">Lorenzo Tabuada</a></li>
            </ul>
        </div>
        <div class="sub-footer2">
            <p>Copyright© 2024 Que Viva El Futbol. Todos los derechos reservados. <br><a href="t&c.html">Terminos y Condiciones</a></p>
        </div>
    </footer>

</body>
</html>