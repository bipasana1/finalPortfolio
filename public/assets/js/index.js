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
    $('.see-details').click(function() {
        console.log("More Details clicked");
        const projectId = $(this).data('id');
        console.log("Project ID:", projectId);

        // Use AJAX to fetch project details
        $.ajax({
            url: 'project_detail', // Check if this is the correct endpoint
            type: 'GET',
            data: { id: projectId },
            success: function(response) {
                console.log("AJAX Success:", response);
                // Handle successful response
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching project details:', textStatus, errorThrown);
            }
        });
    });
});