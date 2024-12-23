<!--
*
*
*reviews zitten hier
*
*
*-->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $Bokura = [
            "user1" =>[
                "pfp" => "https://i.seadn.io/gcs/files/354aae9b4c97228e2b36d61b5dfade47.jpg?w=500&auto=format",
                "username" => "DuckDuck",
                "review" => "Bokura is a really unique experience in that both you and your friends will both be seeing something different and the best part of it, is it comes with a very touching story. <br><br>I enjoyed my experience from begining to end. I didn't mind some of the puzzles requiring large amounts of communication as I simply think that is apart of the charm. Though if you are bothered by one person doing most of the work at times, while you just sit there, this might not be the game for you.<br><br> We loved it so much me and my friend are planning a replay of this but of course we're going to switch characters and also decide on different choices for a different ending.",
                "rated" => 10,
                "dateRated" => "Aug 22, 2024",
            ],
            "user2" =>[
                "pfp" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM8AT0wdofB6-QFxgA9YtBhnNew9xDhPsjGQ&s",
                "username" => "poqu",
                "review" => "The idea of having differences between what you and your partner see is overall wasted on monotonous puzzles and frustrating blind platforming.<br><br> The story, while interesting, has a lackluster ending and leaves the player unsatisfied by the end.",
                "rated" => 4,
                "dateRated" => "Sep 17, 2024",
            ],
            "user3" =>[
                "pfp" => "https://steamuserimages-a.akamaihd.net/ugc/2414563907850592391/3550A2F9994ACCC674437371A91E44A76E708560/?imw=1024&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false",
                "username" => "shiroroll",
                "review" => "mild spoiler
test your communication skills with your friend as you play the game of two friends who climb a mountain for vandalism.",
                "rated" => 7,
                "dateRated" => "Dec 23, 2024",
            ],
        ];

     

        $name = $_SESSION["name"];
        $reviewText = $_SESSION["reviewText"];
        $rating = $_SESSION["rating"];
        
        if (!isset($_SESSION['Bokura'])) {
            $_SESSION['Bokura'] = [];
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $Bokura['new_user'] = [
                "pfp" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                "username" => $name,
                "review" => $reviewText,
                "rated" => $rating,
                "dateRated" => date("M d, Y"),
            ];

            uasort($Bokura, function($a, $b) {
                return strtotime($b['dateRated']) - strtotime($a['dateRated']);
            });
        };
        
        $averageRating = array_sum(array_column($Bokura, 'rated')) / count($Bokura);
        
        ob_start(); // Start output buffering

        foreach ($Bokura as $user => $userData) {
            echo '<div class="userRating">
                    <div class="dividerNeon"></div>
                    <section class="rProfileContainer">
                        <section class="profileContainerL">
                            <img src="' . $userData['pfp'] . '" class="pfps">
                            <h1 class="userName">' . $userData['username'] . '</h1>
                            <h1 class="userRated">' . $userData['rated'] . '</h1>
                            <section class="ratingCircles"></section>
                        </section>
                        
                        <p class="reviewedTxt"><span class="reviewTxtDate">' . $userData['dateRated'] . '</span><br>' . $userData['review']      . '</p>
                    </section>
                </div>';
        }
        
        $output = ob_get_clean(); // Get the buffered output and clear the buffer


        /* user rating new */
 
    
    ?>
    
</body>
</html>