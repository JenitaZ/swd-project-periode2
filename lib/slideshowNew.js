/* 
*
* Slideshow on newestReview.php
*
*
*/
const myAge = prompt("Enter your age.");  
const reviews = document.getElementsByClassName("recent-reviews");

let reviewIndex = 0;
let i;

showReviews();

function showReviews() {
  if (myAge >= 16){
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }
    reviewIndex++;
    if (reviewIndex > reviews.length) {reviewIndex = 1}    

    reviews[reviewIndex-1].style.display = "block";  

    setTimeout(showReviews, 30000); 
  }else {
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }

    reviews[0].style.display = "block"; 
  }
}

console.log(myAge);

/*  */
