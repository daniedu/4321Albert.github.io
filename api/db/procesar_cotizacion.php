<?php
require 'readBean/rb-mysql.php';

// Set up RedBean connection
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "unadproyect";

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$servicio = $_POST['servicio'];
$fecha = $_POST['fecha'];
$personas = $_POST['personas'];
$comentarios = $_POST['comentarios'];

$dns = "mysql:host=$servidor:3306;dbname=$basedatos";
R::setup($dns, $usuario, $contrasena);
R::freeze(false);



// Create a new cotizacion bean and associate it with servicio
$cotizacion = R::dispense("cotizacion");
$cotizacion->nombre = $nombre;
$cotizacion->telefono = $telefono;
$cotizacion->email = $email;
$cotizacion->servicio = $servicio;
$cotizacion->fecha = $fecha;
$cotizacion->personas = $personas;
$cotizacion->comentarios = $comentarios;
R::store($cotizacion);

echo "Data saved successfully.";

echo "<script>window.close();</script>";
?>

