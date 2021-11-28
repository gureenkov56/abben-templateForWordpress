document.addEventListener("DOMContentLoaded", function() {
    const headerMobileMenuToggler = document.getElementById('headerMobileMenuToggler'),
        headerMenuWrapper = document.getElementById('header__menu-wrapper'),
        menuMain = document.getElementById('headerMenu');

    // open and close mobile menu
    headerMobileMenuToggler.addEventListener('click', () => {
        if(headerMenuWrapper.style.height == '0px'){
            headerMenuWrapper.style.height = menuMain.scrollHeight + 'px';
        } else {
            headerMenuWrapper.style.height = 0;
        }
    })

});