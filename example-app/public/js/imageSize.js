
// Function to toggle the size of the image
function toggleImageSize(event) {
    var img = event.target;
    img.classList.toggle('enlarged');
}

// Add click event listener to each image
document.querySelectorAll('.gallery-image').forEach(function(img) {
    img.addEventListener('click', toggleImageSize);
});
