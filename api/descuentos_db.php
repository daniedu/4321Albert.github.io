<?php
require './db/readBean/rb-mysql.php';

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

$tipo_cliente = $_POST['tipo_cliente'];
$cantidad_servicios = $_POST['cantidad_servicios'];

// Realiza el cálculo de la bonificación y el descuento
$descuentos = array(
    'permanente' => range(10, 35),
    'periodico' => range(10, 35),
    'casual' => range(10, 35),
    'nuevo' => range(10, 35),
);

$descuento = $descuentos[$tipo_cliente][0] * $cantidad_servicios;
$bonificacion = 100 - $descuento;

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
$cotizacion->tipo_cliente = $tipo_cliente;
$cotizacion->cantidad_servicios = $cantidad_servicios;
$cotizacion->descuento = $descuento;
$cotizacion->bonificacion = $bonificacion;

R::store($cotizacion);

echo "Data saved successfully.";

echo "<script>window.close();</script>";
