<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Include your CSS and JavaScript files here -->
</head>

<body>
    <div class="container">
        <div class="user-info">
            <h2>User Information</h2>
            <?php
            // Fetch user information from your database
            $userInfo = array(
                'username' => 'JohnDoe',
                'email' => 'johndoe@example.com',
                // Add more user info fields
            );

            // Display user information
            echo '<p><strong>Username:</strong> ' . $userInfo['username'] . '</p>';
            echo '<p><strong>Email:</strong> ' . $userInfo['email'] . '</p>';
            // Add more user info fields
            ?>
        </div>

        <div class="booking-section">
            <div class="booking-selection">
                <h2>Booking Selection</h2>
                <!-- Add a form to select booking options -->
                <form action="bookings.php" method="POST">
                    <label for="booking-type">Select Booking Type:</label>
                    <select name="booking-type" id="booking-type">
                        <option value="flight">Flight</option>
                        <option value="hotel">Hotel</option>
                        <option value="car-rental">Car Rental</option>
                        <!-- Add more booking types as needed -->
                    </select>
                    <button type="submit">Select</button>
                </form>
            </div>

            <div class="booking-list">
                <h2>Booking List</h2>
                <!-- Display a list of bookings based on user's selection -->
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    // Process the selected booking type and fetch and display the relevant bookings
                    $selectedBookingType = $_POST['booking-type'];

                    // Example: Fetch and display flight bookings
                    if ($selectedBookingType === 'flight') {
                        $flightBookings = array(
                            'Booking 1',
                            'Booking 2',
                            'Booking 3',
                            // Add more flight bookings
                        );

                        echo '<ul>';
                        foreach ($flightBookings as $booking) {
                            echo '<li>' . $booking . '</li>';
                        }
                        echo '</ul>';
                    }
                    // Add similar sections for hotel and car rental bookings
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Include your CSS and JavaScript files for styling and interactivity -->
</body>

</html>