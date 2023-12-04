<?php
// require 'readBean/rb-mysql.php';

// Set up RedBean connection
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "unadproyect";

// Print Valores
// echo "Database Host: " . $dbHost;
// echo "Database User: " . $dbUser;
// echo "Database Pass: " . $dbPass;

require 'readBean/rb-mysql.php';

// require_once 'modelos/Sucursal.php';
// require_once 'modelos/Servicio.php';
// require_once 'modelos/TipoCliente.php';
// require_once 'modelos/Usuario.php';
// require_once 'modelos/Reserva.php';
// require_once 'modelos/Descuento.php';

$dns = "mysql:host=$servidor:3306;dbname=$basedatos";
R::setup($dns, $usuario, $contrasena);
R::freeze(false);

// Import CRUD classes
require 'CRUD/ServicioCRUD.php';
require 'CRUD/ReservaCRUD.php';
require 'CRUD/DescuentoCRUD.php';
require 'CRUD/SucursalCRUD.php';
require 'CRUD/TipoClienteCRUD.php';
require 'CRUD/UsuarioCRUD.php';

// // Test the CRUD methods
// $servicioId = ServicioCRUD::create('Servicio de Prueba', 25.0);
// $servicioId = ServicioCRUD::create('Servicio de Prueba2', 25.0);
// $servicioId = ServicioCRUD::create('Servicio de Prueba3', 25.0);
// $servicioId = ServicioCRUD::create('Servicio de Prueba4', 25.0);
// $servicioId = ServicioCRUD::create('Servicio de Prueba5', 25.0);
// $servicioId = ServicioCRUD::create('Servicio de Prueba6', 25.0);
// $servicio = ServicioCRUD::read($servicioId);
// if ($servicio) {
//     echo "Service Name: {$servicio->nombre}, Price: {$servicio->precio}\n";

//     // Update the service
//     ServicioCRUD::update($servicioId, 'Updated Service', 30.0);
//     $updatedService = ServicioCRUD::read($servicioId);
//     if ($updatedService) {
//         echo "Updated Service Name: {$updatedService->nombre}, Price: {$updatedService->precio}\n";
//     } else {
//         echo "Service not found after update.\n";
//     }

//     // Delete the service
//     if (ServicioCRUD::delete($servicioId)) {
//         echo "Service deleted.\n";
//     } else {
//         echo "Failed to delete service.\n";
//     }
// } else {
//     echo "Service not found.\n";
// }

// // Test the listByPage method
// $page = 1;
// $itemsPerPage = 10;
// $services = ServicioCRUD::listByPage($page, $itemsPerPage);
// echo "Services on Page $page:\n";
// foreach ($services as $service) {
//     echo "Service Name: {$service->nombre}, Price: {$service->precio}\n";
// }
