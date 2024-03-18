const menu_btw = document.querySelector(".hamburger");
const mobile_menu = document.querySelector(".mobile-nav");

menu_btw.addEventListener('click', function() {
    menu_btw.classList.toggle('is-active');
    mobile_menu.classList.toggle('is-active');
});
