<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bipasana Poudel's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/styles/style.css"></head>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap justify-content-between align-items-center py-3 mb-0 border-bottom">
        <div class="d-flex align-items-center">
            <img src="./assets/views/images/bitmoji.jpeg" alt="Bipasana's Bitmoji" class="bitmoji">
            <a href="./homepage.php" class="text-decoration-none">
                <span class="fs-4">Bipasana Poudel</span>
            </a>
        </div>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="./homepage.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="./projects.php" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="./resume.php" class="nav-link">Resume</a></li>
            <li class="nav-item"><a href="./contact.php" class="nav-link active" aria-current="page">Contact</a></li>
        </ul>
    </header>
</div>
<div class="conatiner">
    <div class="contact">    
        <h2>Contact Me</h2><br>
        <p>Hello! My name is Bipasan Poudel. I am studying computer science at Fordham University. I would love to hear from you!</p>
        <form>
    <form>
        <input type="text" id="fullname" name="fullname" placeholder="Full Name"><br>
        <input type="text" id="email" name="email" placeholder="Email"><br>
        <input type="text" id="phonenum" name="phonenum" placeholder="Phone Number"><br>
        <input type="text" id="message" name="message" placeholder="Message"><br>
        <input type="submit" value="Send">
    </form>
    <div class="social-container">                
        <a href="https://www.linkedin.com/in/bipasanapoudel/" class="text-decoration-none">
        <img class="linkedin" src="./images/linkedin.jpg" alt="Bipasana's LinkedIn">
        </a>
        <a href="mailto:bipasana12@gmail.com">
            <img class="gmail" src="<?= APP_IMAGES ?>/gmail.png" alt="Send Email to Bipasana">
        </a>              
    </div>
</div>
</div>
</body>