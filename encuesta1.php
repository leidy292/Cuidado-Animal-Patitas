<IDOCTYPE html>
    <html>

    <head>
        <tile>Encuesta cuida tu Mascota</tite>
            <script>
                function calcularNotaFinal() {
                    // Obtener la calificacion del examen y del irabajo grupal
                    var examen = parseFloat(document.getElementByld("examen").value);
                    var trabajoGrupal = parseFloat(document.getElementByld("trabajoGrupal").value);
                    {
                        //Calcular la nota final
                        var notaFinal = (examen * 0.6) + (trabajoGrupal * 0.4);
                        // Mostrar la nota final
                        document.getElementByld("nofaFinal").innerHTML = "Nota Final:" + notaFinal.foFixed(2);
                        //Determinar si el esfudiante ha aprobado o no
                        if (notaFinal >= 5) {
                            document.getElementByld("resultado").innerHTML = "Has aprobado!";
                        } else {
                            document.getElementByld("resultado").innerHTML = "Lo Sento, has reprobado.";
                        }
                    }
                }
            </Script>
    </head>

    <body>
        <h1> Calificacion de QUimica </h1>
        <label for="examen">Calificacion del examen:</label>
        <input type="number" id="examen" sep=0.01"><br><br>
        <label for="trabajoGrupal">Calificacion del trabajo grupal: </label>
        <input type=" number" id="trabajpGrupal" step="0.01">
        <br><br>
        <button onclick="calculanNotaFinal()">Calcular</button>
        <br><br>
        <div id="notaFinal"></div>
        <div id="Tesulfado"></div> 
        </body> 
        </html>