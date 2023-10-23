<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration and Login</title>
    <link rel="stylesheet" href="../css/user.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['user_id'])) {
            // If the user is already logged in, show their dashboard or page
            include('user_dashboard.php'); // Change 'user_dashboard.php' to the actual page
        } elseif (isset($_POST['form_type']) && $_POST['form_type'] === 'login') {
            include('login.php');
        } else {
            include('register.php');
        }
        ?>
    </div>
    <script src="script.js"></script>
</body>

</html>