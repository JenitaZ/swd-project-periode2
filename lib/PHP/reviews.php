<!--
*
* reviews zitten hier
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
    $value = $_GET['var'];
        switch ($value) {
            case "BOK": {
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
                        "review" => "mild spoiler<br>test your communication skills with your friend as you play the game of two friends who climb a mountain for vandalism.",
                        "rated" => 7,
                        "dateRated" => "Dec 23, 2024",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });

                break;
            }
            case "HK": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://i.redd.it/what-are-your-favorites-hollow-knight-characters-designs-v0-o0spjsohdcib1.jpg?width=695&format=pjpg&auto=webp&s=dfde42ed36e0c05b90a257b02d159c8b182602ab",
                        "username" => "Brawler1342",
                        "review" => "Best game ever, with a compelling message and deep lore. Plenty of gameplay that provides a challenge for people at all levels.",
                        "rated" => 10,
                        "dateRated" => "Dec 23, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://64.media.tumblr.com/5d666d70db9eab4ff940d10bc944ef84/tumblr_inline_onpcnoGa6u1sjp9p4_500.jpg",
                        "username" => "₮₳JłӾØ ",
                        "review" => "This game is a vibe. A Masterpiece. Soundtrack, World, Story, Gameplay...everything is perfect! Love this game.",
                        "rated" => 10,
                        "dateRated" => "Dec 4, 2024",
                    ],
                    "user3" =>[
                        "pfp" => "https://p16-va.lemon8cdn.com/tos-maliva-v-ac5634-us/o0mCEBa1DDEsfQAAuI5CfFTtEBJ37I8WtSg2vA~tplv-tej9nj120t-origin.webp",
                        "username" => "Ironluck",
                        "review" => "Hollow knight is a game that inspires massive exploration in a small world. However that world is far greater than anything you could imagine, including any expectations you had before. Also, if silksong doesn’t release next year I will crash out",
                        "rated" => 9,
                        "dateRated" => "Nov 25, 2024",
                    ],
                ];  

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });

                break;
            }
            case "TR": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://steamuserimages-a.akamaihd.net/ugc/1771580463241536480/817C4C8B85CAA4C8DD78F9AEA3C2DF3D69D28672/?imw=5000&imh=5000&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false",
                        "username" => "kemalbezirci",
                        "review" => "This game is not Minecraft anymore, understand this, it is very different from Minecraft, even if I get bored of co-op games, Terraria is a very fun game to play with friends, great music, extremely good times, I forget that I will continue to play this for a long time, I recommend it to everyone",
                        "rated" => 10,
                        "dateRated" => "Sep 7, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2Jn8FZb_o1UD_SeWviv8xkhHnZvZ04Ze55Q&s",
                        "username" => "Gameplayer397 ",
                        "review" => "I thought it was good. I thought it was fun to play. The controls are a little klunky, but I got used to it. I haven't played the PC version, but I can assure it's better.",
                        "rated" => 7,
                        "dateRated" => "Dec 3, 2023",
                    ],
                    "user3" =>[
                        "pfp" => "https://cdn.forums.klei.com/monthly_2021_07/813924433_kleipfp.thumb.png.31ca739abeb07e4b96c17a9f8246675e.png",
                        "username" => "GameSpot",
                        "review" => "When Terraria sucks you in, you might find yourself digging and crafting for far more hours than you originally intended.",
                        "rated" => 8,
                        "dateRated" => "Apr 8, 2013",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });

                break;
            }
            case "1": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://target.scene7.com/is/image/Target/GUEST_cf4773e6-afec-4aa1-89e7-74b7dfc09973?wid=488&hei=488&fmt=pjpeg",
                        "username" => "Joey Tribbiani",
                        "review" => "Finally, a game that truly peels back the layers of life.<br> 'Banana' is the apex of modern gaming—who needs explosions or dragons when you can click a banana for hours on end?<br><br> The soundtrack of silence is pure perfection, and the existential realization of counting bananas has made me question my purpose. 10/10 would monkey around again",
                        "rated" => 10,
                        "dateRated" => "Dec 12, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://tr.rbxcdn.com/180DAY-f957ee4ba5eb9337fd8e0b4050faa2ec/420/420/Hat/Webp/noFilter",
                        "username" => "Hawkspare82 ",
                        "review" => "this is not a normal clicker game because all you do is click and afk 3 hrs to get a random banana and it is a waste of your time and energy i know you can sell them but not for much you spend more money on the electricity bill.",
                        "rated" => 3,
                        "dateRated" => "Nov 26, 2024",
                    ],
                    "user3" =>[
                        "pfp" => "https://i.pinimg.com/236x/68/31/12/68311248ba2f6e0ba94ff6da62eac9f6.jpg",
                        "username" => "Harlequen",
                        "review" => "STAY AWAY!!!!<br>The Developers added Achievement that are not implemented jet, but one of them require You to play the game for over 1000 hours or spend $25.- for buying the Bananas to get it!<br><br>With over 5000 owner of this game they think they can harvest s lot of money, they are just money grabber!<br>I wish I never have made that 1 Click, now They ruined the scores of over 5000 People!",
                        "rated" => 1,
                        "dateRated" => "Dec 13, 2024",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });

                break;
            }
            case "0": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://imagedelivery.net/WLUarKbmUXuuhDC7PG5_Qw/articles/c8426601a981185b735b73c92dd48dc2.jpeg/public",
                        "username" => "Juice__",
                        "review" => "Stray is one of the best games I've ever played. Everything about Stray is absolutely perfect; the story, art style, OST, everything",
                        "rated" => 10,
                        "dateRated" => "Dec 15, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://i.pinimg.com/750x/48/a0/01/48a001e6e4b8c36e2c64a37ffd566566.jpg",
                        "username" => "The weatherman",
                        "review" => "Stray is a small pearl, an adventure that delivers truly suggestive sequences and a fascinating story, which rests on the solid foundations of a very well written lore. Of course, just like a stray cat the game happens to get scared for every little jolt, so the team created a comfortable bubble giving up to fully express its potential.",
                        "rated" => 8,
                        "dateRated" => "Jul 18, 2022",
                    ],
                    "user3" =>[
                        "pfp" => "https://i.pinimg.com/736x/b3/93/94/b393943e478499642bef3542865b9bc8.jpg",
                        "username" => "Empyrea",
                        "review" => "It's not a bad game but I don't think it deserves more than a 7 or 7'5 but I've too say that I played many games and I'm getting older so you might score it higher if it's not your case. It took me almost 5 hours but I don't know if the times that I died are counted.",
                        "rated" => 7,
                        "dateRated" => "Jan 13, 2024",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });

                break;
            }
            
            case "STA": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://i.iplsc.com/stalker-2-zaprezentowany-na-zwiastunie-zona-ma-powrocic-w-na/000AC82WPU56GSMQ-C459.jpg",
                        "username" => "Bucket",
                        "review" => "Completed the story finally, took my sweet time with it, had to wait for acouple of patches to fix some issues, but none more than a week.<br><br>Mostly satisfied, the atmosphere is all here, the zone I know and love, some of it does feel a bit like \"Oh yeah remember this!\" but it kept the vibe I remembered, the story which never honestly mattered too much to me in the previous games was actually fairly good in this one",
                        "rated" => 9,
                        "dateRated" => "Dec 8, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://preview.redd.it/rate-my-new-discord-pfp-v0-g96h2rt7187a1.png?width=640&crop=smart&auto=webp&s=c66c48591916628bdf50f3b8451d776215397570",
                        "username" => "VDubskiii",
                        "review" => "Stalking has never been better. <br>I am becoming a professional stalker in real life thanks to this game.<br><br> I love stalking. I have learned that if you stalk at night people seem to not notice you as well as they would during the day.<br> This is thanks to how well the S.T.A.L.K.E.R. 2: Heart of Chornobyl is teaching me to stalk.<br><br> I finally am getting to the point in real life that my stalking is getting so good I may start even learning more.",
                        "rated" => 10,
                        "dateRated" => "Dec 21, 2024",
                    ],
                    "user3" =>[
                        "pfp" => "https://assetsio.gnwcdn.com/stalker-2-art-cropped.jpg?width=1200&height=1200&fit=crop&quality=100&format=png&enable=upscale&auto=webp",
                        "username" => "TinyBabyMan",
                        "review" => "Running the game with a rtx 4070 and still barely playing medium settings, you spend 10 mins compiling shaders every time you open the game before you can start playing, the game itself is brilliant but every time you die you spend the next 5-7 mins looking at a loading screen only to be killed by a low poly dog before your gun can load in ",
                        "rated" => 3,
                        "dateRated" => "Dec 7, 2024",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });
                break;
            }
            case "NR": {
                $Bokura = [
                    "user1" =>[
                        "pfp" => "https://cdn.pfps.gg/pfps/7353-2b-27.png",
                        "username" => "Edward Indeed",
                        "review" => "Rating: 9/10 (Outstanding) <br><br>NieR: Automata is a beautifully unconventional masterpiece that combines thought-provoking storytelling, dynamic combat, and hauntingly atmospheric music. It’s an unforgettable journey, though not without a few rough edges.",
                        "rated" => 9,
                        "dateRated" => " Dec 23, 2024",
                    ],
                    "user2" =>[
                        "pfp" => "https://i.pinimg.com/originals/9f/aa/a1/9faaa1fedc94c355a4256ba6207c7714.png",
                        "username" => "Zayic",
                        "review" => "Before playing this game you should play Nier Replicant first.<br><br>This game is really fun with a good story however the game play gets repetitive after a while. If you can buy it on sale you wont regret your purchase.<br><br>8/10",
                        "rated" => 8,
                        "dateRated" => "Dec 29, 2024",
                    ],
                    "user3" =>[
                        "pfp" => "https://i.pinimg.com/236x/9b/da/e1/9bdae1549b96e09272726fe0bd4aaced.jpg",
                        "username" => "Sufferez",
                        "review" => "NieR: Automata is not for everybody. In fact, the game looks to be aimed at the most refined fans of the medium by not caring about the regular gaming conventions, in the same way the works of David Lynch are perfect for the hardcore moviegoers.",
                        "rated" => 9,
                        "dateRated" => "Oct 19, 2017",
                    ],
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                });
                break;
            }

        };
                    
        if (!isset($_SESSION['Bokura'])) {
            $_SESSION['Bokura'] = [];
        }
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if(isset($_POST["name"])){
                $Bokura['new_user'] = [
                    "pfp" => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png",
                    "username" => $_POST["name"],
                    "review" => $_POST["review-txt"],
                    "rated" => $_POST["r"],
                    "dateRated" => date("M d, Y"),
                ];

                uasort($Bokura, function($a, $b) {
                    return strtotime($b['dateRated']) - strtotime($a['dateRated']);
                }); /* FIXME: one of the two is an impostor, excessive, useless, overkill */
            };
        };
        
        $averageRating = number_format(array_sum(array_column($Bokura, 'rated')) / count($Bokura), 1);
        
        ob_start(); // Start output buffering

        foreach ($Bokura as $user => $userData) {
            echo '<div class="userRating">
                    <div class="dividerNeon"></div>
                    <section class="rProfileContainer">
                        <section class="profileContainerL">
                            <img src="' . $userData['pfp'] . '" class="pfps">

                            <h1 class="userRated">' . $userData['rated'] . '</h1>
                            <section class="ratingCircles"></section>
                        </section>
                        <h1 class="userName">' . $userData['username'] . '</h1>
                        <p class="reviewedTxt"><span class="reviewTxtDate">' . $userData['dateRated'] . '</span><br>' . $userData['review']      . '</p>
                    </section>
                </div>';
        }
        
        $output = ob_get_clean(); // Get the buffered output and clear the buffer

    ?>
    
</body>
</html>