<?php
require 'connect.php';
session_start();

if (isset($_SESSION ['game_guide'])) {
  $guide = $_SESSION ['game_guide'];

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Guide</title>
  <link rel="stylesheet" href="game-guide.css">
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

  <!-- Guide Section -->
  <section class="guide-section">
    <div class="guide-container">
      <h1>Your Game Guide</h1>
      <p>Based on your preferences, here’s how you should approach the game:</p>
      <ul>
        <li><?php echo $guide ?></li>
      </ul>
      <p>Enjoy playing and make the most of this thrilling adventure!</p>
    </div>
  </section>
</body>
</html>