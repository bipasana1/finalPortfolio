document.addEventListener('DOMContentLoaded', function(){
    new Typed('.typed', {
        strings: ["Web developer", "Web designer", "Content creator", "SEO specialist"], // Your typed items
        typeSpeed: 70, // Typing speed in milliseconds
        loop: true // Whether to loop through the typed items
    });
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  });
  
  const cards = document.querySelectorAll('.card');  // Select all cards
  cards.forEach((card) => observer.observe(card));  // Observe each card
  