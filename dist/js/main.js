document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.querySelector('.nav-menu');
    
    menuToggle.addEventListener('click', function () {
        navMenu.classList.toggle('active'); // Toggle the 'active' class to show or hide the menu
    });
});
