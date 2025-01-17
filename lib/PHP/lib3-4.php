<!-- 
*
* game review 3 en 4
* PHP || games: Terraria + Hollowknight + BOKURA
*
* gamepagina: reviewPHP2-JZ.php
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
    
    // Sets content based on query string parameters
    $value = $_GET['var'];
    $games = [
        "TR" => [
            "title" => "Terraria",
            "release_date" => "August 16th, 2012",
            "platforms" => "Nintendo, mobile, pc, ps4",
            "description" => "Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!",
            "PEGI" => 12,
            "gameDesc" => "<span id='title'>Terraria</span> <br> <span class='smallGrayText'>released on: August 16th, 2012, Developed and released by:  Re-Logic </span><br><br> Dig, Fight, Explore, Build: The very world is at your fingertips as you fight for survival, fortune, and glory.<br> Will you delve deep into cavernous expanses in search of treasure and raw materials with which to craft ever-evolving gear, machinery, and aesthetics?<br><br> Perhaps you will choose instead to seek out ever-greater foes to test your mettle in combat?<br><br> Maybe you will decide to construct your own city to house the host of mysterious allies you may encounter along your travels?<br><br>In the World of Terraria, the choice is yours!",          
            "genre" => "sandbox, survival",
        ],
        "HK" => [
            "title" => "Hollow Knight",
            "release_date" => "February 24th, 2017",
            "platforms" => "Playstation4, Xbox, pc, switch",
            "description" => "Forge your own path in Hollow Knight! An epic action adventure through a vast ruined kingdom of insects and heroes. Explore twisting caverns, battle tainted creatures and befriend bizarre bugs, all in a classic, hand-drawn 2D style.",
            "PEGI" => 12,
            "gameDesc" => "<span id='title'>Hollow Knight</span> <br> <span class='smallGrayText'>released on: February 24th, 2017, Developed and released by: Team Cherry </span> <br><br>Hollow Knight is a 2D side-scrolling Metroidvania. <br><br>The player controls a silent insectoid protagonist called \"the Knight\" who explores an underground fallen kingdom called Hallownest.<br><br> The Knight can strike enemies with a sword-like weapon called a Nail and can learn spells that allow for long-range attacks.",
            "genre" => "difficult, platformer",
        ],
        /* review 4 */
        "BOK" => [  
            "title" => "BOKURA",
            "release_date" => "August 9th, 2023",
            "platforms" => "PS4/5",
            "switch",
            "desktop",
            "description" => "BOKURA is a two-player puzzle adventure game. Play as two boys who ran away from their homes and work together to take yourselves somewhere far, far away. ",
            "PEGI" => 12,
            "gameDesc" => "<span id='title'>BOKURA</span> <br> <span class='smallGrayText'>released on: August 9th, 2023, developed by: <span id='jp'>ところにょり</span> and released by Kodansha </span><br><br> BOKURA is a puzzle adventure game that can only be played with two players. <br>To play the game, two people must play on two separate machines.While you have to work together, what you see on your game screens is completely different.<br><br>Even though the same character should be displayed on both of your screens, to one of you, they might look like an animal out of a picture book, while to the other, they might look like a robot. (The objects you can interact with might move differently for each of you too!)You will need to talk to each other to find out what you can and cannot see. <br><br>Work together to solve the puzzles and continue your journey.",
            "genre" => "Action, Adventure, Casual",
        ]
    ];

    // displays content based on query string parameters
    // also checks the age by echoing js code
    switch ($value) {
        case 'TR':  
            echo "<script>let pegi = '" . $games['TR']['PEGI'] . "';</script>";
            echo "<script type='text/javascript'>
            let age = prompt('Confirm your age:');
            if (age < pegi ){
                alert('This game is not suitable for your age.');
                window.location.href = 'games.html';}
            while(isNaN(age)){
                age = prompt('Enter a number');}
        </script>";

            $gameInfo = $games['TR'];
            break;


        case 'HK':
            echo "<script>let pegi = '" . $games['HK']['PEGI'] . "';</script>";
            echo "<script type='text/javascript'>
            let age = prompt('Confirm your age:');
            if (age < pegi ){
                alert('This game is not suitable for your age.');
                window.location.href = 'games.html';}
            while(isNaN(age)){
                age = prompt('Enter a number');}
        </script>";

            $gameInfo = $games['HK'];
            break;

        /* Game review 4 */
        case 'BOK':  
            echo "<script>let pegi = '" . $games['BOK']['PEGI'] . "';</script>";
            echo "<script type='text/javascript'>
            let age = prompt('Confirm your age:');
            if (age < pegi ){
                alert('This game is not suitable for your age.');
                window.location.href = 'games.html';}
            while(isNaN(age) || age == ''){
                age = prompt('Enter a number');}
        </script>";

            $gameInfo = $games['BOK'];
            break;

        default:
            echo "loading...";

    }

    ?>
    
</body>

</html>