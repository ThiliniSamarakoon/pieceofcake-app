document.addEventListener('DOMContentLoaded', function () {
    const categorySelect = document.getElementById('sort-select');
    const images = document.querySelectorAll('.rounded-image');

    categorySelect.addEventListener('change', function () {
        const selectedOption = categorySelect.options[categorySelect.selectedIndex];
        const selectedCategory = selectedOption.getAttribute('data-category');

        images.forEach(function (image) {
            const imageCategories = image.getAttribute('data-category').split(' ');

            if (selectedCategory === 'all' || imageCategories.includes(selectedCategory)) {
                image.parentElement.style.display = 'block';
            } else {
                image.parentElement.style.display = 'none';
            }
        });
    });
});
