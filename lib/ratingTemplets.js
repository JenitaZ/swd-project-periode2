const numbers = document.querySelectorAll('.rating-number');
const selectedRating = document.getElementById('selected-rating');

numbers.forEach(number => {
  number.addEventListener('click', () => {
    const rating = number.getAttribute('data-value');
    selectedRating.textContent = rating;

    numbers.forEach(num => num.classList.remove('selected'));

    number.classList.add('selected');
  });

  number.addEventListener('mouseover', () => {
    const rating = number.getAttribute('data-value');
    numbers.forEach((num, index) => {
      if (index < rating) {
        num.classList.add('selected');
      } else {
        num.classList.remove('selected');
      }
    });
  });

  number.addEventListener('mouseout', () => {
    numbers.forEach(num => num.classList.remove('selected'));
  });
});

            