const side_menu = document.querySelector(".sidebar");
const menu_left = document.querySelector(".bx-menu-alt-left");
const menu_right = document.querySelector(".bx-menu-alt-right");

menu_left.onclick = function() {
    side_menu.classList.toggle("active");
}

const bell = document.querySelector(".bell-ring");
const mainbell = document.querySelector(".main-notification");

bell.onclick = function(){
    mainbell.classList.toggle("active-notification");
}