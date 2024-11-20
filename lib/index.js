let prevScrollpos = window.scrollY;
window.onscroll = function() {
let currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.querySelector("nav.navbar").style.top = "10vh";
  } else {
    document.querySelector("nav.navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}

