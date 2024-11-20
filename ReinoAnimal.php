<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReinoAnimal</title>
    <link rel="stylesheet" href="css/ReinoAnimal.css">
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
    





    <div id="content">

    <?php include('modulos/social.php') ?>



        <section id="section4">
            <article id="columnas3">
                <h2>Animales Terrestres</h2>
                <p>Los animales terrestres viven principalmente en tierra firme. Incluyen mamíferos como leones y
                    elefantes, reptiles como serpientes y tortugas, y diversos insectos. Estos animales están
                    adaptados a una amplia gama de hábitats y climas terrestres.</p>
                <div id="video1"><!-------------Vida animal Video-->
                    <video id="miVideo1" width="260" controls muted autoplay loop>
                        <source src="media/terestres.mp4" type="video/mp4">

                    </video>
                </div>

            </article>
            <article id="columnas3">
                <h2>Animales Acuaticos</h2>
                <p>Los animales acuáticos habitan en ambientes marinos y de agua dulce. Incluyen peces, mamíferos
                    como delfines y focas, y diversas especies de invertebrados. Están adaptados a respirar bajo el
                    agua y a la vida en ambientes húmedos.</p>
                <section id="section2">
                    <div id="video2"><!-------------Vida animal Video-->
                        <video id="miVideo" width="260" controls muted autoplay loop>
                            <source src="media/acuaticos.mp4" type="video/mp4">

                        </video>
                    </div>

                </section>
            </article>
            <diarticle id="columnas3">
                <h2>Animales Aereos</h2>
                <p>Los animales aéreos viven en el aire y son capaces de volar. Incluyen aves como águilas y
                    colibríes, y insectos como mariposas y libélulas. Están adaptados para el vuelo con alas y
                    sistemas de navegación especializados.</p>
                <section id="section1">
                    <div id="video3"><!-------------Vida animal Video-->
                        <video id="miVideo" width="260" controls muted autoplay loop>
                            <source src="media/aereos.mp4" type="video/mp4">

                        </video>
                    </div>

                </section>
            </diarticle>
        </section>
    </div>

    <?php include('modulos/menuVertical.php') ?>
    <?php include('modulos/footer.php') ?>


  
</body>

</html>