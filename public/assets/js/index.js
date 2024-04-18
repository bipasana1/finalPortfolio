document.addEventListener('DOMContentLoaded', function(){
    new Typed('.typed', {
        strings: ["Web developer", "Web designer", "Content creator", "SEO specialist"], // Your typed items
        typeSpeed: 70, 
        loop: true 
    });
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
      }
    });
  });
  
  const cards = document.querySelectorAll('.card');  
  cards.forEach((card) => observer.observe(card)); 
