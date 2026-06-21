// js/main.js
document.addEventListener('DOMContentLoaded', () => {

    // Navbar Scroll Effect
    const navbar = document.getElementById('mainNav');
    if (navbar) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // Number Count-Up Animation
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200; // lower = faster

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-count');
            const count = +counter.innerText;
            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(animateCounters, 10);
            } else {
                counter.innerText = target + (target > 100 ? '+' : '');
            }
        });
    }

    // Trigger animation when stats section is in view
    const statsSection = document.getElementById('stats');
    let animated = false;
    if (statsSection) {
        window.addEventListener('scroll', () => {
            if (window.scrollY + window.innerHeight > statsSection.offsetTop && !animated) {
                animateCounters();
                animated = true;
            }
        });
    }

    // Dashboard Sidebar Toggle
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    if (sidebarToggle && sidebar) {
        sidebarToggle.addEventListener('click', (e) => {
            e.preventDefault();
            sidebar.classList.toggle('open');
        });
    }

});
