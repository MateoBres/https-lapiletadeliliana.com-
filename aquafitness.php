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
  #principal {
    background: url(static/images/aquagym4.jpg)no-repeat center;
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
        <h1>AquaFitness</h1>
        <p style='color:white'><b><em>Una actividad enérgica</em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>
            Reservá tu lugar
          </button>
        </a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto'>
    <p><b>Tu frecuencia cardíaca estará arriba por eso dura '45 y les pedimos que se traigan una bebida</b></p>
    <br>
    <p><b>¿Alguna vez trabajaste tus músculos con máxima intensidad hasta sentir que queman, pero dentro del agua
        donde obtienes la máxima frescura y relajación?</b></p>
    <br>
    <p><b>Es una experiencia increíble si te gusta entrenar. Vení a probarla!</b></p>
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