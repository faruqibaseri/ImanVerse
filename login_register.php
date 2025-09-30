<?php include('login_server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>IMANVerse - login or signup</title>
  <link rel="stylesheet" type="text/css" href="login_register.css">
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
    <h2>Register</h2>
  </div>
  
  <form method="post" action="login_register.php">
    <?php include('login_errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo $username; ?>" required>
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo $email; ?>" required>
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" required>
    </div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="password_2" required>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</body>
</html>
