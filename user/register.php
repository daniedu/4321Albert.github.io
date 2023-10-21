<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../db/db.php';
    ini_set('display_errors', 0);
    error_reporting(E_ALL & ~E_NOTICE);
    $errors = [];

    $username = trim($_POST['username']);
    $names = trim($_POST['names']);
    $surNames = trim($_POST['surNames']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($username)) {
        // $errors[] = "Username is required.";
    }

    if (empty($names)) {
        // $errors[] = "Names are required.";
    }

    if (empty($surNames)) {
        // $errors[] = "Surnames are required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // $errors[] = "Valid email is required.";
    }

    if (empty($password)) {
        // $errors[] = "Password is required.";
    }

    // Check if there are any validation errors
    if (empty($errors)) {
        $user_id = UsuarioCrud::create($names, $surNames, $email, $username, $password);

        if ($user_id) {
            header('Location: dashboard.php'); // Change to the actual dashboard page
            exit();
        } else {
            echo "Registration failed.";
        }
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
    <!-- ... (your existing code) ... -->
</head>

<body>
    <div class="paper">
        <h2>Registro</h2>
        <form action="register.php" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>

            <label for="names">Nombres:</label>
            <input type="text" id="names" name="names" required>

            <label for "surNames">Apellidos:</label>
            <input type="text" id="surNames" name="surNames" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="registration-button">Registrarse</button>
        </form>
        <form action="index.php" method="POST">
            <input type="hidden" name="form_type" value="login">
            <button type="submit" class="form-switch-button">Iniciar Sesión</button>
        </form>
    </div>
</body>

</html>