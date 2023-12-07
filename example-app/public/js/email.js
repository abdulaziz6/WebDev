document.addEventListener("DOMContentLoaded", function () {
    var scrambledEmail = "moc.elpmaxe@tcatnoc"; // Reversed 'contact@example.com'
    var emailElement = document.getElementById("email");

    if (emailElement) {
        emailElement.textContent = scrambledEmail.split("").reverse().join("");
    }
});
