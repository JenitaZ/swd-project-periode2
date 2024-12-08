<?php
$value = $_GET['var'];
$key = "1";
$games = [
    "0" => [
        "title" => "Stray",
        "release_date" => "July 19th, 2022",
        "platforms" => "PC, PS4/5, XBOX One, Switch",
        "description" => "Stray is a third-person cat adventure game set amidst the detailed neon-lit alleys of a decaying cybercity and the murky environments of its seedy underbelly.",
        "image" => "https://i.ytimg.com/vi/4uP2MyUL49s/sddefault.jpg",
        "PEGI" => 12,
        "genre" =>"cats", "exploration", "adventure", "multiplayer",
        "yt" =>""
    ],
    "1" => [
        "title" => "Banana",
        "release_date" => "April 23rd, 2024",
        "platforms" => "Microsoft, Linux, Mac OS",
        "description" => "Banana is a clicker Game, in which you click a Banana! Get a random banana every 3 hours and grow your collection! 3 hour drop pool chances",
        "image" => "https://bananaclicker.io/data/image/posts/banana-clicker-banner.jpg",
        "PEGI" => "E",
        "genre" =>"casual", "singleplayer",
        "yt" =>""
    ]
];

switch ($value){
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