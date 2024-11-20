<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/CANVASweb.css">
    <!-- Attach our CSS -->
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">






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

<body>
    <?php include('modulos/header.php') ?>
    <?php include('modulos/slide.php') ?>
    <?php include('modulos/social.php') ?>





    <article id="content">
        <section id="section1">
            <h2>Vida Animal</h2>

            <div id="segundoParrafo">
                <p>Este es segundo Parrafo Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, temporibus
                    debitis. Id in facilis aliquid fuga adipisci quasi similique. Vel nihil voluptates aut odit
                    animi, fugit aspernatur exercitationem accusamus non!.</p>
            </div>

        </section>


        <section id="section2">
            <h2>Reino Animal</h2>
            <img src="img/perro2.jpg" alt="">
            <p>El reino animal (Animalia) es uno de los principales reinos de los seres vivos y abarca una enorme
                diversidad de organismos. Aquí te proporciono un resumen de las características generales del reino
                animal y su clasificación básica:</p>
        </section>
        <section id="section3">
            <h2>Animales Domesticos</h2>
            <img src="img/gato.png" alt="">
            <p>El reino animal (Animalia) es uno de los principales reinos de los seres vivos y abarca una enorme
                diversidad de organismos. Aquí te proporciono un resumen de las características generales del reino
                animal y su clasificación básica:</p>
        </section>
        <section id="section4">
            <div class="imagen-degradado">
                <img src="dummy-images/overflow.jpg" alt="">
            </div>

            <articleiv id="columnas3">

                <articleiv class="area-hover">
                    <h2>Quienes Somos</h2>
                </articleiv>
                <p class="ocultar-texto">En Pet & Patitas, nos dedicamos a cuidar y proteger a los animales, brindándoles el amor y la
                    atención que merecen. Nuestro equipo está compuesto por profesionales apasionados y
                    comprometidos con el bienestar animal"</p>
            </articleiv>
            <articleiv id="columnas3">


                <articleiv class="area-hover">
                    <h2>Mision</h2>
                </articleiv>
                <p class="ocultar-texto">Nuestra misión es proporcionar el más alto nivel de cuidado y bienestar a los animales,
                    promoviendo prácticas éticas y sostenibles en la atención veterinaria, la protección animal
                    y la educación comunitaria. </p>
            </articleiv>
            <articleiv id="columnas3">
                <articleiv class="area-hover">
                    <h2>Vision</h2>
                </articleiv>

                <p class="ocultar-texto">Nuestra visión es ser líderes globales en el cuidado y la protección de los animales, creando
                    un mundo donde cada animal viva libre de crueldad y abandono. Aspiramos a establecer un
                    estándar.</p>
            </articleiv>
        </section>
    </article>
    <?php include('modulos/menuVertical.php') ?>
    <?php include('modulos/footer.php') ?>

</body>

</html>