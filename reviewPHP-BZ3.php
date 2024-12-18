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
            <h1 class="Name">GameStars</a></h1>

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

        $gameInfo = [
            "UGG" => [
                "title" => "Untitled Goose Game",
            "genre" => "puzzle stealth",
            "PEGI" => "All",
            "release_date" => "20 Sep, 2019",
            "platforms" => "macOS, Switch, Windows, PlayStation 4 and Xbox One",
            "description" => "Players control a goose who bothers the inhabitants of an English village. Players must use the goose's abilities to manipulate objects and non-player characters to complete objectives.",
            "extradesc" => "Set in a quiet English village, the game follows a domestic goose controlled by the player that can honk, duck down, run, flap its wings, and grab objects with its beak to bother villagers.",
            "extradesctwo" => "The village is split up into multiple areas,[1] each of which has a 'to do' list of objectives, such as stealing certain objects or tricking humans into doing specific things",
            "ytvideo" => "https://www.youtube.com/embed/9LL2AtHo1gk?si=Ocp9KI7N3qRiX2hj",
            ],
            "SKY" => [
                "title" => "Sky : Childeren of the light",
            "genre" => "Adventure Game",
            "PEGI" => "All",
            "release_date" => "18 Jul, 2019",
            "platforms" => "iOS, Android, Nintendo Switch, PlayStation 4, Windows",
            "description" => "Call of Duty: Modern Warfare III is a 2023 first-person shooter game. Modern Warfare III retains the realistic, modern setting of its predecessors and continues the sub-series storyline. Players have access to an on-screen map of the area, including a tactical map that outlines objectives and usual equipment, with caches of weapons, gear and specialized equipment on hand.",
            "extradesc" => "In Sky, players explore a once-prosperous kingdom using a cape that allows them to fly. The in-game world consists of seven unique realms, each with a variety of areas to explore, and a theme representing different stages of life.",
            "extradesctwo" => "The game places heavy focus on social mechanics. Players are able to meet and befriend one another, and can unlock new abilities such as chat and sending gifts as their friendship grows.",
            "ytvideo" => "https://www.youtube.com/embed/A3DNTfhUy0k?si=0jtjkriGhiFZT3vX",
            ]
        ];

        switch ($value) {
            case 'UGG':
                $gameInfo = $gameInfo['UGG'];
                break;
        
        
            case 'SKY':
                $gameInfo = $gameInfo['SKY'];
                break;
        
            default:
                echo "Oops, something broke!";
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
            <iframe width="650" height="420" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen id="ytvideo"></iframe>
            </article>

            <section class="containerReview">
                <div class="reviewContenttwo">
                    <h1 id="title smallerTitle"><?= $gameInfo["title"]?></h1>
                    <h1 id="gEnre"><?= $gameInfo["genre"]?></h1>
                    <p id="releaseDate"><?=$gameInfo["release_date"]?></p>
                    <p id="releaseDate"><?=$gameInfo["platforms"]?></p>
                    <div class="divider divider2"></div>
                    <p id="description"><?=$gameInfo["description"]?></p> 
                    <p id= "extradesc"><?=$gameInfo["extradesc"]?></p>
                    <br>
                    <p id= "extradesctwo"><?=$gameInfo["extradesctwo"]?></p>
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
