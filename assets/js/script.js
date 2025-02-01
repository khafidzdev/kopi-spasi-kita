document.getElementById("menuBtn").addEventListener("click", function() {
    document.body.classList.toggle("no-scroll");
});

document.getElementById("menuOverlay").addEventListener("click", function() {
    document.body.classList.remove("no-scroll");
});
