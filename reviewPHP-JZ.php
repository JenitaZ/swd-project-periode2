<?php include "lib/PHP/lib1.php";?> <!-- arrays review 1 -->

<!-- review 1, PHP-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Review 1 | PHP">
    <meta name="keywords" content="Rainworld Stardew-valley review PHP">
    <meta name="author" content="Jenita Zheng">

    <title>Games</title>
    <link rel="icon" href="img/logo/IMG_2997.png" type="img/x-icon">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    
    <script src="lib/index.js" defer></script>
</head>


<body class="Home Homereview">
    <!-- navigatie -->
    <header class="header-template review-header">
        <article class="logo gameslog">
            <a href="index.html"><img src="img/logo/gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>
        </article>
   
    </header>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="games.html">Games</a>
        <a href="Merchandise.html">Merchandise</a>
        <a href="contact.html">Contact</a>
        <a href="newestReview.php">Newest Reviews</a> 
        <a href="newestReview.php">Newest Reviews</a> 

    </nav>

    <main id="phpcontainer">
        <section class="flex-contatiner"> 
            <article class="reviewContainer1">
                <img src=<?=$gameInfo["image"];?> alt="Image of the game" id="reviewImg" >
            </article>

            <section class="containerReview">
                <div class="reviewContent">
                    <h1 id="title"><?= $gameInfo["title"]?></h1>
                    <p id="releaseDate">Releasedate: <?=$gameInfo["release_date"]?></p>
                    <p id="releaseDate">Platforms: <?=$gameInfo["platforms"]?></p>
                    <div class="divider divider2"></div>
                    <p id="description"><?=$gameInfo["description"]?></p> 
                    <p id="genres" class="smallGrayText game-genre1">genres: <?=$gameInfo["genre"]?></p>
                </div>       
            </section>
        </section>
    </main>


    <footer>
        <div class="footer-content">
            <section class="footer-left">
                <span class="footer-header">Contact</span> 
                <p class="footer-left">For any questions you can send us email directly through our <a href="contact.html" class="footer-header2">contact page!</a></p>
            </section>

            <section class="footer-right">
                <span class="footer-header">Follow us</span>
                <div class="divider"></div>
                
                <section class="icons">
                    <a href="" class="iconlinks"><img src="img/socialmedia/yt-logo.png" alt="Youtube link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/ig-logo.png" alt="Instagram link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/X-logo.png" alt="X(Twitter) link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/tk-logo.png" alt="Tiktok link" class="annoyance"></a>
                </section>
               
            </section>
        </div>
    </footer>

</body>

</html>