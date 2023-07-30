// Your custom JavaScript for dashboard interactivity
// Example: Toggle active class on dashboard navigation




// JavaScript for handling sidebar menu clicks and showing/hiding content
document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.dashboard-nav a');
    const contentSections = document.querySelectorAll('.content');
  
    navLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            navLinks.forEach(link => link.classList.remove('active'));
    
            this.classList.add('active');
        
        // Hide all content sections
        contentSections.forEach((section) => {
          section.classList.remove('active');
        });
  
        // Get the target content section ID from the data attribute of the clicked link
        const targetContentId = link.dataset.content;
        const targetContent = document.getElementById(`content-${targetContentId}`);
  
        // Show the target content section
        if (targetContent) {
          targetContent.classList.add('active');
        }
      });
    });
  });