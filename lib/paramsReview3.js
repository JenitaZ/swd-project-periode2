/*
*
* game review 3
* JS pagina's ||  Nier: automata en stalker 2
*
*/


const params = window.location.search;
const value = params.includes("0");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewImg = document.getElementById("reviewImg");
const reviewText = document.getElementById("wallOfText");

let pegi;
let age;

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
            "https://www.platinumgames.com/wp-content/uploads/2016/03/NieR_1-660x370.jpg"
        ],
        alt: "NieR: Automata",
        gameDesc: "<span id='title'>NieR: Automata</span> <br> <span id='smallGrayText'>released on: february 23rd 2017, developed by: Takahisa Taura and Isao Negishi </span> <br><br>It tells the story of androids 2B, 9S and A2 and their battle to reclaim the machine-driven dystopia overrun by powerful machines.<br><br>Humanity has been driven from the Earth by mechanical beings from another world. In a final effort to take back the planet, the human resistance sends a force of android soldiers to destroy the invaders.<br><br> Now, a war between machines and androids rages on... A war that could soon unveil a long-forgotten truth of the world."
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
        ],
        alt: "S.T.A.L.K.E.R. 2: Heart of Chornobyl",
        gameDesc: "<span id='title'>Stalker 2: Heart of Chornobyl</span> <br> <span id='smallGrayText'>released on: November 20th, 2024, developed and published by: GSC Game World </span> <br><br>Discover the legendary S.T.A.L.K.E.R. universe and experience:<br><br><ul><li>- Unique gameplay built on a blend of FPS, horror, and immersive sim <br><li>- It is a non-linear story, with a variety of paths that lead to one of the several endings <br></li><li>- Benchmark-setting graphics developed using cutting-edge photogrammetry and scanning technologies <br></li><li>- Advanced artificial intelligence systems that will keep engaged even the most hard-boiled players <br></li><li>- Immersive survival mechanics like hunger, sleeping, bleeding, radiation effects that enrich the gameplay<br></li><li>- Dynamic day-night cycle and weather will add even more realism to the gameplay experience<br></li><li>- Mod support gives the freedom to the creative stalker to extend and enrich the game universe<br></li><li>- Multiplayer mode, will be added after release as a free update ,</li></ul>"
    }
}

switch (value) {
    case true:
        let reviewImg = document.getElementById('reviewImg'); 
        let currentIndex = 0;
        reviewImg.src = gameInfo.game0.image[0];

        pegi = 16;
        age = prompt("Wat is je leeftijd?");

        if(age >= pegi){
            title.innerText = gameInfo.game0.title;
            rD.innerText = gameInfo.game0.release_date;
            platforms.innerText = gameInfo.game0.platforms;
            desc.innerText = gameInfo.game0.description;
            reviewImg.alt = gameInfo.game0.alt;
         
    
            reviewText.innerHTML = gameInfo.game0.gameDesc;
    
         }else if (age === ""){
            alert(`Je hebt niks ingevoerd`);
            window.location.href = "games.html";
   
        }else {
            alert(`Dit spel is niet geschikt voor ${age}-jarigen`);
            window.location.href = "games.html";
   
        }

        // slideshow with btns

    
        function changeGameImg() {
            currentIndex = (currentIndex + 1) % gameInfo.game0.image.length;
            reviewImg.src = gameInfo.game0.image[currentIndex];
            console.log(gameInfo.game0.image[currentIndex]);
        }
    
        function changeGameImgL() {
            currentIndex = (currentIndex - 1 + gameInfo.game0.image.length) % gameInfo.game0.image.length;
            reviewImg.src = gameInfo.game0.image[currentIndex];
            console.log(gameInfo.game0.image[currentIndex]);
        }
            
        break;
        

    case false:
        let reviewImg2 = document.getElementById('reviewImg'); 
        let currentIndex2 = 0;
        reviewImg2.src = gameInfo.game1.image[0];

        pegi = 16;
        age = prompt("What's your age?");
        
        if (age >= pegi){
        title.innerText = gameInfo.game1.title;
        title.style.fontSize = "27px";
        title.style.paddingBottom = "20px"; 
        rD.innerText = gameInfo.game1.release_date;
        platforms.innerText = gameInfo.game1.platforms;
        desc.innerText = gameInfo.game1.description;
        reviewImg2.alt = gameInfo.game1.alt;
        reviewText.innerHTML = gameInfo.game1.gameDesc;

        
        
        }else if (age === ""){
            alert(`No age entered`);
            window.location.href = "games.html";

        }else {
            alert(`This game isn't suitable for ${age}-year olds`);
            
            window.location.href = "games.html";

        }

        function changeGameImg() {
            currentIndex2 = (currentIndex2 + 1) % gameInfo.game1.image.length;
            reviewImg2.src = gameInfo.game1.image[currentIndex2];
            console.log(gameInfo.game1.image[currentIndex2]);
        }
    
        function changeGameImgL() {
            currentIndex2 = (currentIndex2 - 1 + gameInfo.game1.image.length) % gameInfo.game1.image.length;
            reviewImg2.src = gameInfo.game1.image[currentIndex2];
            console.log(gameInfo.game1.image[currentIndex2]);
        }
        break;
}
