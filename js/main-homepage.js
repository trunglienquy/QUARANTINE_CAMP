const side_menu = document.querySelector(".sidebar");
const menu_left = document.querySelector(".bx-menu-alt-left");
const menu_right = document.querySelector(".bx-menu-alt-right");

menu_left.onclick = function() {
    side_menu.classList.toggle("active");
}