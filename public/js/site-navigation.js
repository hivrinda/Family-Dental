document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.wireframe-header .mobile-menu-toggle');
    const nav = document.getElementById('site-navigation');
    if (button && nav) {
        const close = () => {
            nav.classList.remove('active');
            button.setAttribute('aria-expanded', 'false');
            button.querySelector('i').className = 'fas fa-bars';
        };
        button.addEventListener('click', () => {
            const open = nav.classList.toggle('active');
            button.setAttribute('aria-expanded', String(open));
            button.querySelector('i').className = open ? 'fas fa-times' : 'fas fa-bars';
        });
        nav.querySelectorAll('a').forEach(link => link.addEventListener('click', close));
        document.addEventListener('click', event => {
            if (!nav.contains(event.target) && !button.contains(event.target)) close();
        });
        document.addEventListener('keydown', event => {
            if (event.key === 'Escape' && nav.classList.contains('active')) {
                close();
                button.focus();
            }
        });
    }
    const form = document.getElementById('smile-booking-form');
    if (form) {
        const date = document.getElementById('booking-date');
        const now = new Date();
        date.min = `${now.getFullYear()}-${String(now.getMonth() + 1).padStart(2, '0')}-${String(now.getDate()).padStart(2, '0')}`;
        form.addEventListener('submit', event => {
            event.preventDefault();
            if (!form.reportValidity()) return;
            const data = new FormData(form);
            const message = `Hello Dr. Farhana, I would like to book a consultation for ${data.get('treatment')}.\nName: ${data.get('name').trim()}\nPhone: ${data.get('phone').trim()}\nPreferred date: ${data.get('date') || 'Please suggest a date'}\nPlease confirm availability.`;
            window.location.assign(`https://wa.me/917012761098?text=${encodeURIComponent(message)}`);
        });
    }
    document.querySelectorAll('[data-service-url]').forEach(button => {
        button.addEventListener('click', () => window.location.assign(button.dataset.serviceUrl));
    });
});
