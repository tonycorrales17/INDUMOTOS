<?php
    require "conexion.php";
    $conex=conectar();#Abrimos la conexión
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $correo=$_POST["correo"];
    $turno=$_POST["turno"];
    $fecha=$_POST["fecha"];
    $mensaje=$_POST["mensaje"];
    $sql="INSERT INTO consultas (nombres, apellidos, telefono, correo, turno, fecha_cita, mensaje) VALUES ('$nombre','$apellido','$telefono','$correo','$turno','$fecha','$mensaje')";
    mysqli_query($conex,$sql);#Ejecutamos la consulta

    cerrar_conex($conex);#Cerrar la conexión
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDUMOTOS | Registrado</title>
    <link rel="shortcut icon" href="images/indumotos2.ico">
    <link rel="stylesheet" href="CSS/styleregistrado.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=" https://unpkg.com/aos@next/dist/aos.css"/>
</head>
<body>
    <section class="cta1">
        <h1>Gracias por contactarte con nosotros. La empresa INDUMOTOS se contactará con usted en un plazo maximo de 24 horas. Agradecemos tu confianza.</h1>
        <a href="../index.html" target="_self" class="hero-btn"><b>Haz click aquí para regresar al inicio</b></a>
    </section>
</body>
</html>