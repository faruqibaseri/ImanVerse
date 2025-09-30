<?php include('login_server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>IMANVerse - login or signup</title>
  <link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>
<div id="header">
    <video autoplay muted loop id="bg-video">
        <source src="5327722_Shahi Zinda_Samarkand_4096x2160.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
</div>

<div class="form-container">
  <div class="header">
    <h2>Login</h2>
  </div>
  
  <form method="post" action="login.php">
    <?php include('login_errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p>
      Not yet a member? <a href="login_register.php">Sign up</a>
    </p>
  </form>
</div>
</body>
</html>
