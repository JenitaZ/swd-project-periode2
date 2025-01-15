/*
*
* Bepaalt kleur van score review
* referenced: https://codepen.io/leandroamato/pen/jOWqrGe
*
*/

const ratings = document.querySelectorAll(".userRated");

ratings.forEach((rating) => {
  // Get content and get score as int
  const ratingContent = rating.innerHTML;
  const ratingScore = parseInt(ratingContent, 10);
  const scoreClass =
    ratingScore < 4 ? "bad" : ratingScore < 6 ? "meh" : ratingScore < 9 ? "good" : "great";

  rating.classList.add(scoreClass);

  rating.innerHTML = `<span>${ratingScore}`;
});
