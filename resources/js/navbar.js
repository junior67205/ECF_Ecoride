document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const closeMenu = document.getElementById("closeMenu");
    const navMenu = document.getElementById("navMenu");

    // Gestion du menu mobile
    menuButton.addEventListener("click", () => {
        navMenu.classList.add("active");
        navMenu.classList.remove("-translate-x-full");
    });

    closeMenu.addEventListener("click", () => {
        navMenu.classList.remove("active");
        navMenu.classList.add("-translate-x-full");
    });

    // Fermer le menu en cliquant sur un lien
    const navLinks = navMenu.querySelectorAll("a");
    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
            navMenu.classList.add("-translate-x-full");
        });
    });
});
