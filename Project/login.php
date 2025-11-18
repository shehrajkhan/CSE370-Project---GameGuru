<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="login-container">
    <div class="form-container">
      <h2><a href="home.php" class="back-home">Welcome Back</a></h2>
      <form action="login_post.php" method="POST" class="login-form">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="input-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
        </div>
        <div class="options">
          <a href="forgot-password.html" class="forgot-password">Forgot Password?</a>
        </div>
        <button type="submit" class="btn"><a href="home.php" class="login-link">Login</a></button>
        <p class="signup-text">
          Don’t have an account? <a href="create-account.php" class="create-account">Create Account</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>