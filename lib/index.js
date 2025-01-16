/*
*
* Hiding navbar on scroll
*
*
*/

let prevScrollpos = window.scrollY;
window.onscroll = function() {

// hides the nav when scrolling down by comparing scrollpositions
let currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav.navbar").style.top = "70px";
  } else {
    document.querySelector("nav.navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}


