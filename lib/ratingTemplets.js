const ratingItems = document.querySelectorAll('.rating-item');

const selectedRating = document.getElementById('selectedrating');

ratingItems.forEach(item =>
  item.addEventListener ("click"), function()
      {selectedRating.textContent = item.textContent;
      highlight(item);
  });

  item.addEventListener('mouseover', function() {
    highlight(item);

});