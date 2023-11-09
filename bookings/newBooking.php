<!-- Compañero Cristian Sepulveda -->
<!-- src="https://github.com/CristhianSepulveda/Ejemplo.github.io" -->

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/newBooking.css">
</head>

<body>
    <h1>Reservación de Servicios</h1>
    <form action="procesar_reserva.php" method="post">
        <label for="sucursal">Selecciona una sucursal:</label>
        <select name="sucursal" id="sucursal">
            <option value="sucursal1">Bogotá (Principal)</option>
            <option value="sucursal2">Bucaramanga</option>
            <option value="sucursal3">Medellin</option>
            <option value="sucursal4">Cali</option>
        </select>

        <label for="servicio">Selecciona el servicio a reservar:</label>
        <select name="servicio" id="servicio">
            <option value="servicio1">Habitaciones</option>
            <option value="servicio2">Auditorio</option>
            <option value="servicio3">Zona Humeda</option>
            <option value="servicio4">Gimnasio</option>
            <option value="servicio5">Restaurante</option>
            <option value="servicio6">Salón de eventos</option>
            <option value="servicio7">Gimnasio</option>
        </select>

        <label for="fecha">Fecha de reserva:</label>
        <input type="date" name="fecha" id="fecha">

        <input type="submit" value="Apartar y Pagar">
    </form>
</body>

</html>
