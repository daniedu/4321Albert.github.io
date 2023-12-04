<!-- <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['editUser'])) {
        header('Location: editUser.php');
        exit();
    } elseif (isset($_POST['reservar'])) {
        header('Location: /app-web/index.php');
        exit();
    } elseif (isset($_POST['historial'])) {
        header('Location: posts/historial.php');
        exit();
    } elseif (isset($_POST['logout'])) {
        header('Location: posts/logout.php');
        exit();
    } elseif (isset($_POST['deleteAccount'])) {
        header('Location: posts/deleteAccount.php');
        exit();
    }
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="../css/dashboard.css">
    <link
    rel="canonical"
    href="https://daniedu.github.io/4321Albert.github.io/"
  />
</head>

<body>
    <div class="container">
        <div class="user-info">
            <?php
            require '../db/userSession/session.php';
            SessionManager::startSession();
            // $userId = SessionManager::getSessionData('user_id');
            $userName = SessionManager::getSessionData('user_user');
            // $userEmail = SessionManager::getSessionData('user_email');
            // $userSurNames = SessionManager::getSessionData('user_surNames');
            // $userUser = SessionManager::getSessionData('user_user');

            echo '<h2>Bienvenido de Vuelta ' . $userName . '</h2>';
            // echo '<p><strong>Name:</strong> ' . $userName . '</p>';
            // echo '<p><strong>Email:</strong> ' . $userEmail . '</p>';
            // echo '<p><strong>Surnames:</strong> ' . $userSurNames . '</p>';
            // echo '<p><strong>Username:</strong> ' . $userUser . '</p>';
            ?>
        </div>

        <div class="booking-section">
            <div class="action-buttons">
                <form action="dashboard.php" method="POST">
                    <button type="submit" class="edit-button" name="editUser">Editar Usuario</button>
                    <!-- <button type="submit" class="edit-button" name="reservar">Reservar</button> -->
                    <!-- <button type="submit" class="booking-button" name="historial">Historial</button> -->
                    <button type="submit" class="logout-button" name="logout">Cerrar Sesión</button>
                    <button type="submit" class="logout-button" name="deleteAccount">Borrar Cuenta</button>
                </form>

            </div>
        </div>
    </div>
</body>

</html>