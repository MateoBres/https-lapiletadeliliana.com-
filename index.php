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
  #principal {
    background: url('static/images/index2.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    width: 100%;
    height: 50em;
  }

  #extra {
    background-image: url('static/images/index3.jpeg');
  }
  /* Responsive settings */
  @media screen and (max-width:1080px) {
    #principal {
      background: url('static/images/movil/index3.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      height: 50em;
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
        <h1>La pileta de Liliana</h1>
        <p><b><em>Escuela de natación - Pileta Climatizada - 50 años de trayectoria</em></b></p>
      </div>
      <div id='botones'>
        <a href="form.php">
          <button>Reservá tu lugar</button></a>
      </div>
    </main>
  </div id='principal'>
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