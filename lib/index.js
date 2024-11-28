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
let slideTime = 5000; // 3 seconds

images[0] = 'https://cdn2.steamgriddb.com/hero/37107d39373c202221d6672722f514cf.png';
images[1] = 'https://hisameartwork.wordpress.com/wp-content/uploads/2018/01/sdv-banner.jpg';
images[2] = 'https://waytoomany.games/wp-content/uploads/2021/02/LN_2_1920_1080_banner.jpg';
// game[0] = "RAIN WORLD";
// game[1] = "STARDEW VALLEY";
// game[2] = "LITTLE NIGHTMARES";  TODO:make #8 game name change too
function changePicture() {
    document.getElementsByClassName("header")[0].style.backgroundImage = "url(" + images[i] + ")";
    // document.getElementById("textvak")[0].innerHTML = game[i];

    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    
    setTimeout(changePicture, slideTime);
}

window.onload = changePicture;