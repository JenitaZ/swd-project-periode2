// keep track of previous scroll position
let prevScrollPos = window.scrollY;

window.addEventListener('scroll', function() {
  const currentScrollPos = window.scrollY;

  if (prevScrollPos > currentScrollPos) {
    document.getElementsByClassName("scrollbar").style.display = inline;
  } else {
    document.getElementsByClassName("scrollbar").style.display = none;
  }

  prevScrollPos = currentScrollPos;
});