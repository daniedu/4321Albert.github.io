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
</head>

<body>
    <div class="container">
        <div class="user-info">
            <h2>User Information</h2>
            <?php
            require '../db/userSession/session.php';
            SessionManager::startSession();

            // Assuming you've already set the session data as mentioned
            $userId = SessionManager::getSessionData('user_id');
            $userName = SessionManager::getSessionData('user_name');
            $userEmail = SessionManager::getSessionData('user_email');
            $userSurNames = SessionManager::getSessionData('user_surNames');
            $userUser = SessionManager::getSessionData('user_user');

            echo '<p><strong>ID:</strong> ' . $userId . '</p>';
            echo '<p><strong>Name:</strong> ' . $userName . '</p>';
            echo '<p><strong>Email:</strong> ' . $userEmail . '</p>';
            echo '<p><strong>Surnames:</strong> ' . $userSurNames . '</p>';
            echo '<p><strong>Username:</strong> ' . $userUser . '</p>';
            ?>
        </div>

        <div class="booking-section">
            <div class="action-buttons">
                <button class="action-button" onclick="editProfile()">Editar Usuario</button>
                <button class="action-button" onclick="showBookingHistory()">Historial</button>
                <button class="action-button" onclick="createNewBooking()">Reservar</button>
            </div>
        </div>
    </div>
</body>
<script>
    function editProfile() {
        window.location.href = 'editUser.php';
    }

    function showBookingHistory() {
        window.location.href = '/bookings/bookingHistory.php';
    }

    function createNewBooking() {
        window.location.href = '/bookings/createBooking.php';
    }
</script>

</html>