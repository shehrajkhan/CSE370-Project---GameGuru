<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <link rel="stylesheet" href="create-account.css">
</head>
<body>
  <div class="login-container">
    <div class="form-container">
      <h2>Create Account</h2>
      <form action="create_account_post.php" method="POST" class="signup-form">
        <div class="input-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" placeholder="Enter your username" required>
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Create a password" required>
        </div>
        <div class="input-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm your password" required>
        </div>
        <button type="submit" class="btn">Create Account</button>
        <p class="login-text">
          Already have an account? <a href="login.php" class="login-link">Log In</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>