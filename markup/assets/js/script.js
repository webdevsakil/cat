//menu 
const menuIcon = document.querySelector('.menubar');
const popupMenu = document.querySelector(".popup-menu");
const closeMenu = document.querySelector(".close-menu");
menuIcon.addEventListener("click", function () {
    popupMenu.classList.add("show-menu");
    popupMenu.classList.remove("hide-menu");
})
closeMenu.addEventListener("click", function () {
    popupMenu.classList.remove("show-menu");
    popupMenu.classList.add("hide-menu");
})


var slider = tns({
    container: '.tst-wrapper',
    items: 1,
    slideBy: 'page',
    autoplay: true,
    controls: false,
    nav: false,
    mouseDrag: true,
    autoplayButtonOutput: false,
    swipeAngle:true
});