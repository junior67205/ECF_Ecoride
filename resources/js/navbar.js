document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const closeMenu = document.getElementById("closeMenu");
    const navMenu = document.getElementById("navMenu");

    // Gestion du menu mobile
    menuButton.addEventListener("click", () => {
        navMenu.classList.add("active");
    });

    closeMenu.addEventListener("click", () => {
        navMenu.classList.remove("active");
    });

    // Fermer le menu en cliquant sur un lien
    const navLinks = navMenu.querySelectorAll("a");
    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            navMenu.classList.remove("active");
        });
    });
});
