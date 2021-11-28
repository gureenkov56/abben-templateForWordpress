document.addEventListener("DOMContentLoaded", function() {
    const headerMobileMenuToggler = document.getElementById('headerMobileMenuToggler'),
        headerMenuWrapper = document.getElementById('header__menu-wrapper'),
        menuMain = document.getElementById('headerMenu');

    // open and close mobile menu
    headerMobileMenuToggler.addEventListener('click', () => {
        if(headerMenuWrapper.dataset.open === 'true'){
            headerMenuWrapper.dataset.open = 'false';
            headerMenuWrapper.style.height = 0;
        } else {
            headerMenuWrapper.dataset.open = 'true';
            headerMenuWrapper.style.height = menuMain.scrollHeight + 'px';
        }
    })

});