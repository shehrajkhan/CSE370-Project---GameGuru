<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request Game Info</title>
  <link rel="stylesheet" href="request-game.css">
</head>
<body>
  <!-- Menu Bar -->
  <header class="header">
    <nav class="navbar">
      <div class="logo"><a href="home.php" class="back-btn">GameGuru</a></div>
      <ul class="menu">
        <li><a href="#about">About Us</a></li>
        <li><a href="#games">Games</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="login.php" class="login-btn">Log In</a></li>
      </ul>
    </nav>
  </header>

  <!-- Request Game Info Form -->
  <section class="request-form-section">
    <div class="form-container">
      <h2>Request Game Info</h2>
      <p>Fill out the form below to request information about a specific game.</p>
      <form action="request-game_post.php" method="POST">
        <!-- Name Field -->
        <div class="input-group">
          <label for="name">Your Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>

        <!-- Email Field -->
        <div class="input-group">
          <label for="email">Your Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <!-- Game Field -->
        <div class="input-group">
          <label for="game">Game Name</label>
          <input type="text" id="game" name="game" placeholder="Enter the game name" required>
        </div>

        <!-- Message Field -->
        <div class="input-group">
          <label for="message">Message (Optional)</label>
          <textarea id="message" name="message" placeholder="Enter any additional details or questions"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn">Submit Request</button>
      </form>
    </div>
        <!-- Confirmation Message -->
        <div class="confirmation-message" id="confirmation-message">
          <h2>Thank You!</h2>
          <p>Your request has been submitted successfully. We’ll get back to you soon with the requested information.</p>
        </div>
  </section>
</body>
</html>