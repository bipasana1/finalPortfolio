document.addEventListener("DOMContentLoaded", function() {
    fetchProjects();
});

function fetchProjects() {
    fetch('ProjectController.php')
    .then(response => response.json())
    .then(data => {
        displayProjects(data);
    })
    .catch(error => console.error('Error fetching projects:', error));
}

function displayProjects(projects) {
    const projectsContainer = document.getElementById('projects-container');
    projects.forEach(project => {
        const projectDiv = document.createElement('div');
        projectDiv.innerHTML = `
            <h2>${project.title}</h2>
            <p>${project.description}</p>
            <a href="${project.link}">Link</a>
        `;
        projectsContainer.appendChild(projectDiv);
    });
}
