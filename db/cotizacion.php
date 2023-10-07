<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Solicitud de Cotización</title>
    <!-- Enlace a la hoja de estilos de Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <!-- Enlace a fuentes personalizadas de Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
    <style>
        /* Estilos CSS para el formulario */
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: 'Josefin Sans', sans-serif;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            font-family: 'Josefin Sans', sans-serif;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Estilos adicionales con Font Awesome */
        .required::before {
            content: '* ';
            color: red;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Solicitud de Cotización</h1>
        <form id="cotizacion-form" action="procesar_cotizacion.php" method="post">
            <div class="form-group">
                <label for="nombre" class="required"><i class="fas fa-user"></i> Nombre completo:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email" class="required"><i class="fas fa-envelope"></i> Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefono" class="required"><i class="fas fa-phone"></i> Número de teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
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
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="personas" class="required"><i class="fas fa-users"></i> Número de personas:</label>
                <input type="number" id="personas" name="personas" required>
            </div>
            <div class="form-group">
                <label for="comentarios"><i class="fas fa-comment"></i> Comentarios adicionales o requisitos especiales:</label>
                <textarea id="comentarios" name="comentarios" rows="4"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Enviar Cotización">
            </div>
        </form>
    </div>
</body>
</html>
