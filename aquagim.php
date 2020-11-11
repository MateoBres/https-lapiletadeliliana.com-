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
    background: url('static/images/aquagym3.jpg') no-repeat center;
    background-size: cover;
    width: 100%;
    height: 50em;
  }

  #extra {
    background-image: url('static/images/index3.jpeg');
  }

  /* Responsive settings */
  @media screen and (max-width:1200px) {
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
        <h1>AquaGym y Movilidad</h1>
        <p style='background-color: rgba(251, 253, 255, 0.4);'><b><em>Vas a fortalecer y flexibilizar tu cuerpo en forma
              integral.</em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto'>
    <p><b>Sin impacto, y sin sentir el peso de tu cuerpo para proteger articulaciones y musculatura de lesiones.
        Tambiér relajarás tensiones o contracturas gracias al agua caliente de la pileta.</p>
    <br>
    <p> La clase es de 60' minutos en el agua.</p>
    <br>
    <p>Nuestras clases para adultos son combinadas: ejercicios de AquaGim para estar en forma, se practica la
      Natación y se hacen ejercicios de movilidad e Hidroterapia según las
      necesidades de cada uno.</p>
    <br><br>
    <p>Estas clases las podés tomar tanto si estás en buena forma y querés ejercitarte o si aún no sabés nadar y
      querés aprender o tenés necesidades de rehabilitarte y moverte en el agua. La itensidad del trabajo lo pones
      vos.</b></p>
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