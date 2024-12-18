<!-- 
*
* game review 2
* PHP game pagina's || games: stray + banana
*
-->

<?php
$value = $_GET['var'];
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
         "gameDesc" => "<span id='title'>Stray</span> <br> <span id='smallGrayText'>released on: July 19th, 2022, Developed by:  BlueTwelve Studio and released by Annapurna Interactive </span> <br><br> Is is a third-person cat adventure game set amidst the detailed, neon-lit alleys of a decaying cybercity and the murky environments of its seedy underbelly and follows a stray cat who falls into a walled city populated by robots, machines, and mutant bacteria, and sets out to return to the surface with the help of a drone companion, B-12",
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
            "img2" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img3" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
            "img4" => "https://plays.org/screenshots/clicker-banana-game-progress.png",
        ),

        "PEGI" => "E",
        "gameDesc" => "<span id='title'>Banana</span> <br> <span id='smallGrayText'>released on: April 23rd, 2024, Developed by:  BlueTwelve Studio and released by Annapurna Interactive </span> <br><br>The core mechanic of Banana Clicker is as simple as it gets. Clicking on the banana increases your banana count. There's no strategy or complex controls involved, just pure, clicky fun<br><br>While clicking the Banana is the main activity, the real excitement comes from the random banana drops. These special bananas, featuring unique designs from cherry blossoms to gentlemen attire, are added to your Steam inventory.<br><br>The fun doesn't stop with collecting unique banana. These special bananas can be sold on the Steam Marketplace, opening the door to potentially lucrative (and strange) digital banana trading. Rarity plays a major role here, with some bananas fetching hundreds of dollars.",
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