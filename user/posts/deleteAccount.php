<?php
require '../../db/db.php';
// require '../../db/CRUD/UsuarioCrud.php';
require '../../db/userSession/session.php';
SessionManager::startSession();
$userId = SessionManager::getSessionData('user_id');
UsuarioCRUD::delete($userId);
SessionManager::destroySession();
$successMessage = "Account deleted successfully!";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Éxito</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <h2>Éxito</h2>
        <p>Se ha Borrado tu Cuenta de Manera Exitosa</p>
        <a href="../../index.php">Volver al panel de usuario</a>
    </div>
</body>

</html>