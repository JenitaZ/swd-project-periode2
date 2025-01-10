<?php include "lib/PHP/reviewsNew.php"?> <!-- Reviews -->

<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Homepage voor de gamereview pagina">
    <meta name="keywords" content="Games Review Top3 home">
    <meta name="author" content="Jenita Zheng">

    <title>Gamestars</title>
    <link rel="icon" href="###" type="img/x-icon"><!-- niet vergeten -->
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

 <body class="Home">

    <header class="headerTemplate">
        <a class="logo">
            <a href="index.html"><img src="img/logo/gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <!--TODO: #6 make final version of logo-->
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>

            <div class="toggle">
                <h1 id="counter"></h1>
                <input type="checkbox" id="mode-toggle" class="toggle__input">
                <label for="mode-toggle" class="toggle__label"></label>
            </div>
        </article>

    </header>


    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="games.html">Games</a>
        <a href="Merchandise.html">Merchandise</a>
        <a href="contact.html">Contact</a>
        <a href="newestReview.php">Newest Reviews</a> 

    </nav>

    <main>
        <div id="recent-reviews">
            <div id="recentReviewC">
                <iframe id="index-img" <?=$games["BOK"]["vid"]?>></iframe>
                <h1><?=$games["BOK"]["title"]?> <span class="smallGrayText"><?=$games["BOK"]["dev"]?></span></h1>
                <p class="smallGrayText"><?=$games["BOK"]["release_date"]?></p>
                <p class="smallGrayText"><?=$games["BOK"]["platforms"]?></p>
                <p id="recent-review-txt"><?=$games["BOK"]["description"]?></p>
                <p class="smallGrayText">genres: <?=$games["BOK"]["genre"]?></p>
            </div>
        
            <section id="newest-reviews">
             <?php
                foreach ($reviews as $game => $users) {
                    if ($game === "BOK") {
                        foreach ($users as $user => $info) {
                            echo '
                                <div class="user-review">
                                    <p class="recent-pfps">'. $info["rated"] .'</p>
                                    <span>'. $info["username"] .'</span>
                                    <p id="user-review">'. $info["review"] .'</p>
                                </div>
                            ';
                        }
                    }
                }
            ?> 
            </section>
        </div>

<!-- 
        <div id="recent-reviews">
            <div id="recentReviewC">
                <iframe id="index-img" <?=$games["NR"]["vid"]?>></iframe>
                <h1><?=$games["NR"]["title"]?></h1>
                <p class="smallGrayText"><?=$games["NR"]["release_date"]?></p>
                <p class="smallGrayText new-gametitle"><?=$games["NR"]["dev"]?></p>
                <p class="smallGrayText">Platforms: <?=$games["NR"]["platforms"]?></p>
                <p id="recent-review-txt"><?=$games["NR"]["description"]?></p>
                <p class="smallGrayText genre">genre: <?=$games["NR"]["genre"]?></p>

            </div>
        
            <section id="newest-reviews">
            <?php
                foreach ($reviews as $game => $users) {
                    if ($game === "NR") {
                        foreach ($users as $user => $info) {
                            echo '
                                <div class="user-review">
                                    <p class="recent-pfps">'. $info["rated"] .'</p>
                                    <span>'. $info["username"] .'</span>
                                    <p id="user-review">'. $info["review"] .'</p>
                                </div>
                            ';
                        }
                    }
                }
            ?> 
            </section>
        </div>


        <div id="recent-reviews">
            <div id="recentReviewC">
                <iframe id="index-img" <?=$games["STA"]["vid"]?>></iframe>
                <h1><?=$games["STA"]["title"]?><span class="smallGrayText new-gametitle"><?=$games["STA"]["dev"]?></span></h1>
                <p class="smallGrayText"><?=$games["STA"]["release_date"]?></p>
                <p class="smallGrayText">Platforms: <?=$games["STA"]["platforms"]?></p>                
                <p id="recent-review-txt"><?=$games["STA"]["description"]?></p>
                <p class="smallGrayText">genres: <?=$games["NR"]["genre"]?></p>

            </div>
        
            <section id="newest-reviews">
             <?php
                foreach ($reviews as $game => $users) {
                    if ($game === "STA") {
                        foreach ($users as $user => $info) {
                            echo '
                                <div class="user-review">
                                    <p class="recent-pfps">'. $info["rated"] .'</p>
                                    <span>'. $info["username"] .'</span>
                                    <p id="user-review">'. $info["review"] .'</p>
                                </div>
                            ';
                        }
                    }
                }
                ?> 
            </section> -->
        </div>

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

    <script src="lib/index.js"></script> <!-- nav -->
    <script src="lib/toggle-count.js"></script> 
 


</body>

</html>