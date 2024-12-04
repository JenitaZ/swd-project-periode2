<?php
    //Jenita Zheng, php info dinges voor rainworld en stardew valley
    $value = $_GET['var'];

    if ($value == 'RW') {
        $title = "Rain World";
        $releaseDate ="March 28th 2017";
        $platforms = "PC, PS4/5, XBOX One";
        $desc = "Rain World simulates a harsh, complex ecosystem- one where you are both predator and prey, hunter and hunted in unforgiving, apocalyptic climes. You are a slugcat. The world around you is full of danger, and you must face it – alone.";
        $img = "img/games/37107d39373c202221d6672722f514cf.png";
        
    } elseif ($value == 'SV') {
            
        $title = "Stardew Valley";
        $releaseDate ="February 26th 2016";
        $platforms = "Phone, PC, PS4, XBOX One, Nintendo Switch";
        $desc = "You've inherited your grandfather's old farm plot in Stardew Valley.
    Armed with hand-me-down tools and a few coins, you set out to begin your new life!";
        $img = "https://www.stardewvalley.net/wp-content/uploads/2018/12/1_1screenshot15.png";

    } else {
    echo "Oops, i think something broke";
    }

?>  