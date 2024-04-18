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
    $('.btn-outline-secondary').click(function() {
        var projectId = $(this).data('id');
        if (!projectId) {
            console.error("Missing data-id attribute on button");
            return;
        }

        $.ajax({
            url: "project_detail.php",
            type: "GET",
            data: { id: projectId },
            success: function(response) {
                $('#project-details').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("Error fetching project details:", textStatus, errorThrown);
            }
        });
    });
});
