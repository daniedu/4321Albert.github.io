<?php
// require 'readBean/rb.php';

require 'readBean/rb-mysql.php';

require_once 'modelos/Sucursal.php';
require_once 'modelos/Servicio.php';
require_once 'modelos/TipoCliente.php';
require_once 'modelos/Usuario.php';
require_once 'modelos/Reserva.php';
require_once 'modelos/Descuento.php';


R::setup('mysql:host=localhost:3306;dbname=unadproyect', 'root', '');
R::freeze(false);
$user = R::dispense('usuario');
$user->nombre = 'John Doe';
$user->email = 'john@example.com';
R::store($user);

// Cargar un usuario por ID
$usuarioCargado = R::load('usuario', 1);
echo $usuarioCargado->nombre;

// Actualizar un usuario
$usuarioCargado->nombre = 'Jane Doe';
R::store($usuarioCargado);

// Eliminar un usuario
R::trash($usuarioCargado);


?>