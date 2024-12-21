<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="Gameshop Website">
    <meta name="keywords" content="Review games">
    <meta name="author" content="Bingyi Zhou">
    <link rel="stylesheet" href="css/index.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="Home Homereview">
    <!-- navigatie -->
    <header class="headerTemplate review-header">
        <article class="logo gameslog">
            <a href="index.html"><img src="img\logo\gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>
            <section class="zoekbalk">
                <input type="text" placeholder="search">
                <div>
                    <button type="submit" class="searchbtn"><i class="fa fa-search"></i></button>
                </div>

                <!-- light/dark mode toggle -->
                <div class="toggle">
                    <input type="checkbox" id="mode-toggle" class="toggle__input">
                    <label for="mode-toggle" class="toggle__label"></label>
                </div>

                <i class="fa fa-user-circle login"></i>
            </section>
        </article>

        <nav class="stick">
        </nav>
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
                "image" => "https://assets.nintendo.com/image/upload/c_fill,w_1200/q_auto:best/f_auto/dpr_2.0/ncom/en_US/games/switch/t/the-legend-of-zelda-breath-of-the-wild-switch/hero"
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

        <section class="ratingContainer"></section>
    </main>

    
    <footer>
        <div class="footer-content">
            <section class="footer-left">
                <p class="footer-left">
                <h1 class="footer-header">Contact</h1>
                For any questions you can send us email directly through our <a href="contact.html"
                    class="footer-header2">contact page!</a>
                </p>
            </section>
    
                <section class="footer-right">
                    <p>
                        <span class="footer-header">Follow us</span>
                    <div class="divider"></div>
    
                <section class="icons">
                    <a href="" class="iconlinks"><img src="img\socialmedia\yt-logo.png" alt="Youtube link"></a>
                    <a href="" class="iconlinks"><img src="img\socialmedia\ig-logo.png" alt="Instagram link"></a>
                    <a href="" class="iconlinks"><img src="img\socialmedia\X-logo.png" alt="X(Twitter) link"></a>
                    <a href="" class="iconlinks"><img src="img\socialmedia\tk-logo.png" alt="Tiktok link"
                            class="annoyance"></a>
                    </section>
                    </p>
                </section>
            </div>
        </footer>
