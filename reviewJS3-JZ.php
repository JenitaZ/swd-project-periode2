<?php
    include "lib/PHP/reviews.php";
?>

<!DOCTYPE html>
<html lang="en">
<!-- Review 3 JS -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Review 3 | JS">
    <meta name="keywords" content="NieR:Automata, STALKER2, JS review">
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
                <img src="" alt="" id="reviewImg" class="reviewImg-AC">
                <iframe src="" id="reviewVid"></iframe>
            </article>
      

            <section class="containerReview">
                <div class="reviewContent">
                    <h1 id="title"></h1>
                    <p id="releaseDate"></p>
                    <p id="releasedPlatforms"></p>
                    <div class="divider divider2"></div>
                    <p id="description"></p>
                    <p id="genres" class="smallGrayText genresjs">genres: </p>
                </div>
            </section>
            <button onclick="changeGameImg()" id="btnRight">&#9654</button>
            <button onclick="changeGameImgL()" id="btnLeft">&#9664;</button>
        
        </section>
       

        <section class="reviewContainerC">
            <p id="wallOfText"><?=$gameInfo["gameDesc"]?></p>
        </section>
        

        <div class="userRating averageRating">
            <h1 class="avgRatingTxt"><span id="bs">Overall rating: <?=$averageRating?> </span> </h1>
            <div class="dividerNeon"></div>
            
            <section class="rProfileContainer">
                <section class="profileContainerL">
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" class="pfps">
                    <section class="ratingCircles"></section>
                </section>

                <form class="rTextContainer" action="" method="post">
                    <input type="text" placeholder="name" name="name" id="nameInput" autocomplete="off" required>
                    <textarea rows="3" cols="74"  name="review-txt"></textarea>
                    <input type="submit" value="submit review" name="inputValue">
                    <fieldset class="reviewBtns">
                        <input type=radio name=r class="" value="10">
                        <input type=radio name=r class="" value="9">
                        <input type=radio name=r class="" value="8">
                        <input type=radio name=r class="" value="7">
                        <input type=radio name=r class="" value="6">
                        <input type=radio name=r class="" value="5">
                        <input type=radio name=r class="" value="4">
                        <input type=radio name=r class="" value="3">
                        <input type=radio name=r class="" value="2">
                        <input type=radio name=r class="" value="1">
                        </fieldset>
                </form>
            </section>
            
        </div>
         <?=$output?>
    </main>


    <!-- start footer -->
    <footer class="footer-reviews">
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
                    <a href="" class="iconlinks"><img src="img/socialmedia/tk-logo.png" alt="Tiktok link" class="annoyance"></a>
                </section>
                </p>
            </section>
        </div>
    </footer>

    <script src="lib/index.js"> </script>
    <script src="lib/paramsReview3.js"> </script>
    <script src="lib/ratingCircles.js"></script>
       
   

</body>

</html>