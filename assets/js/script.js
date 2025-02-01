const menuBtn = document.getElementById("menuBtn");
const menuOverlay = document.getElementById("menuOverlay");

menuBtn.addEventListener("click", function() {
    menuBtn.classList.toggle("active");
    menuOverlay.classList.toggle("active");
});
