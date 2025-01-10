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
    <header class="headerTemplate review-header">
        <article class="logo gameslog">
            <a href="index.html"><img src="img/logo/gameshoplogo-transparant~000.png" alt="Logo Gameshop" class="logo-main"></a>
            <a href="index.html" id="logo-txt-link"><h1 class="Name">GameStars</h1></a>
        </article>

        <nav class="stick">
        </nav>
    </header>

    <?php 
        $value = $_GET['var']

        $contactInfo = [
            "TEL" => [
                "text" => "Thank you for submitting! We will have a look at it and will see if we can text you back ;) , it could take multiple days.",
                "text2" => "Don't forget to check out our latest review/ games!",
            ],
            "MAIL" => [
                "text" => "Thank you for submitting! We will have a look at it and will see if we can write you a email back ;D, it could take multiple days. :D",
                "text2" => "Don't forget to check out our latest review/ games!",
            ]
        ];

        switch ($value) {
            case 'TEL':
                $gameInfo = $gameInfo['TEL'];
                break;
        
        
            case 'MAIL':
                $gameInfo = $gameInfo['MAIL'];
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
    <a href="newestReview.html">Newest Reviews</a> 

</nav>

    <main >
            <section class="containerReview">
                <div class="reviewContenttwo">
                    <h1 id="textes"><?= $contactInfo["text"]?></h1>
                    <h1 id="textes2"><?= $contactInfo["text2"]?></h1>
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
    </body>

        