<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="static/style.css">
  <link rel="stylesheet" href="static/form.css">

  <title>Reservá</title>
  <style>
    /* Special style for the page */
    body {
      font-size: x-large;
      background-image: url('static/images/fondo-form.jpeg');
      background-size: cover;
      padding: 1%;
    }
  </style>

</head>

<body>
  <div id="encabezado">
    <div id='logo'>
      <a href="index.html">
        <img src="static/images/logo.png" alt="logo">
        <br>
        <p id='volver'>INICIO</p>
      </a>
    </div>
    <div id="titulos">
      <h1 id="titulo-reserva">Reservá tu lugar</h1>
      <br>
    </div>
  </div>
  <form method="POST" id='formulario'>
    <br>
    <!-- Personal information -->
    <label for="nombreAlumno"><b>Nombre y apellido del alumno/a:</b></label>
    <br>
    <input type="text" id='nombreAlumno' name="nombreAlumno" placeholder='para quien es la clase' required min=2>
    <br>
    <br>
    <label for="nombre"><b>En caso de bebés-niños<br> nombre y apellido del familiar:</b></label>
    <br>
    <input type="text" name="nombre" id='nombre'>
    <br>
    <br>
    <label><b>Fecha de Nacimiento del alumno/a:</b></label>
    <br>
    <input type="number" class="fecha" min="1" max="31" id='nacimientoDia' name="nacimientoDia" required placeholder="Día">
    <input type="number" class="fecha" min="1" max="12" id='nacimientoMes' name="nacimientoMes" required placeholder="Mes">
    <input type="number" class="fecha" min="1930" max="2025" id='nacimientoAno' name="nacimientoAno" required placeholder="Año">
    <br>
    <br>
    <label for="phone"><b>Tu número de teléfono:</b></label>
    <br>
    <input type="tel" id='phone' name="phone" required placeholder="2324 123456" min=2>
    <br>
    <br>
    <label for="email"><b>Correo electrónico:</b></label>
    <br>
    <input type="email" id='email' name="email" placeholder='mail@dominio.com' required>
    <br>
    <br>
    <br>
    <!-- Family discount -->
    <label><b>Hacemos descuentos si viene más de un miembro de la familia!</b>
      <br>
      ¿Para cuántos miembros de tu flia reservás?
    </label>
    <br>
    <br>
    <select id="familiar" name='familiar'>
      <option value="1">Solo yo</option>
      <option value="2">2</option>
      <option value="3">3 o más</option>
    </select>
    <br>
    <br>
    <!-- Client disabilty -->
    <label><b>¿Tiene alguna discapacidad?</b></label>
    <br>
    <input type="radio" id="no" name="discapacidad" value="No" checked>
    <label for="no">No</label>
    <input type="radio" id="si" name="discapacidad" value="Sí">
    <label for="si"></label>Sí</label>
    <br>
    <br>
    <label><b>Tiene algun problema de salud?</b></label>
    <br>
    <br>
    <textarea name="comentario" rows="5" cols="40" maxlength="580" placeholder="Contanos un poco más:"></textarea>
    </div>
    <br>
    <br>
    <br>
    <!-- Courses interest -->
    <label id='seccion'><b>Selecciona las clases que reservan o consultan:</b></label><br><br>
    <input type="checkbox" name='clases_bebes' id="bebe" value='clases_bebes'>
    <label for="bebe">Bebés (4 meses a 3 años)</label><br>
    <input type="checkbox" id="escuelita" name='clases_escuelita' value='clases_escuelita'>
    <label for="escuelita">Escuela de Natación (de 4 a 13 años)</label><br>
    <input type="checkbox" id="aquaGim" name='clases_aquagim' value='clases_aquagim'>
    <label for="aquaGim">AquaGim y Movilidad (Adolescentes y Adultos)</label><br>
    <input type="checkbox" id="aquaFit" name='clases_aquaFitness' value='clases_aquaFitness'>
    <label for="aquaFit">AquaFitness</label><br>
    <br>
    <br>
    <!-- Client avaibility -->
    <label name='veces'><b>Cuantas veces por semana querés venir?</b><br>
      Se abona mensualmente<br></label><br>
    <select id="veces" name='veces'>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4 o más">4 o más</option>
    </select><br><br>
    <br>
    <label><b>Que dias?</b><br>
      Más disponibilidad eliges más fácil será ubicarte!<br></label><br>
    <input type="checkbox" name='lunes' id="lunes" value='lunes'>
    <label for="lunes">Lunes</label><br>
    <input type="checkbox" name='martes' id="martes" value='martes'>
    <label for="martes">Martes</label><br>
    <input type="checkbox" name='miercoles' id="miercoles" value='miercoles'>
    <label for="miercoles">Miércoles</label><br>
    <input type="checkbox" name='horario_jueves' id="jueves" value='noche'>
    <label for="jueves">Jueves</label>
    <br>
    <br>
    <br>
    <label for='horario'><b>Que horario tenés disponible?</b><br>
      (Por protocolo las clases serán de 45 minutos)</label><br><br>
    <input type="checkbox" name='h8' id="h8" value='h8'>
    <label for="h8">8</label><br>
    <input type="checkbox" name='h9' id="h9" value='h9'>
    <label for="h9">9</label><br>
    <input type="checkbox" name='h10' id="h10" value='h10'>
    <label for="h10">10</label><br>
    <input type="checkbox" name='h11' id="h11" value='h11'>
    <label for="h11">11</label><br>
    <input type="checkbox" name='h11' id="h12" value='h12'>
    <label for="h12">12</label><br><br>
    <input type="checkbox" name='h15' id="h15" value='h15'>
    <label for="h15">15</label><br>
    <input type="checkbox" name='h16' id="h16" value='h16'>
    <label for="h16">16</label><br>
    <input type="checkbox" name='h17' id="h17" value='h17'>
    <label for="h17">17</label><br>
    <input type="checkbox" name='h18' id="h18" value='h18'>
    <label for="h18">18</label><br>
    <input type="checkbox" name='h19' id="h19" value='h19'>
    <label for="h19">19</label><br>
    <input type="checkbox" name='h20' id="h20" value='h20'>
    <label for="h20">20</label><br>
    <br>
    <br>
    <br>
    <br>
    <input type='submit' id='submitb' name='enviar' value='Enviar!' />
  </form>
  <?php include('mail.php');
  ?>
</body>

</html>