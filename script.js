document.addEventListener("DOMContentLoaded", function() {
    const starIcon = document.querySelector('.favorite-icon');

    starIcon.addEventListener('click', function() {
        if (starIcon.classList.contains('far')) {
            starIcon.classList.remove('far');
            starIcon.classList.add('fas');
            starIcon.style.color = 'gold'; // Change clicked star to gold
        } else {
            starIcon.classList.remove('fas');
            starIcon.classList.add('far');
            starIcon.style.color = '#ccc'; // Change back to gray color
        }
    });
});
