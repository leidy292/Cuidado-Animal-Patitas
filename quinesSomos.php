<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quienes Somos</title>
    <link rel="stylesheet" href="css/quienesSomos.css">
    <!-- Attach our CSS -->
    <link rel="stylesheet" href="css/orbit-1.2.3.css">
    <link rel="stylesheet" href="css/demo-style.css">
    <link rel="stylesheet" href="css/CANVASweb.css">

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





    <section id="content">
        <section id="section1">
            <h2>Vida Animal</h2>
            <articleiv id="video">
                <!-------------Vida animal Video-->

                <video id="miVideo" controls muted autoplay loop>

                    <source src="media/videoPortada.mp4" type="video/mp4">

                </video>
            </articleiv>


            <articleiv id="segundoParrafo">
                <OL>
                    <li>"Cuidamos a tus amigos de cuatro patas como si fueran nuestros."</li>
                    <li>"Donde cada mascota recibe amor y atención especial."</li>
                    <li>"Comprometidos con el bienestar animal, un cuidado a la vez."</li>
                    <li>"Tu mascota merece lo mejor. Nosotros se lo damos."</li>
                    <li>"Amor y cuidado para cada patita que llega a nuestras manos."</li>
                    <li>"Hacemos de cada día una aventura segura para tu mascota."</li>
                    <li>"Tu compañero es nuestra prioridad: cuidado, cariño y dedicación."</li>
                    <li>"Cuidamos a tus animales con el corazón y la experiencia que merecen."</li>
                </OL>
            </articleiv>

        </section>
        <article class="social">
            <ul>
                <li><a href="http:/www." class="icon-facebook"><img src="img/face.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-twitter"><img src="img/twiter.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-googleplus"><img src="img/whatsapp.png" alt="" srcset=""></a>
                </li>
                <li><a href="http:/www." class="icon-pinter"><img src="img/camapan.png" alt="" srcset=""></a></li>
                <li><a href="http:/www." class="icon-emai"><img src="img/face.png" alt="" srcset=""></a></li>
            </ul>
        </article
        >
    </section>



    <?php include('modulos/menuVertical.php') ?>
    <?php include('modulos/footer.php') ?>
    </div>
    </div>
</body>

</html>