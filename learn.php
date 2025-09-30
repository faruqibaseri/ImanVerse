<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LEARN</title>
        <link rel="stylesheet" href="learn.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-KwxQKNj2D0XKEW5O/Y6haRH39PE/xry8SAoLbpbCMraqlX7kUP6KHOnrlrtvuJLR" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        <link rel="icon" href="IMANVerse_Logo.png" type="image/icon type">


    </head>
    <body>

        <div id="semua">
        
            <nav>
                <a href="home.php"><img src="IMANVerse_Logo-removebg-preview (1).png" class="logo">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="learn.php">Learn</a></li>
                    <li><a href="DISPLAYQARI.php">Qari</a></li>
                    <li><a href="Aboutus.php">About Us</a></li>
                </ul>
                
            </nav>
                

            <a href="learn_share.php" class="float">
                <i class="fa-regular fa-pen-to-square" style="padding-top: 18px;padding-left: 3px;"></i>
                </a>
                <div class="label-container">
                <div class="label-text">Contribute with us!</div>
                </div>



        
            <h1 style="color: #fff; text-align:center; margin-top: 5%; font-size: 4em; font-family: roboto slab;">Learn</h1>
            <p class="description" style="margin-top: 2%;">Increase your Islamic knowledge in our collection of Doa, Quotes, Fiqh, and Sirah, everyday.
        
        <div style="justify-items: center;">
        <div class="search-box">
                <form method="get" action="learn_search.php" name="search">
                <input type="text" name="query"class="input-search" placeholder="Type to Search...">
                <button class="btn-search"><i class="fa fa-search"></i></button>
            </div>
        </div>
        </form>




        <section class="featured-topics" style="margin-right:200px; margin-left:200px;">
            <h2>Featured Topics</h2>
            <div class="topic-grid">
                <a onclick="showImage('Doa 4.png')" class="topic-card">Doa of the Day</a>
                <a onclick="showImage('Fiqh 8.png')" class="topic-card">Fiqh Insights</a>
                <a onclick="showImage('Quotes 4.png')" class="topic-card">Daily Quotes</a>
                
            </div>
          </section>
        

          <hr style="margin-left: 250px; margin-right: 250px; margin-top: 0%;">


          <div class="container">
            <div class="wrapper">
                <a href="learn_doa.php"><div class="card"></div></a>
              <div class="caption">Doa</div>
            </div>
            <div class="wrapper">
                <a href="learn_quotes.php"><div class="card"></div></a>
              <div class="caption">Quotes</div>
            </div>
            <div class="wrapper">
                <a href="learn_fiqh.php"> <div class="card"></div></a>
              <div class="caption">Fiqh</div>
            </div>
            <div class="wrapper">
                <a href="learn_sirah.php"> <div class="card"></div></a>
              <div class="caption">Sirah</div>
            </div>

          </div>


          <a href="learn_share.php" class="float">
            <i class="fa-regular fa-pen-to-square" style="padding-top: 18px;padding-left: 3px;"></i>
            </a>
            <div class="label-container">
            <div class="label-text">Contribute with us!</div>
            </div>


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


        <script>
            function showSuggestions() {
        const suggestionList = document.querySelector('.suggestion-list');
        suggestionList.style.display = 'block';
    }
    
    function hideSuggestions() {
        setTimeout(() => {
            const suggestionList = document.querySelector('.suggestion-list');
            suggestionList.style.display = 'none';
        }, 200); // Delay to allow click selection
    }
    
    function selectSuggestion(element) {
        const inputSearch = document.querySelector('.input-search');
        inputSearch.value = element.textContent;
        hideSuggestions();
    }
    
    function filterSuggestions() {
        const inputSearch = document.querySelector('.input-search');
        const filter = inputSearch.value.toLowerCase();
        const suggestions = document.querySelectorAll('.suggestion-list li');
    
        suggestions.forEach(item => {
            if (item.textContent.toLowerCase().includes(filter)) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }
        </script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>


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
        </div>  

    </body>
</html>