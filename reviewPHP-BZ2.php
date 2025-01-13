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

            $gameInfo = [
                "0" => [
                    "title" => "Valorant",
                "release_date" => "June 2, 2020",
                "platforms" => "Windows, Xbox Series X/S and Playstation 5",
                "description" => "Valorant is a team-based first-person tactical hero shooter set in the near future. Players play as one of a set of Agents. Every player starts each round with a 'classic' pistol and one or more 'signature ability' charges.",
                "image" => "https://pchocasi.com.tr/wp-content/uploads/2023/08/valorant-1.jpg",
                "PEGI" => 16
                ],
                "1" => [
                    "title" => "Call of Duty®: Modern Warfare® III",
                "release_date" => "8 Nov, 2011",
                "platforms" => "PlayStation 5 ,PlayStation 4, Xbox Series X|S ,Xbox One and PC",
                "description" => "Call of Duty: Modern Warfare III is a 2023 first-person shooter game. Modern Warfare III retains the realistic, modern setting of its predecessors and continues the sub-series storyline. Players have access to an on-screen map of the area, including a tactical map that outlines objectives and usual equipment, with caches of weapons, gear and specialized equipment on hand.",
                "image" => "https://bnetcmsus-a.akamaihd.net/cms/blog_header/um/UMPTLAFNBS0X1700263386338.jpg",
                "PEGI" => 18
                ]
            ];

            switch ($value) {
                case '0':
                    $gameInfo = $gameInfo['0'];
                    break;
            
            
                case '1':
                    $gameInfo = $gameInfo['1'];
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

        <section class="ratingContainer"></section>
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