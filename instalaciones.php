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
  /* Special style for this page */
  main {
    color: black;
  }

  #principal {
    background: url('static/images/instalacion2.jpg') no-repeat center;
    background-size: contain;
    width: 100%;
    height: 50em;
  }

  #extra {
    background-image: url('static/images/index3.jpeg');
  }

  /* Responsive settings */
  @media screen and (max-width:1080px) {
    #principal {
      height: 30em;
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
        <h1 style='color:white'>Instalaciones</h1>
        <p id='subtitulo' style='color: black;background-color: rgba(251, 253, 255, 0.4);'><b><em>Donde sucede la
              magia</em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto' style='text-align: center;'>
    <p><b><em>Los baños y las duchas, con shampú y acondicionador, tienen amplios cambiadores, así como una sala de
          vestuarios al ingreso.
          <br><br>El cuidado del agua es diario, manteniendo los valores de pH, cloro y la temperatura del agua en
          los 32° y 34° verano/invierno.
          <br><br>Todas las áreas y la zona de la pileta cuentan con calefacción.
          <br><br>Es accesible para sillas de ruedas y personas con movilidad reducida.
          <br><br>Zona segura: suelos antideslizantes, rampas, barandas, mesa para cambiar a los bebés, matafuegos,
          etc.</p></b></em><br><br>
  </article>
  </div>
  <div id='extra'></div>
  <div id='article-btn'>
    <a href="trayectoria.php">
      <button>Trayectoria</button></a>
    <a href="instalaciones.php">
      <button>Instalaciones</button></a>
  </div>
  <?php
  include 'footer.html'
  ?>
  <script src="js/app.js"></script>
</body>

</html>