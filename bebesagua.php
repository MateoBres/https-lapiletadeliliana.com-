<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="static/images/favicon.png">
  <link rel="stylesheet" href="static/style.css">

  <title>La pileta de Liliana</title>
</head>
<style>
  /* Special style for the page */
  main {
    color: black;
  }

  #principal {
    background: url('static/images/bebe.jpg') no-repeat center;
    background-size: cover;
    width: 100%;
    height: 50em;
  }

  #extra {
    background-image: url('static/images/index3.jpeg');
  }

  /* Responsive settings */
  @media screen and (max-width:1080px) {
    #principal {
      height: 40em;
    }
  }

  @media screen and (max-width:500px) {
    #principal {
      height: 25em;
      background: url('static/images/movil/bebe.jpg') no-repeat center
    }
  }
</style>

<body>
  <div id='principal'>
    <?php
    include 'navbar.html'
    ?>
    <main>
      <div id='titulo'>
        <h1 style='color:black'>Bebés en el Agua</h1>
        <p id='subtitulo'><b><em>Matronación </em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto'>
    <p><b><em>Son clases de 45' min en el agua con un familiar cercano, para bebés a partir de los 4 meses hasta los
          3 años. Les ayuda a relajarse después de disfrutar en el agua calentita, es una sensación muy placentera
    </p>
    <br>
    <p>Con el juego, la expresión y las posibilidades de movimientos en un medio distinto que lo contiene, es muy
      divertido para ellos.

      Es una excelente actividad de estimulación temprana y psicomotor. Aprenden de a poco a hacer pausas
      respiratorias lo que le van a permitir sumergirse y adquirir habilidades de flotación, giro y desplazamientos.
      Mejora su capacidad de reacción en el agua.

      <br><br>La temperatura del agua la mantenemos muy agradable y adecuada para los bebés, para que puedan
      disfrutar de la actividad sin pasar frío</p></b></em>
  </article>
  </div>
  <div id='extra'></div>
  <div>
    <a href="trayectoria.php">
      <button class='article-btn'>Trayectoria</button></a>
    <a href="instalaciones.php">
      <button class='article-btn'>Instalaciones</button></a>
  </div>
  <?php
  include 'footer.html'
  ?>

  <script src="js/app.js"></script>
</body>

</html>