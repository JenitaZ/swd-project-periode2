document.addEventListener("DOMContentLoaded", function() {
    const ratingItems = document.querySelectorAll(".rating-item");
    const selectedRatingDisplay = document.getElementById("selected-rating");

    ratingItems.forEach(rate => {
        item.addEventListener("click", function() {
            const rating = this.getAttribute("data-value");
            updateSelection(rating);
            selectedRatingDisplay.textContent = rating;
        });
    });

    function updateSelection(rating) {
        ratingItems.forEach(rate => {
            if (item.getAttribute("data-value") === rating) {
                item.classList.add("selected");
            } else {
                item.classList.remove("selected");
            }
        });
    }
});
