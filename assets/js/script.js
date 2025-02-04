document.getElementById("menuBtn").addEventListener("click", function() {
    //document.body.classList.toggle("no-scroll");//
    document.getElementById("menuOverlay").classList.toggle("active");
    document.querySelector(".menu-btn").classList.toggle("active");
});

document.getElementById("menuOverlay").addEventListener("click", function() {
    //document.body.classList.remove("no-scroll");//
    document.getElementById("menuOverlay").classList.remove("active");
    document.querySelector(".menu-btn").classList.remove("active");
});
