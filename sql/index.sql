CREATE TABLE projects(
    project_id INT PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description TEXT,
    skills_used VARCHAR(255),
    tools_used VARCHAR(255),
    link VARCHAR(255)
);

INSERT INTO projects (title, description, skills_used, tools_used, link) VALUES (
    'EasyEatz Protoype', 
    'Aimed to simplify online menu navigation for budget-conscious users, especially college students.',
    'UI/UX Design, Prototyping',
    'Figma',
    'https://www.figma.com/proto/XouNgAuC4bgGkQnwT6vhQx/EasyEatz?page-id=0%3A1&type=design&node-id=1-4&viewport=559%2C-718%2C0.77&t=K4U8WFLbQ7Sv0TgL-1&scaling=scale-down&mode=design'
);

INSERT INTO projects (title, description, skills_used, tools_used, link) VALUES (
    'TinDog', 
    'Designed a website as a project for a bootcamp which can be used as tinder or dating website for dogs.',
    'CSS, HTML',
    'Bootstrap',
    'Link'
);
