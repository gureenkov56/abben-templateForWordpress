document.addEventListener("DOMContentLoaded", function() {
    const headerMobileMenuToggler = document.getElementById('headerMobileMenuToggler'),
        headerMenuWrapper = document.getElementById('header__menu-wrapper'),
        menuMain = document.getElementById('headerMenu'),
        burgerTop = document.querySelector('.burger-top'),
        burgerMiddle = document.querySelector('.burger-middle'),
        burgerBottom = document.querySelector('.burger-bottom');


    // open and close mobile menu
    headerMobileMenuToggler.addEventListener('click', () => {
        if(headerMenuWrapper.dataset.open === 'true'){
            headerMenuWrapper.dataset.open = 'false';
            headerMenuWrapper.style.height = 0;
            burgerTop.style.opacity = '1';
            burgerMiddle.style.cssText = 'transform: rotate(0deg);';
            burgerBottom.style.cssText = 'margin-top: 0px; transform: rotate(0deg);';
        } else {
            headerMenuWrapper.dataset.open = 'true';
            headerMenuWrapper.style.height = menuMain.scrollHeight + 'px';
            burgerTop.style.opacity = '0';
            burgerMiddle.style.cssText = 'transform: rotate(45deg);';
            burgerBottom.style.cssText = 'margin-top: -7px; transform: rotate(-45deg);';
        }
    })

});