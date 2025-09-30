<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Share With Us!</title>
    <link rel="stylesheet" href="learn_category.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Prompt' rel='stylesheet'/>

</head>
<body>

    <div class="container">
        <nav>
            <a href="home.php"><img src="IMANVerse_Logo-removebg-preview (1).png" class="logo">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="learn.php">Learn</a></li>
                <li><a href="DISPLAYQARI.php">Qari</a></li>
                <li><a href="Aboutus.php">About Us</a></li>
            </ul>
        </nav>
    </div>
    
    
    <section class="main-section">
        <h1>Share With Us!</h1>
        <p class="description">Want to become a contributor to our page? Be part of the team now!</p>
       




<div style="text-align:left;">
        <div class="formbold-main-wrapper">
  <div class="formbold-form-wrapper">


    <form action="learn_processform.php" method="POST" enctype='multipart/form-data' style="padding:30px; margin-bottom: 0px; border-radius:5px;">
        <div class="formbold-input-flex">
          <div>
              <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Ahmad"
              class="formbold-form-input"
              />
              <label for="firstname" class="formbold-form-label"> First name </label>
          </div>
          <div>
              <input
              type="text"
              name="lastname"
              id="lastname"
              placeholder="Faruqi"
              class="formbold-form-input"
              />
              <label for="lastname" class="formbold-form-label"> Last name </label>
          </div>
        </div>

        <div class="formbold-input-flex">
          <div>
              <input
              type="email"
              name="email"
              id="email"
              placeholder="YourEmail@mail.com"
              class="formbold-form-input"
              />
              <label for="email" class="formbold-form-label"> Email </label>
          </div>
          <div>
              <input
              type="text"
              name="phone"
              id="phone"
              placeholder="01xxxxxxxxx"
              class="formbold-form-input"
              />
              <label for="phone" class="formbold-form-label"> Phone Number</label>
          </div>
        </div>

        <div class="formbold-textarea">
            <textarea
                rows="6"
                name="message"
                id="message"
                placeholder="Your contribution goes here..."
                class="formbold-form-input"
            ></textarea>
            <label for="message" class="formbold-form-label"> Message </label>
        </div>

        <div class="formbold-input-file">
          <label for="upload" class="formbold-input-label">
          <i class="fa-solid fa-paperclip"></i>
              <input type="file" name="upload" id="upload" required class="formbold-input-label">
          </label>
        </div>
        <input type="submit" class="formbold-btn" value="submit" name='upload' id='upload'>
        </input>
    </form>
  </div>
</div>
</div>
<a href="learn.php" class="btns" style="margin-top:0px;"> Back to Learn Page</a>


    </section>

   


    <footer class="footer">
        <div class="footer-logo">
            <a href="home.php"><img src="IMANVerse_Logo-removebg-preview (1).png"></a>
        </div>

        <div class="footer-links">
            <div>
                <h4>Company</h4>
                <a href="home.php">Home</a>
                <a href="learn.php">Learn</a>
                <a href="DISPLAYQARI.php">Qari</a>
            </div>
            <div>
                <h4>Documentation</h4>
                <a href="#">Help Centre</a>
                <a href="#">Contact</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy Policy</a>
            </div>
            <div>
                <h4>Social</h4>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">YouTube</a>
                <a href="#">Twitter</a>
            </div>
        </div>
        <div class="footer-bottom">
            © IMANVerse. All Rights Reserved 2024 | <a href="#">Terms & Conditions</a>
        </div>
    </footer>





    <div id="fullscreenImage" class="fullscreen-image">
        <img id="fullImage" src="" alt="Fullscreen Image">
        <button onclick="closeImage()" class="close-btn">Close</button>
    </div>

    <script>
         function showImage(src) {
            const fullscreenImage = document.getElementById('fullscreenImage');
            const fullImage = document.getElementById('fullImage');
            fullImage.src = src;
            fullscreenImage.style.display = 'flex';
            setTimeout(() => {
                fullscreenImage.style.opacity = '1';
                fullImage.style.transform = 'scale(1)';
            }, 0);
        }

        function closeImage() {
            const fullscreenImage = document.getElementById('fullscreenImage');
            const fullImage = document.getElementById('fullImage');
            fullscreenImage.style.animation = 'fadeOut 0.5s forwards';
            fullImage.style.animation = 'zoomOut 0.5s forwards';
            setTimeout(() => {
                fullscreenImage.style.display = 'none';
                fullscreenImage.style.opacity = '0';
                fullscreenImage.style.animation = 'none';
                fullImage.style.transform = 'scale(0.5)';
                fullImage.style.animation = 'none';
            }, 500);
        }
        

    </script>
 
 
   	<!-- notification message -->
       <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

<!-- logged in user information -->
<?php if (isset($_SESSION['username'])) : ?>
    <div class="user-info">
        <p>Welcome, <strong><?php echo $_SESSION['username'];  ?></strong></p>
        <p><a href="home.php?logout=1" class="logout-link">Logout</a></p>
    </div>
<?php endif ?>

</body>
</html>
