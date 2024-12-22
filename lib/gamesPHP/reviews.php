<!--
*
*
*reviews zitten hier
*
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
        $Bokura = [
            "user1" =>[
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],
            "user2" =>[
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],
            "user3" =>[
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],
        ];

        $user = array_keys($Bokura);
        $ugh = sizeof($user);
        $gemR1 = $Bokura['user1']['rated'] +  $Bokura['user1']['rated'] + $Bokura['user1']['rated'] / $ugh;

        foreach ($user as $users) {
            echo ('<div class="userRating">
                <div class="dividerNeon1"></div>
                <fieldset class="reviewBtns reviewed">
                    <input type=radio name=r class="" value="2">
                    <input type=radio name=r class="" value="4">
                    <input type=radio name=r class="" value="6">
                    <input type=radio name=r class="" value="8">
                    <input type=radio name=r class="" value="10">
                  </fieldset>
                <section class="rProfileContainer">
                    <section class="profileContainerL">
                         <img src=<?=$Bokura[$user]["pfp"]?> class="pfps">
                         <h1 class="userName"><?=$Bokura[$user]["username"]?></h1>
                         <section class="ratingCircles"></section>
                     </section>
 
                     <p class="reviewedTxt"><?=$Bokura[$user]["review"]?></p>
 
                 </section>
            </div>');
        }
    ?>
    
</body>
</html>