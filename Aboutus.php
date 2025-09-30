<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="Aboutus.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap" rel="stylesheet"> 
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4ee2089322.js" crossorigin="anonymous"></script>
    <link rel="icon" href="IMANVerse_Logo.png" type="image/icon type">
</head>

<body>
    <div id="semua">
        <nav>
            <a href="home.html"><img src="IMANVerse_Logo-removebg-preview (1).png" class="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="learn.html">Learn</a></li>
                <li><a href="DISPLAYQARI.html">Qari</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
            </ul>
        </nav>
    </div>

    <h1 style="color: #fff; text-align:center; margin-top: 2%; font-size: 4em; font-family: roboto slab;"> Our Team</h1>
    <div class="container">
        <div class="img-box">
            <img src="nazril.png" width="200px">
            <p class="title">Nazril Fahim Ahmad Zabidi</p>
        </div>
        <div class="img-box">
                <img src="shidi.png" width="200px">
            <p class="title">Ahmad Murshidi Semail</p>
        </div>
        <div class="img-box">
            <img src="faruqi.png" width="200px">
            <p class="title">Muhammad Faruqi Baseri</p>
        </div>
        <div class="img-box">
            <img src="nabil.png" width="200px">
            <p class="title">Nabil Amir</p>
        </div>
        <div class="img-box">
            <img src="hilmi.png" width="200px">
            <p class="title">Muhammad Hilmi Razali</p>
        </div>
        <div class="img-box">
            <img src="hakim.png" width="200px">
            <p class="title">Abdul Hakim Aouis Qarney</p>
        </div>
    </div>




    <div class="container" style="color: white;">
        <h2 style="font-family: roboto slab;">Frequently Asked Questions</h2>
        <div class="accordion">
          <div class="accordion-item">
            <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What is IMANVerse?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>IMANVerse is a website developed to provide access to qari who are famous for their melodious recitation of the holy verses of the Al-Quran, as well as sharing daily prayer guides, quotes, sirah, and fiqh. The purpose is to foster understanding and love for the Al-Quran and Islamic knowledge.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title">How can I get started with IMANVerse?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>You can get started by exploring our Learn section, Qari features, and more from the navigation menu above.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title">Who are the imams featured on IMANVerse?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>We feature four famous imams: Sheikh Mishary Al-Afasy, Sheikh Abdul Rahman Al-Sudais, Sheikh Bandar Baleelah, and Sheikh Saad Al-Ghamidi. Each imam is accompanied by their biodata to provide additional information to users.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title">How can I listen to Quran recitations by these imams?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>You can listen to Quran recitations by these imams via the Qari section of our website. Select the imam's name and click the "Play" button under the biodata section.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-5" aria-expanded="false"><span class="accordion-title">What type of content on sirah and fiqh is provided on IMANVerse?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>We provide concise graphical information about the life of the Prophet Muhammad (PBUH) as well as basic fiqh guidelines that are relevant to daily life, such as fasting, prayer, and muamalah. This content is prepared in an easy-to-understand manner for all levels of society and available for download for offline view.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-6" aria-expanded="false"><span class="accordion-title">Who are the team members who created IMANVerse?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>Our team comprises Nazril Fahim Ahmad, Ahmad Murshidi Semail, Muhammad Faruqi Baseri, Nabil Amir, Muhammad Hilmi Razali, and Abdul Hakim.</p>
            </div>
          </div>
          <div class="accordion-item">
            <button id="accordion-button-7" aria-expanded="false"><span class="accordion-title">How can I contact IMANVerse for any questions or suggestions?</span><span class="icon" aria-hidden="true"></span></button>
            <div class="accordion-content">
              <p>You can contact us via the Contact Us form on the website. Alternatively, you can send an email to imanverse@gmail.com in the contact us section.</p>
            </div>
          </div>
        </div>
      </div>

<script>

const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');
      
      for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
      }
      
      if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
      }
    }
    
    items.forEach(item => item.addEventListener('click', toggleAccordion));
    
    </script>

<div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 >Give Us Your Feedback</h1>
                    <p><i class="fa-solid fa-paper-plane"></i>imanverse@gmail.com</p>
                    <p><i class="fa-solid fa-square-phone"></i>018-9606788</p>
                    <div class="social-icons">
                    </div>
                   
                </div>
                <div class="contact-right">
                    <form method="post" action="aboutus_feedback.html">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name="email" placeholder="Your Email" required>
                        <textarea name="comment" rows="6" placeholder="Your Feedback"></textarea>
                       <div style="width: 70%;"><input type="range" min="1" max="10" value="7" oninput="this.nextElementSibling.value = this.value" name="rating">
                        <output>7</output></div>
                        <button type="submit" class="btn btn2">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <footer class="footer">
        <div class="footer-logo">
            <a href="home.html"><img src="IMANVerse_Logo-removebg-preview (1).png"></a>
        </div>
    
        <div class="footer-links">
            <div>
                <h4>Company</h4>
                <a href="home.html">Home</a>
                <a href="learn.html">Learn</a>
                <a href="DISPLAYQARI.html">Qari</a>
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
</body>

</html>
