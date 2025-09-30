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
    <title>Fiqh</title>
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
        <h1>Fiqh</h1>
        <p class="description">Essential Islamic rulings and guidance for everyday life.</p>
       





        <!-- button download -->
        
         <div id="wrap">
            <?php $filename = 'Fiqh Collection.zip';
            echo "<a href='learn_download.php?filename=$filename' class='btn-slide2'>"
            ?>
              <span class="circle2"><i class="fa fa-download" style="padding-top: 10px;"></i></span>
              <span class="title2">Download All</span>
              <span class="title-hover2">Click here</span>
            </a>
            
            </div>
      

      
      
      
      
          <div class="blocks">
            <div class="block" onclick="showImage('Fiqh 1.png')">
                <img src="Fiqh 1.png" alt="Fiqh 1">

            </div>
            
            <div class="block" onclick="showImage('Fiqh 2.png')">
            <img src="Fiqh 2.png" alt="Fiqh 2">
                
            </div>
            
            <div class="block" onclick="showImage('Fiqh 3.png')">
                <img src="Fiqh 3.png" alt="Fiqh 3">

            </div>

            <div class="block" onclick="showImage('Fiqh 4.png')">
                <img src="Fiqh 4.png" alt="Fiqh 4">

            </div>
            
            <div class="block" onclick="showImage('Fiqh 5.png')">
            <img src="Fiqh 5.png" alt="Fiqh 5">
                
            </div>
            
            <div class="block" onclick="showImage('Fiqh 6.png')">
                <img src="Fiqh 6.png" alt="Fiqh 6">

            </div>

            <div class="block" onclick="showImage('Fiqh 7.png')">
                <img src="Fiqh 7.png" alt="Fiqh 7">

            </div>
            
            <div class="block" onclick="showImage('Fiqh 8.png')">
            <img src="Fiqh 8.png" alt="Fiqh 8">
                
            </div>
            
            <div class="block" onclick="showImage('Fiqh 9.png')">
                <img src="Fiqh 9.png" alt="Fiqh 9">

            </div> 
        </div>
        <div style="display: flex;margin-top:50px;justify-content: center;gap: 20px;" >        
        <a href="learn_quotes.php" class="btn" style="margin-left: 0px;margin-right: 0px;"> <i class="fa-solid fa-angle-left"></i></a>
        <a href="learn_sirah.php" class="btn"style="margin-left: 0px;margin-right: 0px;"> <i class="fa-solid fa-angle-right"></i></a>
</div>

        
    </section>

    <a href="learn_share.php" class="float">
                <i class="fa-regular fa-pen-to-square" style="padding-top: 18px;padding-left: 3px;"></i>
                </a>
                <div class="label-container">
                <div class="label-text">Contribute with us!</div>
                </div>


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
        <button onclick="closeImage()" class="close-btn"><i class="fa-solid fa-xmark"></i></button>
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
