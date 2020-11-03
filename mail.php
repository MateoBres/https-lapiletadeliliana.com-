<?php
if (isset($_POST['enviar'])) {
    if(!empty($_POST['nombre']) && !empty($_POST['phone'])){
        $nombreAlumno = $_POST['nombreAlumno'];
        $nombre=$_POST['nombre'];
        $nacimientoDia = $_POST['nacimientoDia'];
        $nacimientoMes = $_POST['nacimientoMes'];
        $nacimientoAno = $_POST['nacimientoAno'];
        $phone=$_POST['phone'];
        $email = $_POST['email'];
        $familiar=$_POST['familiar'];
        $discapacidad=$_POST['discapacidad'];
        $comentario=$_POST['comentario'];
        $ano = 2020;
        $edad = $ano - $nacimientoAno;

        $clases_bebes=$_POST['clases_bebes'];
        $clases_escuelita=$_POST['clases_escuelita'];
        $clases_aquagim=$_POST['clases_aquagim'];
        $clases_aquaFitness=$_POST['clases_aquaFitness'];

        $veces=$_POST['veces'];

        $lunes=$_POST['lunes'];
        $martes=$_POST['martes'];
        $miercoles=$_POST['miercoles'];
        $jueves=$_POST['jueves'];

        $h8=$_POST['h8'];
        $h9=$_POST['h9'];
        $h10=$_POST['h10'];
        $h11=$_POST['h11'];
        $h12=$_POST['h12'];
        $h15=$_POST['h15'];
        $h16=$_POST['h16'];
        $h17=$_POST['h17'];
        $h18=$_POST['h18'];
        $h19=$_POST['h19'];
        $h20=$_POST['h20'];

        $to = 'magaricaldoni@gmail.com';
        $headers = "From: magaricaldoni@gmail.com" . "\r\n";
        $headers = "CC:  magaricaldoni@gmail.com";
        $subject = $_POST['nombreAlumno'];
        $headers = "X-Mailer: PHP/". phpversion();
        $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

        $message = "
        <html>
            <head>
                <title>HTML</title>
            </head>
            <body>
                <h1>Contacto desde la pagina web</h1>
                <strong>NombreAlumno:</strong> $nombreAlumno - $edad <br/><br/>
                <strong>Nombre:</strong> $nombre <br/><br/>
                <strong>nacimiento:</strong> $nacimientoDia/$nacimientoMes/$nacimientoAno <br/><br/>
                <strong>Tel:</strong> $phone <br/><br/>
                <strong>Email:</strong> $email <br/><br/>
                <strong>Familiar:</strong> $familiar <br/><br/>
                <strong>discapacidad:</strong> $discapacidad <br/><br/>
                <strong>comentario:</strong> $comentario <br/><br/>
                <strong>clases:</strong> $clases_bebes <br/><br/>
                <strong>clases:</strong> $clases_escuelita <br/><br/>
                <strong>clases:</strong> $clases_aquagim <br/><br/>
                <strong>clases:</strong> $clases_aquaFitness <br/><br/>
                <strong>veces:</strong> $veces <br/><br/>
                <strong>dia:</strong> $lunes<br/><br/>
                <strong>dia:</strong> $martes <br/><br/>
                <strong>dia:</strong> $miercoles <br/><br/>
                <strong>dia:</strong> $jueves <br/><br/>
                <strong>horario:</strong> $h8 <br/><br/>
                <strong>horario:</strong> $h9 <br/><br/>
                <strong>horario:</strong> $h10 <br/><br/>
                <strong>horario:</strong> $h11 <br/><br/>
                <strong>horario:</strong> $h12 <br/><br/>
                <strong>horario:</strong> $h15 <br/><br/>
                <strong>horario:</strong> $h16 <br/><br/>
                <strong>horario:</strong> $h17<br/><br/>
                <strong>horario:</strong> $h18<br/><br/>
                <strong>horario:</strong> $h19 <br/><br/>
                <strong>horario:</strong> $h20 <br/><br/>
            </body>
        </html>";	
        echo "<script>alert('Tus datos han sido enviados, en breve nos pondremos en contacto, gracias!');window.location.href='https://lapiletadeliliana.com/index.html';</script>";
        mail($to, $subject, $message, $headers);
    }
}
