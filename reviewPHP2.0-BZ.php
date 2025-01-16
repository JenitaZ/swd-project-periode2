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

        <nav class="stick">
        </nav>
    </header>

    <?php 
        $value = $_GET['var'];

        if ($value == 'RBLX') {
            $gameInfo = [
                "title" => "Roblox",
                "genre" => "Any Genre",
                "PEGI" => "All",
                "release_date" => "September, 2006",
                "platforms" => "Windows, macOS, iOS, Android, Xbox One, Meta Quest 2, Meta Quest Pro, PlayStation 4, PlayStation 5",
                "description" => "Roblox is an online game platform and game that allows users to program and play games created by themselves or other users.",
                "extradesc" => "Roblox allows users to create and publish their own games, which can then be played by other users, by using its game engine, Roblox Studio. Roblox occasionally hosts real-life and virtual events. They have in the past hosted events such as BloxCon, which was a convention for ordinary players on the platform.",
                "extradesctwo" => "Roblox allows players to buy, sell, and create virtual items which can be used to decorate their virtual character that serves as their avatar on the platform.",
                "ytvideo" => "https://www.youtube.com/embed/eAvXhNlO-rA?si=P8ziomV-dhuoGbMU",
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
        <a href="newestReview.html">Newest Reviews</a> 
    </nav>

    <main id="phpcontainer">
        <section class="flex-contatiner">
            <article class="reviewContainer1">
            <iframe width="650" height="420" src="<?=$gameInfo["ytvideo"]?>" id="Youtube"></iframe>
            </article>

            <section class="containerReview">
                <div class="reviewContenttwo">
                    <h1 id="title smallerTitle"><?= $gameInfo["title"]?></h1>
                    <h2 id="gEnre">GENRE:<?= $gameInfo["genre"]?></h2>
                    <p id="pegi">PEGI:<?=$gameInfo["PEGI"]?></p>
                    <p id="releaseDate">RELEASE:<?=$gameInfo["release_date"]?></p>
                    <p id="releaseDate">PLATFORMS:<?=$gameInfo["platforms"]?></p>
                    <div class="divider divider2"></div>
                    <p id="description"><?=$gameInfo["description"]?></p> 
                </div>       
            </section>
        </section>

        <div>
        <p id= "extradesc"><?=$gameInfo["extradesc"]?></p>
                <br>
            <p id= "extradesctwo"><?=$gameInfo["extradesctwo"]?></p>
        </div>

        <div>

        </div>

        <section class="ratingContainer"></section>

        <div class="rating-container">
    <h1>Rate this game (1-10):</h1>
    <div class="rating-numbers">
        <p class="rating-number" data-value="1">1</p>
        <p class="rating-number" data-value="2">2</p>
        <p class="rating-number" data-value="3">3</p>
        <p class="rating-number" data-value="4">4</p>
        <p class="rating-number" data-value="5">5</p>
        <p class="rating-number" data-value="6">6</p>
        <p class="rating-number" data-value="7">7</p>
        <p class="rating-number" data-value="8">8</p>
        <p class="rating-number" data-value="9">9</p>
        <p class="rating-number" data-value="10">10</p>
    </div>

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
        <script src="ratingTemplets.js"></script>
        <script> 
        pegi = "ALL";

const ageInput = prompt("confirm your age:");

const leeftijd = parseInt(ageInput);
</script>
    </body>
    </html>
<?