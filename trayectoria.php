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
    background: url('static/images/aquagym4.jpg') no-repeat center;
    background-size: cover;
    ;
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
        <h1>Trayectoria</h1>
        <p style='background-color: rgba(251, 253, 255, 0.4);font-size:1.5rem;'><b><em>Una vida en el agua</em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button id='reserva'>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
  <article id='texto'>
    <p><b><em>Liliana hace 20 años inaguró la pileta cubierta climatizada en calle 39 donde se dan clases todo el
          año con un equipo de profesore especializados y con experiencia en la enseñanza de la natación.
          <br>Los 30 veranos anteriores le enseñó a nadar a medio Mercedes en la pileta descubierta en calle 23
          tanto a niños como adultos.
          <br><br>Liliana Robba de Ricaldoni es profesora de educación física recibida en el INEF (CeNARD) de Bs.
          As. y mediante formación contínua se actualizó en diversos cursos como Rehabilitación Acuática y
          Estimulación Psicomotriz (Hidroterapia) AquaGim y Gimnasia Acuática, Natacion para Bebes (Matronatacion),
          Prevención y seguridad en el Buceo y la Navegación.
          <br><br>Sumada a la experiencia de ejercer la docencia en deporte en todos los niveles educativos y
          capacitarse en la educación física fuera del agua también.</em></p>
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