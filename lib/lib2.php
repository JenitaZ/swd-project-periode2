<?php
$value = $_GET['var'];
// $key = "1";
$games = [
    "0" => [
        "title" => "Stray",
        "release_date" => "July 19th, 2022",
        "platforms" => "PC, PS4/5, XBOX One, Switch",
        "description" => "Stray is a third-person cat adventure game set amidst the detailed neon-lit alleys of a decaying cybercity and the murky environments of its seedy underbelly.",
        "image" => array(
            "img1" => "https://i.ytimg.com/vi/4uP2MyUL49s/sddefault.jpg",
            "img2" => "https://i.ytimg.com/vi/okRKEZdE1Cc/maxresdefault.jpg",
            "img3" => "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1332010/ss_2221af260c64362fdc835a9dca65f6f1d1192b25.1920x1080.jpg?t=1733260906",
            "img4" => "https://assets-prd.ignimgs.com/2022/07/15/stray-blogroll-1657911894347.jpg"
        ),
        
        "PEGI" => 12,
        "gameDesc" => "<span id='title'>Stray</span> <br> <span id='smallGrayText'>released on: July 19th, 2022, Developed by:  BlueTwelve Studio and released by Annapurna Interactive </span> <br><br>",
        // "genre" => "cats",
        // "exploration",
        // "adventure",
        // "multiplayer",
        "yt" => ""
    ],
    "1" => [
        "title" => "Banana",
        "release_date" => "April 23rd, 2024",
        "platforms" => "Microsoft, Linux, Mac OS",
        "description" => "Banana is a clicker Game, in which you click a Banana! Get a random banana every 3 hours and grow your collection! 3 hour drop pool chances",
        "image" => array(
            "img1" => "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
            "img2" => "https://plays.org/screenshots/clicker-banana-game-progress.png"
        ),

        "PEGI" => "E",
        // "genre" => "casual",
        // "singleplayer",
        "yt" => ""
    ]
];

switch ($value) {
    case '0':
        $gameInfo = $games['0'];
        break;


    case '1':
        $gameInfo = $games['1'];
        break;

    default:
        echo "iets brak weer";

}

?>