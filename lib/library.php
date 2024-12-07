<?php
$value = $_GET['var'];

if ($value == 'RW') {
    $gameInfo = [
        "title" => "Rain World",
        "release_date" => "March 28th, 2017",
        "platforms" => "PC, PS4/5, XBOX One",
        "description" => "Rain World simulates a harsh, complex ecosystem- one where you are both predator and prey, hunter and hunted in unforgiving, apocalyptic climes. You are a slugcat. The world around you is full of danger, and you must face it – alone.",
        "image" => "img/games/37107d39373c202221d6672722f514cf.png",
        "PEGI" => 7
    ];
} elseif ($value == 'SV') {
    $gameInfo = [
        "title" => "Stardew Valley",
        "release_date" => "February 26th, 2016",
        "platforms" => "Phone, PC, PS4, XBOX One, Nintendo Switch",
        "description" => "You've inherited your grandfather's old farm plot in Stardew Valley.",
        "image" => "https://www.stardewvalley.net/wp-content/uploads/2018/12/1_1screenshot15.png",
        "PEGI" => 12
    ];
} elseif ($value == '0') {
    $gameInfo = [
        "title" => "",
        "release_date" => "",
        "platforms" => "",
        "description" => ".",
        "image" => ""
    ];
} elseif ($value == '1') {
    $gameInfo = [
        "title" => "",
        "release_date" => "",
        "platforms" => "",
        "description" => ".",
        "image" => ""
    ];

} else {
    echo "Oops, i think something broke";
}

?>