<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require '../db/db.php';
  require '../db/CRUD/Cotizacion.php';
  require '../db/userSession/session.php';
  SessionManager::startSession();
  $errors = [];
  $nombre = trim($_POST['nombre']);
  $email = trim($_POST['email']);
  $telefono = trim($_POST['telefono']);
  $servicio = trim($_POST['servicio']);
  $fecha = trim($_POST['fecha']);
  $personas = trim($_POST['personas']);
  $comentarios = trim($_POST['comentarios']);
  // if (empty($nombre)) {
  //   $errors[] = "Nombre completo es requerido.";
  // }

  // if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //   $errors[] = "Correo electrónico válido es requerido.";
  // }

  // if (empty($telefono)) {
  //   $errors[] = "Número de teléfono es requerido.";
  // }

  // if (empty($servicio)) {
  //   $errors[] = "Tipo de servicio solicitado es requerido.";
  // }

  // if (empty($fecha)) {
  //   $errors[] = "Fecha deseada es requerida.";
  // }

  // if (empty($personas)) {
  //   $errors[] = "Número de personas es requerido.";
  // }
  if (empty($errors)) {

    $cotizacionId = CotizacionCRUD::create($nombre, $email, $telefono, $servicio, $fecha, $personas, $comentarios);

    if ($cotizacionId) {
      // Store cotización data in a variable or session
      $cotizacion = CotizacionCRUD::findByID($cotizacionId);

      SessionManager::setSessionData('cotization-nombre', $nombre);
      SessionManager::setSessionData('cotization-email', $email);
      SessionManager::setSessionData('cotization-telefono', $telefono);
      SessionManager::setSessionData('cotization-servicio', $servicio);
      SessionManager::setSessionData('cotization-fecha', $fecha);
      SessionManager::setSessionData('cotization-personas', $personas);
      SessionManager::setSessionData('cotization-comentarios', $comentarios);

      // Display cotizacion data
      echo "<h1>¡Cotización enviada!</h1>";
      echo "<table class='cotizacion-table'>";
      echo "<tr>";
      echo "<th>Nombre</th>";
      echo "<td>$nombre</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Correo electrónico</th>";
      echo "<td>$email</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Teléfono</th>";
      echo "<td>$telefono</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Servicio</th>";
      echo "<td>$servicio</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Fecha</th>";
      echo "<td>$fecha</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Número de personas</th>";
      echo "<td>$personas</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th>Comentarios</th>";
      echo "<td>$comentarios</td>";
      echo "</tr>";
      echo "</table>";
      // Redirect to success page with cotización data
      header('Location: cotizacion-exito.php');
      // exit();
    } else {
      // Error handling
      echo "Error al procesar la cotización. Por favor, inténtalo de nuevo.";
    }
  }
} ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta name="keywords" content="contizaciones, contizacion, cotizar" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario de Solicitud de Cotización</title>
  <!-- Enlace a la hoja de estilos de Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
  <meta name="robots" content="index, nofollow" />
  <link rel="stylesheet" href="../css/cotizaciones.css" />
  <!-- Enlace a fuentes personalizadas de Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
  <style>
    /* Estilos CSS para el formulario */
  </style>
</head>

<body>
  <div class="container">
    <h1>Formulario de Solicitud de Cotización</h1>
    <form id="cotizacion-form" action="cotizacion.php" method="POST">
      <div class="form-group">
        <label for="nombre" class="required"><i class="fas fa-user"></i> Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required />
      </div>
      <div class="form-group">
        <label for="email" class="required"><i class="fas fa-envelope"></i> Correo electrónico:</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="telefono" class="required"><i class="fas fa-phone"></i> Número de teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required />
      </div>
      <div class="form-group">
        <label for="servicio" class="required"><i class="fas fa-list"></i> Tipo de servicio solicitado:</label>
        <select id="servicio" name="servicio" required>
          <option value="">Selecciona un servicio</option>
          <option value="habitacion">Habitación</option>
          <option value="auditorio">Auditorio</option>
          <option value="zona_humeda">Zonas húmedas</option>
          <option value="gimnasio">Gimnasio</option>
          <option value="restaurante">Restaurante</option>
          <option value="eventos">Eventos</option>
          <option value="planes_romanticos">Planes románticos</option>
          <option value="lavanderia">Lavanderia</option>
          <option value="parqueadero">Parqueadero</option>
          <option value="mascotas">Mascotas</option>
          <option value="ocio">Ocio</option>
          <option value="turismo">Turismo</option>
        </select>
      </div>
      <div class="form-group">
        <label for="fecha" class="required"><i class="fas fa-calendar"></i> Fecha deseada:</label>
        <input type="date" id="fecha" name="fecha" required />
      </div>
      <div class="form-group">
        <label for="personas" class="required"><i class="fas fa-users"></i> Número de personas:</label>
        <input type="number" id="personas" name="personas" required />
      </div>
      <div class="form-group">
        <label for="comentarios"><i class="fas fa-comment"></i> Comentarios adicionales o requisitos
          especiales:</label>
        <textarea id="comentarios" name="comentarios" rows="4"></textarea>
      </div>
      <div class="form-group">
        <input type="submit" value="Enviar Cotización" />
      </div>
    </form>
  </div>
</body>

</html>