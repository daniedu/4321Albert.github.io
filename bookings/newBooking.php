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
            <option value="sucursal1">Sucursal 1</option>
            <option value="sucursal2">Sucursal 2</option>
            <option value="sucursal3">Sucursal 3</option>
        </select>

        <label for="servicio">Selecciona el servicio a reservar:</label>
        <select name="servicio" id="servicio">
            <option value="servicio1">Servicio 1</option>
            <option value="servicio2">Servicio 2</option>
            <option value="servicio3">Servicio 3</option>
        </select>

        <label for="fecha">Fecha de reserva:</label>
        <input type="date" name="fecha" id="fecha">

        <input type="submit" value="Apartar y Pagar">
    </form>
</body>

</html>