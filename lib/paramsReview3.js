/*
*
* game review 3
* JS ||  Nier: automata en stalker 2
*
* gamepagina: reviewJS3-JZ.php
*/

const params = window.location.search;
let value = params.includes("0");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description"); 
const reviewImg = document.getElementById("reviewImg");
const reviewText = document.getElementById("wallOfText");
const genres = document.getElementById("genres");

let pegi;
let age;
let reviewVid = document.getElementById('reviewVid');
let currentIndex = 0;

// sets value based on query string in URL
if (params.includes("NR")){
    value = "NR";
}else {
    value = "STA";
}

/* rating staat in lib\PHP\reviews.php */
const gameInfo = {
    game0: {
        title: "NieR: Automata",
        release_date: "February 23rd 2017",
        platforms: "Nintendo Switch, PlayStation 4, Xbox One, Windows",
        description: "NieR: Automata tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.",
        image: [
            "https://shared.fastly.steamstatic.com/store_item_assets/steam/apps/524220/capsule_616x353.jpg?t=1727790045 ",
            "https://image.volkskrant.nl/112774604/width/2480/sabelgekletter-op-een-sf-slagveld-in-nie-r-automata",
            "https://cdn.dlcompare.com/game_tetiere/upload/gameimage/file/39711.jpeg.webp",
            "https://www.platinumgames.com/wp-content/uploads/2016/03/NieR_1-660x370.jpg",
            "https://www.youtube.com/embed/ARHVKZ5K1b0?si=hzHqKgLcZuZ8cEiH" ,
        ],
        alt: "NieR: Automata",
        gameDesc: "<span id='title'>NieR: Automata</span> <br> <span id='smallGrayText'>released on: february 23rd 2017, developed by: Takahisa Taura and Isao Negishi </span> <br><br>It tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.<br><br>Humanity has been driven from the Earth by mechanical beings from another world. In a final effort to take back the planet, the human resistance sends a force of android soldiers to destroy the invaders.<br><br> Now, a war between machines and androids rages on... A war that could soon unveil a long-forgotten truth of the world.",
        genre: " story",
    },

    game1: {
        title: "S.T.A.L.K.E.R. 2: Heart of Chornobyl",
        release_date: "November 20th, 2024",
        platforms: "Xbox series X/S, Nvidia Geforce Now, Windows",
        description: "Discover the vast Chornobyl Exclusion Zone full of dangerous enemies, deadly anomalies and powerful artifacts",
        image: [
            "https://i.ytimg.com/vi/uUSVMa2J2rc/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBPXftKYvY_qSt0QW1L6KT5YMoaxw",
            "https://www.datocms-assets.com/56706/1722518902-stalker-2-heart-of-chornobyl.jpg",
            "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1643320/ss_3d1db6aef02f006c4876ab6c5286128a411b93c8.1920x1080.jpg?t=1733317733",
            "https://img.gsc-game.net/q_85/stalker2/media/2406-03.jpg",
            "https://www.youtube.com/embed/1dHmayETd4c?si=w4JfDX6ipJ9L-Fcb"
        ],
        alt: "S.T.A.L.K.E.R. 2: Heart of Chornobyl",
        gameDesc: "<span id='title'>Stalker 2: Heart of Chornobyl</span> <br> <span id='smallGrayText'>released on: November 20th, 2024, developed and published by: GSC Game World </span> <br><br>Discover the legendary S.T.A.L.K.E.R. universe and experience:<br><br><ul><li>- Unique gameplay built on a blend of FPS, horror, and immersive sim <br><li>- It is a non-linear story, with a variety of paths that lead to one of the several endings <br></li><li>- Benchmark-setting graphics developed using cutting-edge photogrammetry and scanning technologies <br></li><li>- Advanced artificial intelligence systems that will keep engaged even the most hard-boiled players <br></li><li>- Immersive survival mechanics like hunger, sleeping, bleeding, radiation effects that enrich the gameplay<br></li><li>- Dynamic day-night cycle and weather will add even more realism to the gameplay experience<br></li><li>- Mod support gives the freedom to the creative stalker to extend and enrich the game universe<br></li><li>- Multiplayer mode, will be added after release as a free update ,</li></ul>",
        genre: " open world, survival",
    },

}

// Decides if and what game the page would show by checking age and URL.
switch (value) {
    
    // NieR: Automata
    case "NR": {
        currentGame = gameInfo.game0;
        reviewImg.src = currentGame.image[currentIndex];

        pegi = 16;
        age = prompt("CONTENT WARNING: VIOLENCE \n confirm your age:");

        if(age >= pegi){
            title.innerText = currentGame.title;
            rD.innerText = currentGame.release_date;
            platforms.innerText = currentGame.platforms;
            desc.innerText = currentGame.description;
            reviewImg.alt = currentGame.alt;
            genres.innerText += currentGame.genre;
            reviewText.innerHTML = currentGame.gameDesc;

         }else if (age === ""){
            alert(`No age entered`);
            window.location.href = "games.html";
   
        }else {
            alert(`This game isn't suitable for ${age}-year olds`);
            window.location.href = "games.html";
   
        }
        
        break;
    }    

    // STALKER 2
    case "STA": {
        currentGame = gameInfo.game1;
        reviewImg.src = currentGame.image[0];
        pegi = 16;
        age = prompt("What's your age?");
        
        if (age >= pegi){
        title.innerText = currentGame.title;
        title.style.fontSize = "27px";
        title.style.paddingBottom = "20px"; 
        rD.innerText = currentGame.release_date;
        platforms.innerText = currentGame.platforms;
        desc.innerText = currentGame.description;
        reviewImg.alt = currentGame.alt;
        reviewText.innerHTML = currentGame.gameDesc;
        genres.innerText += currentGame.genre;

        }else if (age === ""){
            alert(`No age entered`);
            window.location.href = "games.html";
            

        }else {
            alert(`This game isn't suitable for ${age}-year olds`);
            window.location.href = "games.html";

        }

        break;
    }
    
}

console.log(currentGame.title);

/* next img */
function changeGameImg() {
    currentIndex = (currentIndex + 1) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];

    if (currentIndex == currentGame.image.length - 1){
        reviewVid.src = currentGame.image[currentIndex];
        reviewImg.src = ""
        reviewImg.style.display = "none";
        reviewVid.style.display = "inline";

    }else {
        reviewVid.src = "";
        reviewVid.style.display = "none";
        reviewImg.style.display = "inline";
    }
}

/* prev img */
function changeGameImgL() {
    currentIndex = (currentIndex - 1 + currentGame.image.length) % currentGame.image.length;
    reviewImg.src = currentGame.image[currentIndex];

    if (currentIndex == currentGame.image.length - 1){
        reviewVid.src = currentGame.image[currentIndex];
        reviewImg.src = ""
        reviewImg.style.display = "none";
        reviewVid.style.display = "inline";

    }else {
        reviewVid.src = "";
        reviewVid.style.display = "none";
        reviewImg.style.display = "inline";
    }
}
