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

// menu item

const hasChildren = document.querySelector(".menu-item-has-children");
hasChildren.classList.add("has-children");