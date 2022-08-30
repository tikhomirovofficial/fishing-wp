$(document).ready(() => {
    const burger = document.getElementById("burger")
    const burgerMenu = document.getElementById("burger__menu")
    const burgerMenuLinks = document.querySelectorAll("#burger__menu a")
    let opened = false

    const openMenu = () => {
        opened = true
        burger.classList.add('header__burger-block-opened')
        burgerMenu.classList.add('burger__menu-opened')
        document.body.style.overflow = "hidden";
    }
    const closeMenu = () => {
        opened = false
        burger.classList.remove('header__burger-block-opened')
        burgerMenu.classList.remove('burger__menu-opened')
        document.body.style.overflow = "";
    }

    burger.addEventListener('click',() => {
        if (opened) {
            closeMenu()
        } else {
            openMenu()
        }
    })
    burgerMenuLinks.forEach(item => {
        item.addEventListener('click', closeMenu)
    })


})
