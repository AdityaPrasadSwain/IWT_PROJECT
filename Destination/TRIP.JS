document.getElementById('toggle-button').addEventListener('click', function() {
    const hiddenImages = document.getElementById('hidden-images');
    if (hiddenImages.style.display === 'none' || hiddenImages.style.display === '') {
        hiddenImages.style.display = 'block';
        this.textContent = 'Show Less Images';
    } else {
        hiddenImages.style.display = 'none';
        this.textContent = 'Show More Images';
    }
});
