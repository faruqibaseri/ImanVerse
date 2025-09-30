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
    <title>Abdul Rahman Al-Sudais</title>
    <link rel="stylesheet" href="sudais.css">

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
                    <img src="sudais.png">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">SHEIKH ABDUL RAHMAN AL-SUDAIS</h1>
                    <p> Sheikh Abdul Rahman Al-Sudais is the chief of the Imams of Masjid Al-Haram in Makkah. A world-renowned Qari, he was born on February 10, 1960, in Saudi Arabia. He’s originally from the Anazzah clan. He ranks as one of the most popular Imams and famous celebrities in Saudi Arabia.</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')"> Education</p>
                        <p class="tab-links" onclick="opentab('experience')"> Recognition & Career</p>

                    </div>
                    <div class="tab-contents active-tab" id="skills"> 
                        <ul>
                            <li><span>Hafiz al-Quran</span><br>Memorised the Qur’an at the age of 12.</li>
                            <li><span>In 1983</span><br>Obtained a degree in Sharia from Riyadh University.</li>
                            <li><span>In 1987</span><br>Holds a Master’s in Islamic fundamentals from the Sharia College of Imam Muhammad bin Saud Islamic University.</li>
                            <li><span>In 1995 </span><br>Received his PhD in Islamic Sharia from Umm al-Qura University while working there as an assistant professor after serving at Riyadh University.</li>
                        </ul>
                    </div>
                    <div class="tab-contents" id="experience">
                        <ul>
                            <li><span>In 2005</span><br>He was named by the Dubai International Holy Qur’an Award (DIHQA) Organising Committee as its 9th annual “Islamic Personality of the Year” in recognition of his devotion to the Quran and Islam.</li>
                            <li><span>In 1984</span><br>At age 24, Al-Sudais took up his imamate and led his first sermon at the Grand Mosque in Mecca.</li>
                            <li><span>Position in two Holy Mosque</span><br>Al-Sudais is also the General President for the Affairs of the Two Holy Mosques.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <P class="sample">Recitation of Quranic verse:</P>
    <div class="audio-player">
        <audio controls>
            <source src="abdul-rahman-al-sudais-102-qurancentral.com-192.mp3" type="audio/mp3" class="btn">Al-Fatihah </a>
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
