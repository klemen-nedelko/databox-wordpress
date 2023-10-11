document.querySelector('.hamburger-menu').addEventListener('click', function () {
    const navMenu = document.querySelector('.nav-menu');
    this.classList.toggle('active');
    navMenu.classList.toggle('active');
});