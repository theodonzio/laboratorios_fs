<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>labV</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <header>
        <h1>laboratorio V | Ficha de Estudiante</h1>
    </header>

    <main>
        <form method="post" action="calculo.php" onsubmit="return validar()" id="formstudent" >

        <h4>Nombre completo: </h4>
        <input type="text" id="name" name="name">
        <h4>C.I.: </h4>
        <input type="text" id="ci" name="ci">
        <h4>Localidad: </h4>
        <input type="text" id="city" name="city">
        <h4>Direccion: </h4>
        <input type="text" id="dir" name="dir">
        <h4>Tel.: </h4>
        <input type="text" id="tel" name="tel">
        <h4>Mail: </h4>
        <input type="text" id="mail" name="mail">      

        <h4 id="headercali">Calificaciones:</h4>

        <div class="cali">
        <input type='text' name='nota1' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota2' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota3' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota4' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota5' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota6' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota7' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota8' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota9' maxlength='2' style='width:25px;'/>
        <input type='text' name='nota10' maxlength='2' style='width:25px;'/>
        </div>

        <button type='submit' name='btnObtener'>Ejecutar</button>

        </form>

        <div id="resultado" style="margin-top:15px; font-weight:bold;"></div>
    </main>

    <script src="../js/app.js"></script>
</body>
</html>
