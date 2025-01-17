/* 
*
* Slideshow and progressbar on newestReview.php
*	
*
*/

const myAge = prompt("Enter your age.");  
const reviews = document.getElementsByClassName("recent-reviews");
const progressBorder = document.querySelector(".progress-border");

let reviewIndex = 0;

showReviews();


// Hide reviews, show one
function showReviews() {
  if (myAge >= 16){
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }
	
    reviewIndex++;
    if (reviewIndex > reviews.length) {
		reviewIndex = 1
	}    
	
	// show the review for 23s, start progressbar
    reviews[reviewIndex-1].style.display = "block";  
    progressBar();
    setTimeout(showReviews, 23000); 

  }else {

	// only show the childfriendly game
    for (i = 0; i < reviews.length; i++) {
      reviews[i].style.display = "none";  
    }

    reviews[0].style.display = "block"; 
	progressBorder.style.display = "none";
  }
}


/* 
*
* Progressbar in newestReview
* Shows how long until it shows the next slide
*
*/

function progressBar() {

	const progress = document.querySelector('.progress-color');
	const startWidth = 0;
	const endWidth = 100;
	const remainingWidth = endWidth - startWidth;
	const duration = 22800;	//22.8s
	const interval = setInterval(animate, 10);	// executes animate() at intervals

	let currentWidth = startWidth;
	let lastTime = Date.now();

  
	if (!progress) {
	console.error("Element with class 'progress-color' not found");
	return;
	}


// 	function animate: 
//	1. sets width of progress, starting at 0%
//	2. gets the elapsedTime in ms
//	3. increases the width
//	4. updates the width
//	5. updates lastTime so the speed at which the bar increases stays the same
//	6. loops

	function animate() {
		progress.style.width = `${currentWidth}%`;

		if (remainingWidth > 0) {
			const currentTime = Date.now();
			let elapsedTime = currentTime - lastTime;
			let fractionTime = elapsedTime / duration;
		
			currentWidth += 100 * fractionTime;
			progress.style.width = `${currentWidth}%`;
			lastTime = currentTime;
		} else {
			clearInterval(interval);
		}
	}
		//clears bar after 23s
		setTimeout(() => {
			clearInterval(interval);
		}, duration + 200); 
}

