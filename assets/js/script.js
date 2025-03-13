function toggleMenu() {
    let menu = document.getElementById("overlay");
    let btn = document.querySelector(".menu-btn");

    menu.classList.toggle("active");
    btn.classList.toggle("active");
}
