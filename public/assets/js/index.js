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

  $(document).ready(function() {
    // Attach click event handler to all buttons with class "see-details"
    $('.see-details').click(function() {
      // Get the project ID from the data-id attribute
      const projectId = $(this).data('id');
  
      // Use AJAX to fetch project details
      $.ajax({
        url: 'project_detail.php', // Replace with the actual URL for project_detail.php
        type: 'GET',
        data: { id: projectId }, // Send the project ID as data
        success: function(response) {
          // Handle successful response (likely containing project details)
          // You can use the response data to populate a modal or redirect to a project details page
          console.log(response); // For debugging purposes
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Handle AJAX request errors
          console.error('Error fetching project details:', textStatus, errorThrown);
        }
      });
    });
  });
  
  