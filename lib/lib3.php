<!-- 
*
* game review 3
* PHP game pagina's || games: Terraria + Hollowknight
*
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$value = $_GET['var'];
$games = [
    "TR" => [
        "title" => "Terraria",
        "release_date" => "",
        "platforms" => "PC, PS4/5, XBOX One, Switch",
        "description" => "Stray is a third-person cat adventure game set amidst the detailed neon-lit alleys of a decaying cybercity and the murky environments of its seedy underbelly.",
        "image" => array(
            "img1" => "https://www.brashgames.co.uk/wp-content/uploads/2014/11/Terraria-Review-Screen-3.jpg",
            "img2" => "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/105600/header.jpg?t=1731252354",
            "img3" => "https://www.immortalwordsmith.co.uk/wp-content/uploads/2024/01/feature-image-terraria.webp",
            "img4" => "https://play-lh.googleusercontent.com/VAxJd3C0F94AfzNtwtE6SJK7bMgJDIRn8uSdFiGMRDrrmmdJuLKMUMUU5-WuD3eoZWM=w526-h296-rw"
        ),
        
        "PEGI" => 12,
         "gameDesc" => "<span id='title'>Stray</span> <br> <span id='smallGrayText'>released on: July 19th, 2022, Developed by:  BlueTwelve Studio and released by Annapurna Interactive </span> <br><br> Is is a third-person cat adventure game set amidst the detailed, neon-lit alleys of a decaying cybercity and the murky environments of its seedy underbelly and follows a stray cat who falls into a walled city populated by robots, machines, and mutant bacteria, and sets out to return to the surface with the help of a drone companion, B-12",
        // "genre" => "cats",
        // "exploration",
        // "adventure",
        // "multiplayer",
        "yt" => ""
    ],
    "HK" => [
        "title" => "Hollowkight",
        "release_date" => "April 23rd, 2024",
        "platforms" => "Microsoft, Linux, Mac OS",
        "description" => "Banana is a clicker Game, in which you click a Banana! Get a random banana every 3 hours and grow your collection! 3 hour drop pool chances",
        "image" => array(
            "img1" => "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
            "img2" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img3" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img4" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
        ),

        "PEGI" => 12,
        "gameDesc" => "<span id='title'>Banana</span> <br> <span id='smallGrayText'>released on: April 23rd, 2024, Developed by:  BlueTwelve Studio and released by Annapurna Interactive </span> <br><br>The core mechanic of Banana Clicker is as simple as it gets. Clicking on the banana increases your banana count. There's no strategy or complex controls involved, just pure, clicky fun<br><br>While clicking the Banana is the main activity, the real excitement comes from the random banana drops. These special bananas, featuring unique designs from cherry blossoms to gentlemen attire, are added to your Steam inventory.<br><br>The fun doesn't stop with collecting unique banana. These special bananas can be sold on the Steam Marketplace, opening the door to potentially lucrative (and strange) digital banana trading. Rarity plays a major role here, with some bananas fetching hundreds of dollars.",
        // "genre" => "casual",
        // "singleplayer",
        "yt" => ""
    ]
];

switch ($value) {
    case 'TR':
        echo "<script>let pegi = '" . $games['TR']['PEGI'] . "';</script>";
        echo "<script type='text/javascript'>
            let age = prompt('Confirm your age:');
            if (age < pegi ){
                alert('This game is not suitable for your age.');
                window.location.href = 'games.html';}
        </script>";

        $gameInfo = $games['TR'];
        break;


    case 'HK':
        echo "<script>let pegi = '" . $games['HK']['PEGI'] . "';</script>";
        echo "<script type='text/javascript'>
            let age = prompt('Confirm your age:');
            if (age < pegi ){
                alert('This game is not suitable for your age.');
                window.location.href = 'games.html';}
        </script>";

        $gameInfo = $games['HK'];
        break;
    default:
        echo "iets brak weer";

}

?>
</body>
</html>
