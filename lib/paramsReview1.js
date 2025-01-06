/*
*
* game review 1
* JS || little nightmares + omori
*
*/

const params = window.location.search;
const value = params.includes("LN");

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewImg = document.getElementById("reviewImg");
const rate = document.getElementById("bs");
let pegi = 16;
let age = prompt("CONTENT WARNING: (PSYCHOLOGICAL) HORROR \n confirm your age:");


switch (value) {
    case true:
        /* checks age gotten from the prompt, executes code as seen */
        if(age >= pegi){
            title.innerText = "Little Nightmares 2";
            rD.innerText = " April 28th, 2017";
            platforms.innerText = "PS4, Windows en Xbox One";
            desc.innerText = "Little Nightmares II is a suspense-adventure game in which you play as Mono, a young boy trapped in a world that has been distorted by the humming transmission of a distant tower.";
            reviewImg.src = "img/games/LN_2_1920_1080_banner.jpg";
            reviewImg.alt = "Little Nightmares 2";
            rate.innerText += "     Positive";
        }else if (age === ""){
            alert(`No age entered`);
            window.location.href = "games.html";
   
        }else {
            alert(`This game isn't suitable for ${age}-year olds`);
            window.location.href = "games.html";
   
        }
    
        break;


    case false:
        if(age >= pegi){
            title.innerText = "Omori";
            rD.innerText = "December 25th, 2020";
            platforms.innerText = "PC, PS4, XBOX One, Nintendo Switch";
            desc.innerText = "Explore a strange world full of colorful friends and foes. Navigate through the vibrant and the mundane in order to uncover a forgotten past.When the time comes, the path you’ve chosen will determine your fate... and perhaps the fate of others as well.";
            reviewImg.src = "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1150690/header.jpg?t=1671584768";
            reviewImg.alt = "Omori";
            rate.innerText += "     Dunno";
        
        }else if (age === ""){
            alert(`No age entered`);
            window.location.href = "games.html";

        }else {
            alert(`This game isn't suitable for ${age}-year olds`);
            window.location.href = "games.html";

        }
        break;

    default:
        // komt nog..?
        break;
}

console.log (title.innerText);