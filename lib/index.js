let prevScrollpos = window.scrollY;
window.onscroll = function() {
let currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav.navbar").style.top = "70px";
  } else {
    document.querySelector("nav.navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}


let i = 0;
let images = [];
let game = [];
let slideTime = 6000; 

images[0] = 'img/games/37107d39373c202221d6672722f514cf.png';
images[1] = 'img/games/sdv-banner.jpg';
images[2] = 'img/games/LN_2_1920_1080_banner.jpg';
// game[0] = "RAIN WORLD";
// game[1] = "STARDEW VALLEY";
// game[2] = "LITTLE NIGHTMARES";  TODO:make #8 game name change too
function changePicture() {
    document.getElementsByClassName("header")[0].style.backgroundImage = "url(" + images[i] + ")";

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture;
// -----------------------------------------

const title = document.getElementById("title");
const rD = document.getElementById("releaseDate");
const platforms = document.getElementById("releasedPlatforms");
const desc = document.getElementById("description");
const reviewImg = document.getElementById("reviewImg");

    // To do list ish
// Maak variabelen om de game data op te slaan.  
// Door de waarde van een variabele te veranderen kan een andere game getoond worden. 
// Gebruik hiervoor een switch-statement. 
// Maak gebruik van interpolatie om de data van de variabelen te tonen. 
// Zorg dat je ook in de console laat zien welke game er getoond wordt op de pagina. 

const params = window.location.search;
const foo = params.includes("LN");

switch(foo) {
    case true:
        title.innerText = "Little Nightmares 2";
        rD.innerText = " April 28th, 2017";
        platforms.innerText = "PS4, Windows en Xbox One";
        desc.innerText = "Little Nightmares II is a suspense-adventure game in which you play as Mono, a young boy trapped in a world that has been distorted by the humming transmission of a distant tower.";
        reviewImg.src = "img/games/LN_2_1920_1080_banner.jpg";
        reviewImg.alt = "Little Nightmares 2";
        break;

        
    case false:
        title.innerText = "Omori";
        rD.innerText = "December 25th, 2020";
        platforms.innerText = "PC, PS4, XBOX One, Nintendo Switch";
        desc.innerText = "Explore a strange world full of colorful friends and foes. Navigate through the vibrant and the mundane in order to uncover a forgotten past.When the time comes, the path you’ve chosen will determine your fate... and perhaps the fate of others as well.";
        reviewImg.src = "https://shared.cloudflare.steamstatic.com/store_item_assets/steam/apps/1150690/header.jpg?t=1671584768";
        reviewImg.alt = "Omori";
        break;
    
    default:
        // Handle the default case
        break;
        }