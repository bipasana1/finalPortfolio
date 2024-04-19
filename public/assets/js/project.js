document.addEventListener('DOMContentLoaded', function(){
    fetch('http://localhost:8888/get_projects')
     .then(response => response.json())
     .then(projects => {
            const container = document.querySelector('.row-cols-2');
            container.innerHTML = '';

            projects.forEach(project => {
                const colDiv = document.createElement('div');
                colDiv.className = 'col';

                const cardDiv = document.createElement('div');
                cardDiv.className = 'card shadow-sm fade-in';

                const img = document.createElement('img');
                img.className = "easyEatz";
                img.src = project.image_url.trim();
                img.alt = project.imageAlt;

                const cardBodyDiv = document.createElement('div');
                cardBodyDiv.className = 'card-body';

                const p = document.createElement('p');
                p.className = 'card-text';
                p.textContent = project.title;

                const divFlex = document.createElement('div');
                divFlex.className = 'd-flex justify-content-between align-items-center';

                const divBtnGroup = document.createElement('div');
                divBtnGroup.className = 'btn-group';

                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'btn btn-sm btn-outline-secondary';
                button.textContent = 'More Details';

                // Assemble the card components
                divBtnGroup.appendChild(button);
                divFlex.appendChild(divBtnGroup);
                cardBodyDiv.appendChild(p);
                cardBodyDiv.appendChild(divFlex);
                cardDiv.appendChild(img);
                cardDiv.appendChild(cardBodyDiv);
                colDiv.appendChild(cardDiv);
                container.appendChild(colDiv);
        });
    })
    .catch(error => console.error(error));
});

