/* 
*
* Slideshow on index.html
* slideshow, https://stackoverflow.com/questions/43149429/automatic-slideshow-not-working-javascript
* 
*/

let slideIndex = 0;
showSlides();

// Hide imgs, show one
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    

  slides[slideIndex-1].style.display = "block";  

  setTimeout(showSlides, 6000); 
}