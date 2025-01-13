<?php include "lib/PHP/reviewsNew.php"?> <!-- Reviews -->

<!DOCTYPE html>
<html lang="en"> 

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Newest reviews">
    <meta name="keywords" content="Games Review New Reviews">
    <meta name="author" content="Jenita Zheng">

    <title>Newest Reviews</title>
    <link rel="icon" href="img/logo/IMG_2997.png" type="img/x-icon">
    <link rel="stylesheet" href="css/index.css" type="text/css">

     <!-- nav, toggle, slideshow -->
    <script src="lib/index.js" defer></script>
    <script src="lib/toggle-count.js" defer></script> 
    <script src="lib/slideshowNew.js" defer></script>

</head>

 <body class="Home">

    <header class="header-template">
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
        
        <!-- <button onclick="changeGameImg()" id="btnRight" class="btn-new">&#9654</button>
        <button onclick="changeGameImgL()" id="btnLeft" class="btn-new">&#9664;</button>  -->
        
            
        <div class="recent-reviews">
            <div class="recentReviewC">
                <iframe class="index-vid" <?=$games["BOK"]["vid"]?>></iframe>
                <section class="float-right">
                    <h1><?=$games["BOK"]["title"]?> <span class="smallGrayText"><?=$games["BOK"]["dev"]?></span></h1>
                    <p class="smallGrayText"><?=$games["BOK"]["release_date"]?></p>
                    <p class="smallGrayText"><?=$games["BOK"]["platforms"]?></p>
                    <p class="recent-review-txt"><?=$games["BOK"]["description"]?></p>
                    <p class="smallGrayText">genres: <?=$games["BOK"]["genre"]?></p>
                </section>
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


        <div class="recent-reviews">
            <div class="recentReviewC">
                <iframe class="index-vid" <?=$games["NR"]["vid"]?>></iframe>
                 <section class="float-right">
                    <h1><?=$games["NR"]["title"]?></h1>
                    <p class="smallGrayText"><?=$games["NR"]["release_date"]?></p>
                    <p class="smallGrayText new-gametitle"><?=$games["NR"]["dev"]?></p>
                    <p class="smallGrayText">Platforms: <?=$games["NR"]["platforms"]?></p>
                    <p class="recent-review-txt"><?=$games["NR"]["description"]?></p>
                    <p class="smallGrayText genre">genre: <?=$games["NR"]["genre"]?></p>
                </section>

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


        <div class="recent-reviews">
            <div class="recentReviewC">
                <iframe class="index-vid" <?=$games["STA"]["vid"]?>></iframe>
                <h1><?=$games["STA"]["title"]?><span class="smallGrayText new-gametitle"><?=$games["STA"]["dev"]?></span></h1>
                <section class="float-right">
                    <p class="smallGrayText"><?=$games["STA"]["release_date"]?></p>
                    <p class="smallGrayText">Platforms: <?=$games["STA"]["platforms"]?></p>                
                    <p class="recent-review-txt"><?=$games["STA"]["description"]?></p>
                    <p class="smallGrayText">genres: <?=$games["STA"]["genre"]?></p>
                </section>
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
            </section>
        </div>

        <div class="recent-reviews">
            <div class="recentReviewC">
                <iframe class="index-vid"<?=$games["OM"]["vid"]?>></iframe>
                <h1><?=$games["OM"]["title"]?><span class="smallGrayText new-gametitle"><?=$games["OM"]["dev"]?></span></h1>
                <section class="float-right">
                    <p class="smallGrayText"><?=$games["OM"]["release_date"]?></p>
                    <p class="smallGrayText">Platforms: <?=$games["OM"]["platforms"]?></p>                
                    <p class="recent-review-txt"><?=$games["OM"]["description"]?></p>
                    <p class="smallGrayText">genres: <?=$games["OM"]["genre"]?></p>
                </section>
            </div>
        
            <section id="newest-reviews">
             <?php
                foreach ($reviews as $game => $users) {
                    if ($game === "OM") {
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