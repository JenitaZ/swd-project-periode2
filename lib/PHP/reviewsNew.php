<!--
*
* PHP || Eindopdracht
* reviews
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
    $games = [
        "NR" => [
            "title" => "NieR: Automata",
            "release_date" => "February 23rd 2017",
            "platforms" => "Nintendo Switch, PlayStation 4, Xbox One, Windows",
            "description" => "NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.",
            "vid" => 'src="https://www.youtube.com/embed/ARHVKZ5K1b0?si=YewiFnMGnssAbi_a" title="YouTube video player"',
            "PEGI" => 16,
            "genre" => "story",
            "dev" => "Takahisa Taura & Isao Negishi"

        ],
        "STA" => [
            "title" => "S.T.A.L.K.E.R. 2",
            "release_date" => "November 20th, 2024",
            "platforms" => "Xbox series X/S, Nvidia Geforce Now, Windows",
            "description" => "Discover the vast Chornobyl Exclusion Zone full of dangerous enemies, deadly anomalies and powerful artifacts",
            "vid" => 'src="https://www.youtube.com/embed/1dHmayETd4c?si=fZzUVPLIv8Eo0LEL" title="YouTube video player"',
            "PEGI" => 12,
            "genre" => " open world, survival",
            "dev" => "GSC Game World"

        ],
        "BOK" => [
            "title" => "BOKURA",
            "release_date" => "August 9th, 2023",
            "platforms" => "PS4/5, switch, desktop",
            "description" => "BOKURA is a two-player puzzle adventure game.<br> Play as two boys who ran away from their homes and work together to take yourselves somewhere far, far away. ",
            "vid" => 'src="https://www.youtube.com/embed/25mkGli1e0A?si=GrXsDk2QsngPG-8Z" title="YouTube video player"',
            "PEGI" => 12,
            "genre" => "Action, Adventure, Casual",
            "dev" => "<span id='jp'>ところにょり</span>"
        ],
        "OM" => [
            "title" => "",
            "release_date" => "",
            "platforms" => "",
            "description" => "",
            "vid" => "",
            "PEGI" => 12,
            "genre" => "",
            "dev" => ""
        ]
    ];



    $reviews = [
        "BOK" => [
            "user1" => [
                "pfp" => "https://i.seadn.io/gcs/files/354aae9b4c97228e2b36d61b5dfade47.jpg?w=500&auto=format",
                "username" => "DuckDuck",
                "review" => "Bokura is a really unique experience in that both you and your friends will both be seeing something different",
                "rated" => 10,
                "dateRated" => "Aug 22, 2024",
            ],
            "user2" => [
                "pfp" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM8AT0wdofB6-QFxgA9YtBhnNew9xDhPsjGQ&s",
                "username" => "poqu",
                "review" => "The idea of having differences between what you and your partner see is overall wasted on monotonous puzzles and frustrating blind platforming.",
                "rated" => 4,
                "dateRated" => "Sep 17, 2024",
            ],
            "user3" => [
                "pfp" => "https://steamuserimages-a.akamaihd.net/ugc/2414563907850592391/3550A2F9994ACCC674437371A91E44A76E708560/?imw=1024&&ima=fit&impolicy=Letterbox&imcolor=%23000000&letterbox=false",
                "username" => "shiroroll",
                "review" => "test your communication skills with your friend as you play the game of two friends who climb a mountain for vandalism.",
                "rated" => 7,
                "dateRated" => "Dec 23, 2024",
            ]
        ],

        "NR" => [
            "user1" => [
                "pfp" => "https://cdn.pfps.gg/pfps/7353-2b-27.png",
                "username" => "Edward Indeed",
                "review" => "Rating: 9/10 (Outstanding) <br><br>NieR: Automata is a beautifully unconventional masterpiece that combines thought-provoking storytelling, dynamic combat, and hauntingly atmospheric music. It’s an unforgettable journey, though not without a few rough edges.",
                "rated" => 9,
                "dateRated" => " Dec 23, 2024",
            ],
            "user2" => [
                "pfp" => "https://i.pinimg.com/originals/9f/aa/a1/9faaa1fedc94c355a4256ba6207c7714.png",
                "username" => "Zayic",
                "review" => "Before playing this game you should play Nier Replicant first.<br><br>This game is really fun with a good story however the game play gets repetitive after a while. If you can buy it on sale you wont regret your purchase.<br><br>8/10",
                "rated" => 8,
                "dateRated" => "Dec 29, 2024",
            ],
            "user3" => [
                "pfp" => "https://i.pinimg.com/236x/9b/da/e1/9bdae1549b96e09272726fe0bd4aaced.jpg",
                "username" => "Sufferez",
                "review" => "NieR: Automata is not for everybody. In fact, the game looks to be aimed at the most refined fans of the medium by not caring about the regular gaming conventions, in the same way the works of David Lynch are perfect for the hardcore moviegoers.",
                "rated" => 9,
                "dateRated" => "Oct 19, 2017",
            ],
        ],

        "STA" => [
            "user1" => [
                "pfp" => "https://i.iplsc.com/stalker-2-zaprezentowany-na-zwiastunie-zona-ma-powrocic-w-na/000AC82WPU56GSMQ-C459.jpg",
                "username" => "Bucket",
                "review" => "Completed the story finally, took my sweet time with it, had to wait for acouple of patches to fix some issues, but none more than a week.<br><br>Mostly satisfied, the atmosphere is all here, the zone I know and love, some of it does feel a bit like \"Oh yeah remember this!\" but it kept the vibe I remembered, the story which never honestly mattered too much to me in the previous games was actually fairly good in this one",
                "rated" => 9,
                "dateRated" => "Dec 8, 2024",
            ],
            "user2" => [
                "pfp" => "https://preview.redd.it/rate-my-new-discord-pfp-v0-g96h2rt7187a1.png?width=640&crop=smart&auto=webp&s=c66c48591916628bdf50f3b8451d776215397570",
                "username" => "VDubskiii",
                "review" => "Stalking has never been better. <br>I am becoming a professional stalker in real life thanks to this game.",
                "rated" => 10,
                "dateRated" => "Dec 21, 2024",
            ],
            "user3" => [
                "pfp" => "https://assetsio.gnwcdn.com/stalker-2-art-cropped.jpg?width=1200&height=1200&fit=crop&quality=100&format=png&enable=upscale&auto=webp",
                "username" => "TinyBabyMan",
                "review" => "Running the game with a rtx 4070 and still barely playing medium settings, you spend 10 mins compiling shaders every time you open the game before you can start playing, the game itself is brilliant but every time you die you spend the next 5-7 mins looking at a loading screen only to be killed by a low poly dog before your gun can load in ",
                "rated" => 3,
                "dateRated" => "Dec 7, 2024",
            ],
        ],
        "OM" => [
            "user1" => [
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],
            "user2" => [
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],
            "user3" => [
                "pfp" => "",
                "username" => "",
                "review" => "",
                "rated" => "",
                "dateRated" => "",
            ],

        ],
    ];

    ?>
</body>

</html>