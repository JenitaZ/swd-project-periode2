let prevScrollpos = window.scrollY;
window.onscroll = function() {
let currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "10vh";
  } else {
    document.getElementById("navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}

