<?php
require '../db/userSession/session.php';
SessionManager::startSession();

$userId = SessionManager::getSessionData('user_id');
$userName = SessionManager::getSessionData('user_name');
$userEmail = SessionManager::getSessionData('user_email');
$userSurNames = SessionManager::getSessionData('user_surNames');
$userUser = SessionManager::getSessionData('user_user');

// echo '<p><strong>ID:</strong> ' . $userId . '</p>';
// echo '<p><strong>Name:</strong> ' . $userName . '</p>';
// echo '<p><strong>Email:</strong> ' . $userEmail . '</p>';
// echo '<p><strong>Surnames:</strong> ' . $userSurNames . '</p>';
// echo '<p><strong>Username:</strong> ' . $userUser . '</p>';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../db/db.php';
    ini_set('display_errors', 0);
    error_reporting(E_ALL & ~E_NOTICE);
    $errors = [];

    $newUsername = trim($_POST['username']);
    $newNames = trim($_POST['names']);
    $newSurNames = trim($_POST['surNames']);
    $newEmail = trim($_POST['email']);

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
        // Update the user's information in your database
        UsuarioCrud::update($userId, $newNames, $newSurNames, $newEmail, $newUsername);

        // Redirect to the user dashboard or another appropriate page
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
            <form action="edit_user.php" method="POST">
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($userUser); ?>" required>

                <label for="names">Nombres:</label>
                <input type="text" id="names" name="names" value="<?php echo htmlspecialchars($userName); ?>" required>

                <label for "surNames">Apellidos:</label>
                <input type="text" id="surNames" name="surNames" value="<?php echo htmlspecialchars($userSurNames); ?>" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userEmail); ?>" required>

                <button type="submit" class="edit-button">Guardar Cambios</button>
            </form>
            <a href="dashboard.php">Volver al Dashboard</a>
        </div>
    </div>
</body>

</html>