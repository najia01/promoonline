const menuBurger = document.getElementById("menuBurger");
const navigation = document.getElementById("menu-menu-1");

menuBurger.addEventListener('click', function() {
    navigation.classList.toggle("active")
})