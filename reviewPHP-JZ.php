<?php include "lib/PHP/library.php";?>
<!-- review 1, PHP -->
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
    <link rel="icon" href="###" type="img/x-icon"> <!-- brrr -->
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>


<body class="Home Homereview">
    <!-- navigatie -->
    <header class="headerTemplate review-header">
        <article class="logo gameslog">
            <a href="index.html"><img src="img/logo/gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>
        </article>

        <nav class="stick">
        </nav>


   
    </header>
    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="games.html">Games</a>
        <a href="Merchandise.html">Merchandise</a>
        <a href="contact.html">Contact</a>
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
                </div>       
            </section>
        </section>

        <section class="ratingContainer"></section>
    </main>


    <footer>
        <div class="footer-content">
            <section class="footer-left">
                <p class="footer-left">
                <h1 class="footer-header">Contact</h1> For any questions you can send us email directly through our <a href="contact.html" class="footer-header2">contact page!</a></span>
                </p>
            </section>

            <section class="footer-right">
                <p>
                <span class="footer-header">Follow us</span>
                <div class="divider"></div>

                <section class="icons">
                    <a href="" class="iconlinks"><img src="img/socialmedia/yt-logo.png" alt="Youtube link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/ig-logo.png" alt="Instagram link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/X-logo.png" alt="X(Twitter) link"></a>
                    <a href="" class="iconlinks"><img src="img/socialmedia/tk-logo.png" alt="Tiktok link"
                            class="annoyance"></a>
                </section>
                </p>
            </section>
        </div>
    </footer>



    <script src="lib/index.js"></script>


</body>

</html>