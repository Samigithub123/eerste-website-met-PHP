<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/c46a66447e.js" crossorigin="anonymous"></script>
    <title>Portfolio</title>
</head>
<body>
<header>
    <h1><a href="Portfolio.php" class="button">Home</a></h1>
    <nav class="about_me">
        <ul>
            <li><a href="Skills.php" class="button">Mijn skills</a></li>
            <li><a href="Projecten.php" class="button">Projecten</a></li>
            <li><a href="Contact.html" class="button">Contact</a></li>
            <li><a href="Interview.php" class="button">Interview</a></li>

        </ul>
    </nav>
</header>
<main>
    <p class="contact">Contact formulier </p>
    <form action="#" method="post">
        <label for="naam" class="text_formulier">Naam:</label>
        <input type="text" id="naam" name="naam" required>

        <label for="email" class="text_formulier">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <label for="bericht" class="text_formulier">Bericht:</label>
        <textarea id="bericht" name="bericht" rows="4" required></textarea>

        <button type="submit">Verstuur</button>
    </form>

</main>
<footer>
    <section class="footer_information">
        <h4>Contact & sociale media</h4>
        <p>Telefoon: +31 6 22662513</p>
        <p>Email: 9025776@student.zadkine.nl</p>
    </section>
    <div class="footer_social">
        <a href="https://github.com/Samigithub123" target="_blank">
            <i class="fa-brands fa-square-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/sami-ainashe-ba679b329/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="https://www.instagram.com/sami_manutd/" target="_blank">
            <i class="fa-brands fa-square-instagram"></i>
        </a>

    </div>

</footer>
<script>

</script>
</body>

</html>