<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">
    <link rel="stylesheet" href="css/CANVASweb.css">
    <link rel="stylesheet" href="css/galeria.css">
    
    <!-- Attach necessary JS -->
    <script type="text/javascript" src="jquery/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.orbit-1.2.3.min.js"></script>

    <!--[if IE]>
             <style type="text/css">
                 .timer { display: none !important; }
                 div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
            </style>
        <![endif]-->

    <!-- Run the plugin -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit();
        });
    </script>
</head>

<body><!----------------------------------- Menu de desplegable------------------>
    <?php include('modulos/header.php') ?>
    <?php include('modulos/slide.php') ?>
    <?php include('modulos/social.php') ?>


    <section id="content">
        <section id="albun"> <!-- ------formulario de galeria------------------->
            <!---------ejemplo1-->
            <div class="contenedor-img ejemplo-1">
                <img src="img/gato2.jpg" />
                <div class="mascara">
                    <h2>Ejemplo 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo2-->
            <div class="contenedor-img ejemplo-2">
                <img src="img/animales/a (124).jpg" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Ejemplo 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!------jemplo3------->
            <div class="contenedor-img ejemplo-3">
                <img src="img/animales/a (1).jpeg" />
                <div class="mascara">
                    <h2>Hover Effects</h2>
                    <p>Efectos hover para tus imágenes, portafolio, galerias.</p>
                    <a href="#" class="link">Ver más</a>
                </div>
            </div>
            <!---------ejemplo4-->
            <div class="contenedor-img ejemplo-4">
                <img src="img/animales/a (146).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 4</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

            <div class="contenedor-img ejemplo-4-1">
                <img src="img/animales/a (154).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 4-1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!-------------ejemplo5-->
            <div class="contenedor-img ejemplo-5">
                <img src="img/animales/a (159).jpg" />
                <div class="mascara">
                    <h2>Ejemplo 5</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo6-->
            <div class="contenedor-img ejemplo-6">
                <img src="img/perro1.jpg" />
                <div class="mascara">
                    <h2>Ejemplo 6</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>
            <!---------ejemplo7-->
            <div class="contenedor-img ejemplo-7">
                <img src="img/orca.jpg" />
                <div class="mascara"></div>
                <div class="contenido">
                    <h2>Ejemplo 7</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in
                        ullamcorper malesuada.</p>
                    <a href="#" class="link">Leer mas</a>
                </div>
            </div>

        </section>



        <!----Menu          Vertical- -->
        <?php include('modulos/menuVertical.php') ?>


        <div id="pie">
            <div id="derechos">
                <p>2024 A Cuidado de Animales.Inc. <br> Todos los derechos reservados. ITA. Primer año,2024
                    La Paz - Bolivia, WA 98501</p>

            </div>
            <div id="creador">
                <a href="#"><img src="img/logo.png" width=188 height=45 border=0 - alt="A Medida">
                    <p>Debeloped by:Usnayo Leidy 2024</p>
            </div>
        </div>
    </section>
    </div>
</body>

</html>