<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Details</title>
  <link rel="stylesheet" href="game-info.css">
</head>
<body>
  <!-- Menu Bar -->
  <header class="header">
    <nav class="navbar">
      <div class="logo">GameGuru</div>
      <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php" class="login-btn">Log In</a></li>
      </ul>
    </nav>
  </header>

  <!-- Game Details Section -->
  <section class="game-details">
    <div class="game-header">
      <img src="game-image.jpg" alt="Game Image" class="game-image">
      <div class="game-info">
        <h1>Game Title</h1>
        <p class="game-description">This is a short description of the game. It explains the game mechanics, the setting, and what the player can expect from the game.</p>
      </div>
    </div>

    <!-- Question Section -->
    <div class="question-section">
      <div>
        <h2>Answer these questions to get your desired guide</h2><br>
      </div>
      
      <form action="game-info_post.php" method="POST">
         <div class="question">
          <h3>Q1. How do you prefer to approach challenges?</h3><br>
          <label><input type="radio" name="q1" value="A" required> A. Strategize before taking action</label><br>
          <label><input type="radio" name="q1" value="B"> B. Adapt and react quickly</label><br>
          <label><input type="radio" name="q1" value="C"> C. Improvise and experiment</label><br>
         </div>

        <div class="question">
          <h3>Q2. What kind of gameplay pace do you enjoy the most?</h3><br>
          <label><input type="radio" name="q2" value="A" required> A. Slow and methodical</label><br>
          <label><input type="radio" name="q2" value="B"> B. Fast-paced and action-packed</label><br>
          <label><input type="radio" name="q2" value="C"> C. Balanced</label><br>
        </div>

        <div class="question">
          <h3>Q3. How do you prefer to interact with other players in a game?</h3><br>
          <label><input type="radio" name="q3" value="A" required> A. Collaborate with teammates</label><br>
          <label><input type="radio" name="q3" value="B"> B. Compete against others</label><br>
          <label><input type="radio" name="q3" value="C"> C. Play solo</label><br>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn">Submit</button>
        <!--<label class="btn" for="submit-checkbox"><a class="btn" href="game-guide.php" target="_blank">Submit</a></label>-->
        <!--<input type="checkbox" id="submit-checkbox" class="submit-checkbox" />-->
      </form>
    </div>

    <!-- Guide Section (Visible when checkbox is checked) -->

  </section>
</body>
</html>