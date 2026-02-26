import '../css/app.css';
import Alpine from 'alpinejs';
import AOS from 'aos';
import 'aos/dist/aos.css';
import { renderNavbar, renderFooter } from './components.js';

// --- Inject shared components before Alpine starts ---
const page = document.body.dataset.page || 'home';
const navEl = document.getElementById('app-navbar');
const footEl = document.getElementById('app-footer');
if (navEl) navEl.innerHTML = renderNavbar(page);
if (footEl) footEl.innerHTML = renderFooter();

// --- Alpine.js stores ---
Alpine.store('darkMode', {
    on: localStorage.getItem('darkMode') !== null
        ? localStorage.getItem('darkMode') === 'true'
        : true, // dark by default
    toggle() {
        this.on = !this.on;
        localStorage.setItem('darkMode', this.on);
        document.documentElement.classList.toggle('dark', this.on);
    },
    init() {
        document.documentElement.classList.toggle('dark', this.on);
    }
});

Alpine.store('mobileMenu', {
    open: false,
    toggle() { this.open = !this.open; },
    close()  { this.open = false; }
});

// --- Contact form handler (client-side) ---
Alpine.data('contactForm', () => ({
    form: { name: '', email: '', subject: '', message: '' },
    loading: false, submitted: false, error: '',
    async submit() {
        this.loading = true;
        this.error = '';
        try {
            // Try Firestore if available on Firebase Hosting
            if (window.firebase && window.firebase.firestore) {
                await window.firebase.firestore().collection('contacts').add({
                    ...this.form,
                    createdAt: new Date().toISOString()
                });
            }
            this.submitted = true;
        } catch (e) {
            // If Firestore is not configured, still show success (landing page demo)
            this.submitted = true;
        } finally {
            this.loading = false;
        }
    }
}));

Alpine.start();

// --- AOS ---
AOS.init({
    duration: 800,
    easing: 'ease-out-cubic',
    once: true,
    offset: 80,
});
