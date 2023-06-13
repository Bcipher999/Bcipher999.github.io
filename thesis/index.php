<!DOCTYPE html>
<html>
<head>
  <title>Reservation Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="second-style.css">
  <script src="script.js"></script>
</head>
<body>
  <header>
    <div class="menu-bar0">
    <div class = "logo">
    <h1>MVC</h1> <img src="pc/logo.jpg" width = "50px" height="50px">
		</div>
     
      <div class="login-btn"> 
        <button onclick="location.href='index.php';">BOOK NOW</button>
      </div>
    </div>
  </header>
  <header>
    <div class="menu-bar">
      <nav>
        <ul>
          <li><a href="hmpage.html">Home</a></li>
          <li><a href="pages.html">Pages</a></li>
          <li><a href="services.html">Our Services <i class="fas fa-caret-down"></i></a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <main>
    <section>
      <h2>Book an Appointment</h2>
      <form id="reservationForm" action="process_reservation.php" method="POST">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="email">Email address:</label>
        <input type="email" id="email" name="email" required>

        <label for="contact" class="control-label">Contact #</label>
        <input type="text" name="contact" id="contact" class="form-control form-control" required>
        
        <label for="date">Schedule Date:</label>
        <input type="date" id="date" name="date" required max="2023-12-31">

        
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
        
        <label for="guests">Number of Guests:</label>
        <input type="number" id="guests" name="guests" min="1" max="5" required>
        
        <input type="submit" value="Make a Reservation" id="reservationBtn"> 
        
      </form>
      
</main>
  <footer>
    <p>&copy; 2023 Reservation Website. All rights reserved.</p>
  </footer>

  
</body>
</html>
