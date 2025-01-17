<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Review</title>

    <meta name="description" content="Gameshop Website">
    <meta name="keywords" content="Review games">
    <meta name="author" content="Bingyi Zhou">
    <link rel="stylesheet" href="css/index.css"> 

</head>

<body class="Home Homereview">
    <!-- navigatie -->
    <header class="header-template review-header">
        <article class="logo gameslog">
            <a href="index.html"><img src="img/logo/gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>
        </article>

    </header>

    <?php 
        $value = $_GET['var'];

        if ($value == 'OV') {
            $gameInfo = [
                "title" => "OverWatch",
                "release_date" => "24 May, 2016",
                "platforms" => "supported across all platforms",
                "description" => "OverWatch is an online team-based game generally played as a first-person shooter. The game featured several different game modes, principally designed around squad-based combat with two opposing teams of six players each. Players selected one of over two dozen pre-made hero characters from one of three class types",
                "image" => "https://th.bing.com/th/id/R.da5b80a7b2168b28de75f83ce9aba411?rik=BBQsiSvTAOfkKQ&pid=ImgRaw&r=0"
            ];
        } elseif ($value == 'LOZ') {
            $gameInfo = [
                "title" => "The Legend of Zelda: Breath of The Wild",
                "release_date" => "March 3, 2017",
                "platforms" => "Nintendo Switch and Wii U",
                "description" => "Set at the end of the Zelda (including all Zelda game before Breath of The Wild) timeline, the player controls an amnesiac Link as he sets out to save Princess Zelda and prevent Calamity Ganon from destroying the world. Players explore the open world of Hyrule while they collect items and complete objectives such as puzzles or side quests.",
                "image" => "https://hype.games/_next/image?url=https%3A%2F%2Fimg.hype.games%2Fcdn%2Fc64bd743-e83f-4677-a53b-e03fdc4f6566%5BBHN-Nintendo%5D-The-Legend-of-Zelda-Breath-of-the-Wild%20(1).png&w=3840&q=75"
            ];
    
        } else {
        echo "Oops, I don't think that works!";
        }    
    ?>


    <nav class="navbar">
        <a href="index.html">Home</a>
        <a href="games.html">Games</a>
        <a href="Merchandise.html">Merchandise</a>
        <a href="contact.html">Contact</a>
        <a href="newestReview.php">Newest Reviews</a> 

    </nav>

    <main id="phpcontainer">
        <section class="flex-contatiner">
            <article class="reviewContainer1">
                <img src=<?=$gameInfo["image"];?> alt="Image of the game" id="reviewImg" >
            </article>

            <section class="containerReview">
                <div class="reviewContenttwo">
                    <h1 id="title smallerTitle"><?= $gameInfo["title"]?></h1>
                    <p id="releaseDate"><?=$gameInfo["release_date"]?></p>
                    <p id="releaseDate"><?=$gameInfo["platforms"]?></p>
                    <div class="divider divider2"></div>
                    <p id="description"><?=$gameInfo["description"]?></p> 
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