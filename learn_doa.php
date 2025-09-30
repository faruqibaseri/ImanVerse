 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doa</title>
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
            <a href="home.html"><img src="IMANVerse_Logo-removebg-preview (1).png" class="logo">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="learn.html">Learn</a></li>
                <li><a href="DISPLAYQARI.html">Qari</a></li>
                <li><a href="Aboutus.html">About Us</a></li>
            </ul>
        </nav>
    </div>
    
    
    <section class="main-section">
        <h1>Doa</h1>
        <p class="description">A collection of Doa for guidance, comfort, and spiritual connection with Allah SWT. </p>
       





        <!-- button download -->
        
         <div id="wrap">
        <a href="Doa_Collection.zip" class='btn-slide2' download>
              <span class="circle2"><i class="fa fa-download" style="padding-top: 10px;"></i></span>
              <span class="title2">Download All</span>
              <span class="title-hover2">Click here</span>
            </a>
            
            </div>
      


      
      
      
          <div class="blocks">
            <div class="block" onclick="showImage('Doa 1.png')">
                <img src="Doa 1.png" alt="Doa 1">

            </div>
            
            <div class="block" onclick="showImage('Doa 2.png')">
            <img src="Doa 2.png" alt="Doa 2">
                
            </div>
            
            <div class="block" onclick="showImage('Doa 3.png')">
                <img src="Doa 3.png" alt="Doa 3">

            </div>

            <div class="block" onclick="showImage('Doa 4.png')">
                <img src="Doa 4.png" alt="Doa 4">

            </div>
            
            <div class="block" onclick="showImage('Doa 5.png')">
            <img src="Doa 5.png" alt="Doa 5">
                
            </div>
            
            <div class="block" onclick="showImage('Doa 6.png')">
                <img src="Doa 6.png" alt="Doa 6">

            </div>

            <div class="block" onclick="showImage('Doa 7.png')">
                <img src="Doa 7.png" alt="Doa 7">

            </div>
            
            <div class="block" onclick="showImage('Doa 8.png')">
            <img src="Doa 8.png" alt="Doa 8">
                
            </div>
            
            <div class="block" onclick="showImage('Doa 9.png')">
                <img src="Doa 9.png" alt="Doa 9"id='DoaOfTheDay'>

            </div> 
        </div>
    <div style="display: flex; gap:480px; margin-top:50px;" >        
        <!-- <a href="learn.html" class="btn"> <i class="fa-solid fa-angle-left"></i></a> -->
        <a href="learn_quotes.html" class="btn"> <i class="fa-solid fa-angle-right"></i></a>
</div>

        
    </section>

    <a href="learn_share.html" class="float">
                <i class="fa-regular fa-pen-to-square" style="padding-top: 18px;padding-left: 3px;"></i>
                </a>
                <div class="label-container">
                <div class="label-text">Contribute with us!</div>
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

</body>
</html>
