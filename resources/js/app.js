import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';

// Alpine.js Dark Mode Store
Alpine.store('darkMode', {
    on: localStorage.getItem('darkMode') !== null
        ? localStorage.getItem('darkMode') === 'true'
        : true, // default dark
    toggle() {
        this.on = !this.on;
        localStorage.setItem('darkMode', this.on);
        document.documentElement.classList.toggle('dark', this.on);
    },
    init() {
        document.documentElement.classList.toggle('dark', this.on);
    }
});

// Alpine.js Mobile Menu Store
Alpine.store('mobileMenu', {
    open: false,
    toggle() {
        this.open = !this.open;
    },
    close() {
        this.open = false;
    }
});

Alpine.start();

// Init AOS
AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
});
