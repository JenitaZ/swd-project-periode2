<!-- 
*
* game review 3 en 4
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
        "release_date" => "August 16th, 2012",
        "platforms" => "Nintendo, mobile, pc, ps4",
        "description" => "Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!",
        "image" => array(
            "img1" => "https://www.brashgames.co.uk/wp-content/uploads/2014/11/Terraria-Review-Screen-3.jpg",
            "img2" => "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/105600/header.jpg?t=1731252354",
            "img3" => "https://www.immortalwordsmith.co.uk/wp-content/uploads/2024/01/feature-image-terraria.webp",
            "img4" => "https://play-lh.googleusercontent.com/VAxJd3C0F94AfzNtwtE6SJK7bMgJDIRn8uSdFiGMRDrrmmdJuLKMUMUU5-WuD3eoZWM=w526-h296-rw"
        ),
        
        "PEGI" => 12,
          "gameDesc" => "<span id='title'>Terraria</span> <br> <span id='smallGrayText'>released on: August 16th, 2012, Developed and released by:  Re-Logic </span> <br><br> Dig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, fortune, and glory.<br> Will you delve deep into cavernous expanses in search of treasure and raw materials with which to craft ever-evolving gear, machinery, and aesthetics?<br><br> Perhaps you will choose instead to seek out ever-greater foes to test your mettle in combat?<br><br> Maybe you will decide to construct your own city to house the host of mysterious allies you may encounter along your travels?<br><br>In the World of Terraria, the choice is yours!
",
        "genre" => "sandbox", "survival", "2d",
        "yt" => "https://www.youtube.com/embed/w7uOhFTrrq0?si=K9ud0bxzsfHG3W4M",
        "rating" => 8.1
    ],
    "HK" => [
        "title" => "Hollow Knight",
        "release_date" => "February 24th, 2017",
        "platforms" => "Playstation4, Xbox, pc, switch",
        "description" => "Forge your own path in Hollow Knight! An epic action adventure through a vast ruined kingdom of insects and heroes. Explore twisting caverns, battle tainted creatures and befriend bizarre bugs, all in a classic, hand-drawn 2D style.",
        "image" => array(
            "img1" => "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
            "img2" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img3" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img4" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
        ),

        "PEGI" => 12,
        "gameDesc" => "<span id='title'>Hollow Knight</span> <br> <span id='smallGrayText'>released on: February 24th, 2017, Developed and released by: Team Cherry </span> <br><br>Hollow Knight is a 2D side-scrolling Metroidvania. <br><br>The player controls a silent insectoid protagonist called \"the Knight\" who explores an underground fallen kingdom called Hallownest.<br><br> The Knight can strike enemies with a sword-like weapon called a Nail and can learn spells that allow for long-range attacks.",
        "genre" => "difficult", "platformer",
        "yt" => "https://www.youtube.com/embed/UAO2urG23S4?si=h57Cb664WEaKcCiR" ,
        "rating" => 9
    ],
    "BOK" => [
        "title" => "",
        "release_date" => "",
        "platforms" => "",
        "descriptions" => "", 
        "image" => array(
            "img1" => "",
            "img2" => "",
            "img3" => "",
            "img4" => "",
            "img5" => ""
        ),
        "PEGI" => 12,
        "gameDesc" => "",
        "rating" => 9
    ]
];

/* it accepts text..oh and change desc of hollow knight... */

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
