<?php
require '../db/userSession/session.php';
SessionManager::startSession();
// if (!isset($_SESSION['nombre'])) {
// Redirect to home or error page if no session data
// header('Location: index.php');
//$_SESSION['cotization-nombre'] = $nombre;
$test = "test";
// $nombre= SessionManager::getSessionData('cotization-nombre');
$email = SessionManager::getSessionData('cotization-email');
$telefono = SessionManager::getSessionData('cotization-telefono');
$servicio = SessionManager::getSessionData('cotization-servicio');
$fecha = SessionManager::getSessionData('cotization-fecha');
$personas = SessionManager::getSessionData('cotization-personas');
$comentarios = SessionManager::getSessionData('cotization-comentarios');
// session_destroy();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="keywords" content="contizaciones, contizacion, cotizar" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>¡Cotización enviada!</title>
  <link rel="stylesheet" href="https://usefontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
  <meta name="robots" content="index, nofollow" />
  <link rel="stylesheet" href="../css/cotizaciones.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
  <style>
    /* Estilos CSS para el mensaje de éxito */
    .cotizacion-table {
      border-collapse: collapse;
      width: 100%;
    }

    .cotizacion-table th,
    .cotizacion-table td {
      border: 1px solid #ccc;
      padding: 8px;
    }

    .cotizacion-table th {
      background-color: #f8f8f8;
      text-align: left;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>¡Cotización enviada!</h1>

    <table class="cotizacion-table">

      <tr>
        <th>Correo electrónico</th>
        <td><?php echo $test; ?></td>
      </tr>
      <tr>
        <th>Teléfono</th>
        <td><?php echo $telefono; ?></td>
      </tr>
      <tr>
        <th>Servicio</th>
        <td><?php echo $servicio; ?></td>
      </tr>
      <tr>
        <th>Fecha</th>
        <td><?php echo $fecha; ?></td>
      </tr>
      <tr>
        <th>Número de personas</th>
        <td><?php echo $personas; ?></td>
      </tr>
      <tr>
        <th>Comentarios</th>
        <td><?php echo $comentarios; ?></td>
      </tr