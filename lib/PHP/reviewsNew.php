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
    //arrays with gameinfo
    $games = [
        "NR" => [
            "title" => "NieR: Automata",
            "release_date" => "February 23rd 2017",
            "platforms" => "Nintendo Switch, PlayStation 4, Xbox One, Windows",
            "description" => "NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.",
            "vid" => 'src="https://www.youtube.com/embed/ARHVKZ5K1b0?si=YewiFnMGnssAbi_a&mute=1" title="YouTube video player"',
            "PEGI" => 16,
            "genre" => "story rich",
            "dev" => "Takahisa Taura & Isao Negishi"

        ],
        "STA" => [
            "title" => "S.T.A.L.K.E.R. 2",
            "release_date" => "November 20th, 2024",
            "platforms" => "Xbox series X/S, Nvidia Geforce Now, Windows",
            "description" => "Discover the vast Chornobyl Exclusion Zone full of dangerous enemies, deadly anomalies and powerful artifacts",
            "vid" => 'src="https://www.youtube.com/embed/1dHmayETd4c?si=fZzUVPLIv8Eo0LEL&mute=1"',
            "PEGI" => 12,
            "genre" => " open world, survival",
            "dev" => "GSC Game World"

        ],
        "BOK" => [
            "title" => "BOKURA",
            "release_date" => "August 9th, 2023",
            "platforms" => "PS4/5, switch, desktop",
            "description" => "BOKURA is a two-player puzzle adventure game.<br> Play as two boys who ran away from their homes and work together to take yourselves somewhere far, far away. ",
            "vid" => 'src="https://www.youtube.com/embed/25mkGli1e0A?si=GrXsDk2QsngPG-8Z&mute=1"',
            "PEGI" => 12,
            "genre" => "Action, Adventure, Casual",
            "dev" => "<span id='jp'>ところにょり</span>"
        ],
        "OM" => [
            "title" => "OMORI",
            "release_date" => "December 25th, 2020",
            "platforms" => "Nintendo switch, ps4, pc",
            "description" => "Explore a strange world full of colorful friends and foes. When the time comes, the path you’ve chosen will determine your fate... and perhaps the fate of others as well.",
            "vid" => 'src="https://www.youtube.com/embed/erzgjfU271g?si=davMCDKzlsXvXzTe&mute=1"',
            "PEGI" => 16,
            "genre" => "psychological horror, story rich",
            "dev" => "OMOCAT"
        ]
    ];


    //arrays with userreviews
    $reviews = [
        "BOK" => [
            "user1" => [
                "username" => "DuckDuck",
                "review" => "Bokura is a really unique experience in that both you and your friends will both be seeing something different",
                "rated" => 10,
            ],
            "user2" => [
                "username" => "poqu",
                "review" => "The idea of having differences between what you and your partner see is overall wasted on monotonous puzzles.",
                "rated" => 4,
            ],
            "user3" => [
                "username" => "shiroroll",
                "review" => "test your communication skills with your friend as you play the game of two friends who climb a mountain for vandalism.",
                "rated" => 7,
            ]
        ],

        "NR" => [
            "user1" => [
                "username" => "Edward Indeed",
                "review" => "NieR: Automata is a beautifully unconventional masterpiece.",
                "rated" => 9,
            ],
            "user2" => [
                "username" => "Zayic",
                "review" => "This game is really fun with a good story however the game play gets repetitive after a while.",
                "rated" => 8,
            ],
            "user3" => [
                "username" => "Sufferez",
                "review" => "The game looks to be aimed at the most refined fans of the medium by not caring about the regular gaming conventions.",
                "rated" => 9,
            ],
        ],

        "STA" => [
            "user1" => [
                "username" => "Bucket",
                "review" => "Mostly satisfied, the atmosphere is all here, the zone I know and love.",
                "rated" => 9,
            ],
            "user2" => [
                "username" => "VDubskiii",
                "review" => "Stalking has never been better. I am becoming a professional stalker in real life thanks to this game.",
                "rated" => 10,
                "dateRated" => "Dec 21, 2024",
            ],
            "user3" => [
                "username" => "TinyBabyMan",
                "review" => "You spend 10 mins compiling shaders every time you open the game before you can start playing.",
                "rated" => 3,
            ],
        ],
        "OM" => [
            "user1" => [
                "username" => "doggo",
                "review" => "one of the best RPGs i have ever played!",
                "rated" => 9,
            ],
            "user2" => [
                "username" => "IrregularHomoSapien",
                "review" => "it will give you severe mental illness with the topping of stage 4 crippling depression.",
                "rated" => 8,
            ],
            "user3" => [
                "username" => "svpernxva",
                "review" => "i LOVED this game more than anything so if u havent played it then i HIGHLY recommend",
                "rated" => 10,
            ],

        ],
    ];

    ?>
</body>

</html>