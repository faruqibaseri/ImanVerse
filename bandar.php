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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sheikh Bandar Baleela</title>
    <link rel="stylesheet" href="bandar.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kings&family=Margarine&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fustat:wght@200..800&family=Kings&family=Margarine&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Playwrite+IT+Moderna:wght@100..400&family=Wittgenstein:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="icon" href="IMANVerse_Logo.png" type="image/icon type">


    <script src="https://kit.fontawesome.com/4ee2089322.js" crossorigin="anonymous"></script>
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
            
        </div>
    </div>
</body>
</html>

    <!--------------qarireview--------->
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="bandar.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">SHEIKH BANDAR BIN ABDUL AZEEZ BALEELAH</h1>
                    <p> Sheikh Bandar Baleelah is one of the current Imams of Masjid Al Haram in Makkah, Saudi Arabia. A royal decree was issued in October 2013 to appoint him as Imam of the Grand Mosque. King Salman issued a royal decree assigning Baleelah to deliver the sermon on Arafat Day.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')"> Education</p>
                        <p class="tab-links" onclick="opentab('experience')"> Recognition & Career</p>

                    </div>
                    <div class="tab-contents active-tab" id="skills"> 
                        <ul>
                            <li><span>In 1996</span><br>He earned his bachelor’s degree from Umm Al-Qura University pursuing Islamic law at Shariah College.</li>
                            <li><span>Master’s Degree</span><br>In Islamic jurisprudence (Fiqh) from the same university and graduated with first-class honours.</li>
                            <li><span>In 2008</span><br>Earned his PhD from the Islamic University of Madinah with first-class honours.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>In the Institute of “Al Haram Al Maki Al Sharif”</span><br>Worked as a teacher of “Al Fiqh” in higher department.</li>
                            <li><span>In “Al Taif” University.</span><br>Worked as an assistant teacher.</li>
                            <li><span>In “Al Amira Nouf” Mosque</span><br>He is an Imam and a preacher too in “Al Aziziyah” region in Mecca.</i>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <P class="sample">Recitation of Quranic verse:</P>
    <div class="audio-player">
        <audio controls>
            <source src="bandar-balila-106-muslimcentral.com.mp3" type="audio/mp3" class="btn">Al-Fatihah </a>
                </audio>
</br>
</br>
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

  
   

    <script>

        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontents = document.getElementsByClassName("tab-contents");

        function opentab(tabname){
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontent.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");
            document.getElementById(tabname).classList.add("active-tab");
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
