<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../db/db.php';
    require '../userSession/session.php';
    ini_set('display_errors', 0);
    error_reporting(E_ALL & ~E_NOTICE);
    $errors = [];

    $username = trim($_POST['username']);
    $password = trim($_POST['login-password']); // Make sure the name matches the HTML input field

    if (empty($username)) {
        $errors[] = "Username is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if (empty($errors)) {
        $user = UsuarioCrud::login($username, $password);
        echo "New User" . $user;
        if ($user !== null) {
            SessionManager::setSessionData('user_id', $user['id']); 
            header('Location: dashboard.php');
            exit();
        } else {
            echo "Invalid username or password.";
        }
    }
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<div class="container">
<div class="paper">
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required>

        <label for="login-password">Contraseña:</label>
        <input type="password" id="login-password" name="login-password" required>

        <button type="submit" class="login-button">Iniciar Sesion</button>
    </form>
    <form action="index.php" method="POST">
        <input type="hidden" name="form_type" value="register">
        <a href="register.php" type="submit" class="form-switch-button">Registrarme</a>
    </form>
</div>
</div>