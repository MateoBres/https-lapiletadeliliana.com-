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
    background: url('static/images/escuelita.jpg') no-repeat center;
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
      background: url('static/images/movil/escuelita.jpg') no-repeat center;
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
        <h1 style='color:black'>Escuela de Natación</h1>
        <p style='background-color: rgba(251, 253, 255, 0.4);'><b><em>Aprender a nadar, actividades y corrección de
              estilos </em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto'>
    <p><b>
        Los profesores trabajan dentro del agua con los chicos y en grupos reducidos según su nivel.<br>Desde los 4
        hasta los 12 años los niños evolucionan constantemente y les encanta venir a nadar.<br> Para nosotros
        natación tiene que ser una experiencia significativa, memorable y divertida para cada niño. Tus hijos se
        convertirán en expertos nadadores y se lo pasarán genial. <br>En un entorno cariñoso, sociable, empático y
        profesional que permite obtener grandes resultados en cada clase de natación.<br>
        Las clases son de 60' minutos en el agua.</p></b>

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