document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.querySelector(".navbar");
    const menuBtn = document.getElementById("menuBtn");
    const menuOverlay = document.getElementById("menuOverlay");
    const closeBtn = document.getElementById("closeBtn"); // Tombol close
    const logo = document.getElementById("logo");

    // Navbar scroll effect
    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
            logo.src = logo.getAttribute("data-dark-logo");
        } else {
            navbar.classList.remove("scrolled");
            logo.src = logo.getAttribute("data-light-logo");
        }
    });

    // Toggle menu
    menuBtn.addEventListener("click", function (event) {
        event.stopPropagation();
        menuOverlay.classList.toggle("active");
        menuBtn.classList.toggle("active");
    });

    // Tutup overlay saat tombol close ditekan
    closeBtn.addEventListener("click", function () {
        menuOverlay.classList.remove("active");
        menuBtn.classList.remove("active");
    });

    // Klik di luar overlay untuk menutup menu
    document.addEventListener("click", function (event) {
        if (!menuOverlay.contains(event.target) && !menuBtn.contains(event.target)) {
            menuOverlay.classList.remove("active");
            menuBtn.classList.remove("active");
        }
    });

    // Mencegah overlay tertutup saat di klik di dalamnya
    menuOverlay.addEventListener("click", function (event) {
        event.stopPropagation();
    });
});

document.addEventListener("DOMContentLoaded", function () {
    let foodMenu = document.getElementById("foodMenu");
    let drinkMenu = document.getElementById("drinkMenu");
    let foodLink = document.getElementById("foodLink");
    let drinkLink = document.getElementById("drinkLink");

    // Tampilkan food menu secara default
    foodMenu.style.display = "block";

    // Event listener untuk food tab
    foodLink.addEventListener("click", function (event) {
        event.preventDefault();
        foodMenu.style.display = "block";
        drinkMenu.style.display = "none";
    });

    // Event listener untuk drink tab
    drinkLink.addEventListener("click", function (event) {
        event.preventDefault();
        foodMenu.style.display = "none";
        drinkMenu.style.display = "block";
    });
});
