<?php
require "connect.php";

$request_query = "SELECT req_number, name, email, g_name, message FROM request";
$request_result = $conn->query($request_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="admin-style.css">
</head>
<body>
  <header class="header">
    <nav class="navbar">
      <div class="logo">GameGuru Admin</div>
      <ul class="menu">
        <li><a href="home.php" class="logout-btn">Home</a></li>
      </ul>
    </nav>
  </header>

  <main class="admin-panel">

<section id="users" class="admin-section">
  
  <table class="admin-table">
    <caption><h2>Request Game</h2></caption>
    <tr>
      <th>Request Number</th>
      <th>Username</th>
      <th>Email Address</th>
      <th>Game Name</th>
      <th>Message</th>
      <th>Approve</th>
      <th>Decline</th>
    </tr>
    <?php
          // Fetch and display data
          while ($row = $request_result->fetch_assoc()) {
        ?>
        <tr>
          <td><?php echo ($row['req_number']); ?></td>
          <td><?php echo ($row['name']); ?></td>
          <td><?php echo ($row['email']); ?></td>
          <td><?php echo ($row['g_name']); ?></td>
          <td><?php echo ($row['message']); ?></td>
          <form action="admin_post.php" method="POST">
            <input type="hidden" name="approve_value" value="<?=$row['req_number']?>">
            <td><button class = "btn" name = "approve" type="submit">Approve</button></td>
            <td><button class = "btn" name = "decline" type="submit">Decline</button></td>
          </form>
        </tr>
        <?php
          }
        ?>
  </table>
</section>
</main>
  <footer class="footer">
    <p>&copy; 2024 GameGuru Admin Panel. All rights reserved.</p>
  </footer>
</body>
</html>
