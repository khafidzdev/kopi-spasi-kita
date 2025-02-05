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
const foodLink = document.getElementById('foodLink');
const drinkLink = document.getElementById('drinkLink');
const foodMenu = document.getElementById('foodMenu');
const drinkMenu = document.getElementById('drinkMenu');

foodLink.addEventListener('click', function(e) {
    e.preventDefault();
    foodMenu.style.display = 'block';
    drinkMenu.style.display = 'none';
});

drinkLink.addEventListener('click', function(e) {
    e.preventDefault();
    foodMenu.style.display = 'none';
    drinkMenu.style.display = 'block';
});
