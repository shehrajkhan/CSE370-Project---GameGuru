<?php
 require "connect.php";
 $sql = "SELECT name, comment FROM comment";
 $result=mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gaming Website</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header class="header">
    <nav class="navbar">
      <div class="logo">GameGuru</div>
      <ul class="menu">
        <li><a href="#about">About Us</a></li>
        <li><a href="#games">Games</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li><a href="login.php" class="login-btn">Log In</a></li>
      </ul>
    </nav>
  </header>

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to GameGuru</h1>
      <p>Discover the best games and connect with other gamers.</p>
      <a href="request-game.php" class="btn">Request Games</a>
    </div>
  </section>

 <!-- Game Card Section -->
<section id="games" class="games-section">
    <h2>Popular Games Info</h2>
    <div class="game-cards">
      <!-- Game 1 Card -->
      <div class="card">
        <a href="game-info.php" class="game-link-cards">
          <img src="Valorant.jpeg" alt="Game 1">
          <h3>Valorant</h3>
          <p>A tactical FPS combining precise gunplay with unique agent abilities, emphasizing strategy and teamwork.</p>
        </a>
      </div>
  
      <!-- Game 2 Card -->
      <div class="card">
        <a href="game-info.php" class="game-link-cards">
          <img src="PUBG.jpg" alt="Game 2">
          <h3>PUBG</h3>
          <p>A realistic battle royale where players fight to be the last one standing on a massive map.</p>
        </a>
      </div>
  
      <!-- Game 3 Card -->
      <div class="card">
        <a href="game-info.php" class="game-link-cards">
          <img src="LoL.jpeg" alt="Game 3">
          <h3>League of Legends (LoL)</h3>
          <p>A competitive MOBA where teams battle using unique champions to destroy the enemy base.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- About Us Section -->
  <section id="about" class="about-section">
    <h2>About Us</h2>
    <p>GameZone is a hub for gamers where you can explore the latest games, share your experiences, and connect with like-minded enthusiasts.</p>
  </section>
  <section id="contact" class="contact-section">
    <h2>Contact Us</h2>
    <div class="developer-cards">

    
      <!-- Developer 1 -->
      <div class="developer-card">
        <img src="https://via.placeholder.com/150" alt="Developer 1" class="developer-photo">
        <h3>Developer 1</h3>
        <p>Front-End Developer</p>
        <div class="contact-links">
          <a href="mailto:developer1@gmail.com">Email</a>
          <a href="https://linkedin.com/in/developer1" target="_blank">LinkedIn</a>
          <a href="https://github.com/developer1" target="_blank">GitHub</a>
        </div>
      </div>
      <!-- Developer 2 -->
      <div class="developer-card">
        <img src="https://via.placeholder.com/150" alt="Developer 2" class="developer-photo">
        <h3>Developer 2</h3>
        <p>Back-End Developer</p>
        <div class="contact-links">
          <a href="mailto:developer2@gmail.com">Email</a>
          <a href="https://linkedin.com/in/developer2" target="_blank">LinkedIn</a>
          <a href="https://github.com/developer2" target="_blank">GitHub</a>
        </div>
      </div>
      <!-- Developer 3 -->
      <div class="developer-card">
        <img src="https://via.placeholder.com/150" alt="Developer 3" class="developer-photo">
        <h3>Developer 3</h3>
        <p>Full-Stack Developer</p>
        <div class="contact-links">
          <a href="mailto:developer3@gmail.com">Email</a>
          <a href="https://linkedin.com/in/developer3" target="_blank">LinkedIn</a>
          <a href="https://github.com/developer3" target="_blank">GitHub</a>
        </div>
      </div>
    </div>
  </section>

  <!--commment by user-->
  <section class="request-form-section">
    <div class="form-container">
      <h2>Comment Section</h2>
      <form action="comment_post.php" method="POST">
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

        <!-- Message Field -->
        <div class="input-group">
          <label for="message">Comment</label>
          <textarea id="message" name="message" placeholder="Enter any additional details or questions"></textarea>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn">Submit</button>
      </form>
    </div>
        <!-- Confirmation Message -->
        <div class="confirmation-message" id="confirmation-message">
          <h2>Thank You! for your comment.</h2>
        </div>
  </section>

  <section class="comment-section">
  <table>
    <caption><h2>Comment Section</h2></caption>
    <tr>
      <th>Name</th>
      <th>Comment</th>
    </tr>
    <?php
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['comment']; ?></td>
    </tr>
    <?php
        }
      }
    ?>
  </table>
</section>


  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2024 GameZone. All rights reserved.</p>
  </footer>
</body>
</html>
