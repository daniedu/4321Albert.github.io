<?php
require '../db/userSession/session.php';
SessionManager::startSession();

$userId = SessionManager::getSessionData('user_id');
$userName = SessionManager::getSessionData('user_name');
$userEmail = SessionManager::getSessionData('user_email');
$userSurNames = SessionManager::getSessionData('user_surNames');
$userUser = SessionManager::getSessionData('user_user');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../db/db.php';
    ini_set('display_errors', 0);
    error_reporting(E_ALL & ~E_NOTICE);
    $errors = [];

    $newUsername = trim($_POST['username']);
    $newNames = trim($_POST['names']);
    $newSurNames = trim($_POST['surNames']);
    $newEmail = trim($_POST['email']);
    $newPassword = trim($_POST['password']);
    // You can add additional validation for the new data as needed

    if (empty($newUsername)) {
        $errors[] = "Username is required.";
    }

    if (empty($newNames)) {
        $errors[] = "Names are required.";
    }

    if (empty($newSurNames)) {
        $errors[] = "Surnames are required.";
    }

    if (empty($newEmail) || !filter_var($newEmail, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required.";
    }

    if (empty($errors)) {
        if (empty($newPassword)) {
            $existingPassword = UsuarioCrud::updatePassword($userId, $newPassword);
            $newPassword = $existingPassword;
        }
        SessionManager::setSessionData('user_name', $newNames);
        SessionManager::setSessionData('user_email', $newEmail);
        SessionManager::setSessionData('user_surNames', $newSurNames);
        SessionManager::setSessionData('user_user', $newUsername);
        UsuarioCrud::update($userId, $newNames, $newSurNames, $newEmail, $newUsername);

        header('Location: dashboard.php');
        exit();
    } else {
        // Display validation errors
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <div class="container">
        <div class="paper">
            <h2>Edit User Information</h2>
            <p>Deja la contraseña vacia si deseas no cambiar la contraseña.</p>
            <form action="editUser.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($userUser); ?>" required>

                <label for="names">Nombres:</label>
                <input type="text" id="names" name="names" value="<?php echo htmlspecialchars($userName); ?>" required>

                <label for "surNames">Apellidos:</label>
                <input type="text" id="surNames" name="surNames" value="<?php echo htmlspecialchars($userSurNames); ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userEmail); ?>" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password">

                <button type="submit" class="edit-button">Guardar Cambios</button>
            </form>
            <a href="dashboard.php">Volver al Dashboard</a>
        </div>
    </div>
</body>

</html>