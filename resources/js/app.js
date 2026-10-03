// Toggles the mobile navigation menu on the CV page.
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('nav-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (!navToggle || !navMenu) {
        return;
    }

    const closeMenu = () => {
        navMenu.classList.add('hidden');
        navToggle.setAttribute('aria-expanded', 'false');
    };

    navToggle.addEventListener('click', () => {
        const isOpen = navMenu.classList.contains('hidden');
        navMenu.classList.toggle('hidden');
        navToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    // Close the mobile menu once a link is used to jump to a section.
    navMenu.querySelectorAll('a').forEach((link) => link.addEventListener('click', closeMenu));
});
