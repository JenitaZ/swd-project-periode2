/* 
*
* Slideshow on newestReview.php
*
*
*/

let reviewIndex = 0;
showReviews();

function showReviews() {
  let i;
  let reviews = document.getElementsByClassName("recent-reviews");
  for (i = 0; i < reviews.length; i++) {
    reviews[i].style.display = "none";  
  }
  reviewIndex++;
  if (reviewIndex > reviews.length) {reviewIndex = 1}    

  reviews[reviewIndex-1].style.display = "block";  

  setTimeout(showReviews, 3000); 
}