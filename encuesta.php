<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>encuesta</title>
    <link rel="stylesheet" href="css/encuesta.css">
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
    <style>
        .container {
            border: 3px solid black;
            border-radius: l0px;
            width: 60%;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            display: none;
            border-top: 20px;
            border-bottom: 20px;
            background: rgb(239, 146, 74);
            color: blanchedalmond;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            /* Adjust line height */
            margin-bottom: 20px;
            /* Add space between question blocks */
        }



        .next {
            margin-top: 10px;
        }

        /* Add some padding and margin for input fields */
        .container input[type="radio"] {
            margin-bottom: 8px;
        }

        /* Add some space around buttons */
        .next,
        button {
            margin-top: 10px;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        .next:hover,
        button:hover {
            background-color: #45a049;
        }

        button {
            margin-top: lOpx;
        }
    </style>
</head>

<body><!----------------------------------- Menu de desplegable------------------>
    <?php include('modulos/header.php') ?>
    <?php include('modulos/slide.php') ?>
    <?php include('modulos/social.php') ?>

   
        <section id="content">

            <section id="form"> <!-- ------fCuestionario ------------------>
                <center>
                    <h2>Responde esta encuesta Por favor</h2>
                    <div class="container">
                        Que tiene tiene garras y caza ratones?
                        <hr>
                        <input type="radio" name="question1" id="correct1">Gatos<br>
                        <input type="radio" name="question1">Perros<br>
                        <input type="radio" name="question1">Aves<br>
                        <button class="next" onclick="next(1)">NEXT</button>
                    </div>
                    <div class="container" style="display:none;">
                        Cuanta veces come su Mascota?
                        <hr>
                        <input type="radio" name="question2" id="correct2">2 veces al dia<br>
                        <input type="radio" name="question2">40 veces al dia<br>
                        <input type="radio" name="question2">50 veces al dia<br>
                        <input type="radio" name="question2">600 veces al dia<br>
                        <button class="next" onclick="next(2)">NEXT</button>
                    </div>
                    <div class="container" style="display:none;">
                        A que horas come su Mascota?
                        <hr>

                        <input type="radio" name="question3">18 de la noche<br>
                        <input type="radio" name="question3">38 de la noche<br>
                        <input type="radio" name="question3" id="correct3">8 de la noche<br>
                        <input type="radio" name="question3">80 de la noche<br>
                        <button class="next" onclick="next(3)">NEXT</button>
                    </div>
                    <div class="container" style="display:none;">
                        Qué tipo de cuidado proporcionas a tu mascota?
                        <hr>

                        <input type="radio" name="question4">lo golpeo<br>
                        <input type="radio" name="question4">lo Duermo<br>
                        <input type="radio" name="question4" id="correct4">lo Baño<br>
                        <button class="next" onclick="next(4)">NEXT</button>
                    </div>
                    <div class="container" style="display:none;">
                        Cual es el color de su Mascota?
                        <hr>

                        <input type="radio" name="question5">rojo<br>
                        <input type="radio" name="question5">verde<br>
                        <input type="radio" name="question5">azul<br>
                        <input type="radio" name="question5" id="correct5">plomo<br>
                        <button class="next" onclick="next(5)">NEXT</button>
                    </div>
                    <div class="container" style="display:none;">
                        Qué productos utilizas para el cuidado de tu mascota?
                        <hr>
                        <input type="radio" name="question6" id="correct6">Purina<br>
                        <input type="radio" name="question6">Toma cerveza<br>
                        <input type="radio" name="question6">Toma vino<br>

                        <button class="next" onclick="next(6)">Siguiente</button>
                    </div>
                    <div class="container" style="display:none;">
                        <button onclick="result()">Muestra el resultado</button>
                    </div>
                </center>
    
    <script>
        // Displaying the first block of question
        document.getElementsByClassName('container')[0].style.display = "block";

        // Defining the next function
        function next(id) {
            document.getElementsByClassName('container')[id - 1].style.display = "none";
            document.getElementsByClassName('container')[id].style.display = "block";
        }

        // Getting final result
        function result() {
            var score = 0;
            if (document.getElementById('correct1').checked) {
                score++;
            }
            if (document.getElementById('correct2').checked) {
                score++;
            }
            if (document.getElementById('correct3').checked) {
                score++;
            }
            if (document.getElementById('correct4').checked) {
                score++;
            }
            if (document.getElementById('correct5').checked) {
                score++;
            }
            if (document.getElementById('correct6').checked) {
                score++;
            }
            alert('Your score is: ' + score);
        }
    </script>

    </section> <!-- ----- icono social  face twiter whatsap -->
    <div class="social">
        <ul>
            <li><a href="http:/www." class="icon-facebook"><img src="img/face.png" alt="" srcset=""></a></li>
            <li><a href="http:/www." class="icon-twitter"><img src="img/twiter.png" alt="" srcset=""></a></li>
            <li><a href="http:/www." class="icon-googleplus"><img src="img/whatsapp.png" alt="" srcset=""></a>
            </li>
            <li><a href="http:/www." class="icon-pinter"><img src="img/camapan.png" alt="" srcset=""></a></li>
            <li><a href="http:/www." class="icon-emai"><img src="img/face.png" alt="" srcset=""></a></li>
        </ul>
    </div>
    </section>
    <div id="contenido"> <!-- ------------menu horizontal -->

        <?php include('modulos/menuVertical.php') ?>
        <?php include('modulos/footer.php') ?>
    </div>
    </div>
</body>

</html>