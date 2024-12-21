
/* 
* Slideshow op index.html
*/

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

/* automatic slideshow met interval */
function changePicture() {
    document.getElementsByClassName("headerimg")[0].style.backgroundImage = "url(" + images[i] + ")";

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture;