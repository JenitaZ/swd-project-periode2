<!-- 
*
* game review 1
* PHP
*
*-->

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

    // shows content based on value 
    
    if ($value == 'RW') {
        $gameInfo = [
            "title" => "Rain World",
            "release_date" => "March 28th, 2017",
            "platforms" => "PC, PS4/5, XBOX One",
            "description" => "Rain World simulates a harsh, complex ecosystem- one where you are both predator and prey, hunter and hunted in unforgiving, apocalyptic climes. You are a slugcat. The world around you is full of danger, and you must face it – alone.",
            "image" => "img/games/37107d39373c202221d6672722f514cf.png",
            "PEGI" => 7,
            "genre" => "survival",
            "exploration",
            "multiplayer",
            "singleplayer",
            "yt" => ""
        ];
    } elseif ($value == 'SV') {
        $gameInfo = [
            "title" => "Stardew Valley",
            "release_date" => "February 26th, 2016",
            "platforms" => "Phone, PC, PS4, XBOX One, Nintendo Switch",
            "description" => "You've inherited your grandfather's old farm plot in Stardew Valley.",
            "image" => "https://www.stardewvalley.net/wp-content/uploads/2018/12/1_1screenshot15.png",
            "PEGI" => 12,
            "genre" => "farming",
            "life",
            "multiplayer",
            "singleplayer",
            "yt" => ""
        ];
    } else {
        echo "Oops, something broke again";
    }

    ?>

</body>

</html>