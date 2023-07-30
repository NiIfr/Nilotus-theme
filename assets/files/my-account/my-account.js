// Your custom JavaScript for dashboard interactivity
// Example: Toggle active class on dashboard navigation
const navLinks = document.querySelectorAll('.dashboard-nav a');

navLinks.forEach(link => {
    link.addEventListener('click', function (event) {
        event.preventDefault();
        navLinks.forEach(link => link.classList.remove('active'));
        this.classList.add('active');
    });
});
