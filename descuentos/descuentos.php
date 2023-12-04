<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Discount Calculator</title>
  <link rel="stylesheet" href="../css/user.css">
  <style>

  </style>
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-body">
        <h1>Booking Discount Calculator</h1>
        <form id="booking-form">
          <label for="num-people">Number of People:</label>
          <input type="number" id="num-people" min="1" required>
          <label for="num-days">Number of Days:</label>
          <input type="number" id="num-days" min="1" required>
          <button type="submit">Calculate Discount</button>
        </form>
        <div id="results"></div>
      </div>
    </div>
  </div>
</body>
<script>
  const numPeopleInput = document.getElementById('num-people');
  const numDaysInput = document.getElementById('num-days');
  const resultsDiv = document.getElementById('results');

  const discountPerPerson = 0.05; // 5% discount per person
  const discountPerDay = 0.1; // 10% discount per day

  const bookingForm = document.getElementById('booking-form');
  bookingForm.addEventListener('submit', function(event) {
    event.preventDefault();

    const numPeople = parseInt(numPeopleInput.value, 10);
    const numDays = parseInt(numDaysInput.value, 10);

    const totalDiscount = Math.min(numPeople * discountPerPerson, numDays * discountPerDay); // Apply smaller discount

    resultsDiv.innerHTML = `
    <p>Number of people: ${numPeople}</p>
    <p>Number of days: ${numDays}</p>
    <p>Discount: ${totalDiscount * 100}%</p>
  `;
  });
</script>

</html>