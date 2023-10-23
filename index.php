<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <!-- Include your CSS and JavaScript files here -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
  <style>
    body {
      background-color: #f0f0f0;
      /* Background color */
      font-family: 'Josefin Sans', sans-serif;
      /* Custom font */
    }

    .container {
      text-align: center;
      margin: auto;
      width: 60%;
      padding: 20px;
      background-color: #ffffff;
      /* Background color */
      border-radius: 10px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      /* Elevation */
    }

    .user-info {
      border: 1px solid #ccc;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 10px;
    }

    .user-image {
      background-color: #007bff;
      /* Background color for the circle */
      width: 100px;
      height: 100px;
      border-radius: 50%;
      /* Make it a circle */
      margin: 0 auto 20px;
    }

    .user-image i {
      font-size: 3rem;
      line-height: 100px;
      color: #fff;
      /* Icon color */
    }

    .booking-section {
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 10px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="user-info">
      <div class="user-image">
        <i class="fas fa-user"></i>
      </div>
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
      <h2>Booking Section</h2>
      <form method="post">
        <label for="booking-type">Select Booking Type:</label>
        <select name="booking-type" id="booking-type">
          <option value="flight">Flight</option>
          <option value="hotel">Hotel</option>
          <option value="car-rental">Car Rental</option>
        </select>
        <input type="submit" value="View Bookings">
      </form>
      <div class="booking-list">
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $selectedBookingType = $_POST['booking-type'];

          if ($selectedBookingType === 'flight') {
            $flightBookings = array(
              'Booking 1',
              'Booking 2',
              'Booking 3',
            );

            echo '<h3>Flight Bookings</h3>';
            echo '<ul>';
            foreach ($flightBookings as $booking) {
              echo '<li>' . $booking . '</li>';
            }
            echo '</ul>';
          }
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>