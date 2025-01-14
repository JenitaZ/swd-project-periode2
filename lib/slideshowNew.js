/* 
*
* Slideshow on newestReview.php
*
*
*/
const myAge = prompt("Enter your age.");  
const reviews = document.getElementsByClassName("recent-reviews");

let reviewIndex = 0;

showReviews();

function showReviews() {
  if (myAge >= 16){
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }
    reviewIndex++;
    if (reviewIndex > reviews.length) {reviewIndex = 1}    

    reviews[reviewIndex-1].style.display = "block";  
    progressBar();
    setTimeout(showReviews, 23000); 
  }else {
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }

    reviews[0].style.display = "block"; 
  }
}

console.log(myAge);

/*  */

function progressBar() {
  const progress = document.querySelector('.progress-color');
  
  if (!progress) {
    console.error("Element with class 'progress-color' not found");
    return;
  }

  let startWidth = 0;
  let endWidth = 100;
  let remainingWidth = endWidth - startWidth;
  let currentWidth = startWidth;
  let duration = 22800;
  let lastTime = Date.now();

  function animate() {
    progress.style.width = `${currentWidth}%`;

    if (remainingWidth > 0) {
      const currentTime = Date.now();
      let elapsedTime = currentTime - lastTime;
      let timeFraction = Math.min(elapsedTime / duration, 1);

      currentWidth += startWidth + (endWidth - startWidth) * timeFraction;
      currentWidth = Math.min(currentWidth, endWidth);
  
      progress.style.width = `${currentWidth}%`;
      lastTime = currentTime;
    } else {
      clearInterval(interval);
  }
}
  const interval = setInterval(animate, 10);

  setTimeout(() => {
    clearInterval(interval);
    progress.style.width = '100%';
  }, duration + 250); // Add small delay to ensure animation completes
}


