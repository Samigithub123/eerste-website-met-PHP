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
    <?php

    include "header.php"
    ?>
</header>

<main>
    <div class="voorpagina_flex">
        <img class="Image_home" src="Media/ictcartoon2.png" alt="Cartoon illustration of ICT theme"/>
        <div id="tijdgebonden_begroeting" class="information">
            <p>Welkom bij mijn portfolio, Mijn naam is Sami Ainashe. Neem een kijkje naar mijn werk en ontdek wat ik voor jou kan betekenen!</p>
            <a href="Skills.php" class="interview">Mijn skills</a>
        </div>
    </div>
</main>

<footer>
    <?php

    include "footer.php"
    ?>
</footer>
<div id="cookie-banner" class="cookie-banner">
    <p>Deze website maakt gebruik van cookies om uw ervaring te verbeteren.</p>
    <button id="accept-cookies" class="button">Accepteren</button>
</div>
<script>
    // tijd gebonden begroeting
    const tijdgebondenBegroeting = document.getElementById('tijdgebonden_begroeting');
    const greetingText = tijdgebondenBegroeting.querySelector('p');

    // Huidige tijd ophalen
    const currentHour = new Date().getHours();
    let greeting;

    // Tijdstip bepalen
    if (currentHour < 12) {
        greeting = "Goedemorgen";
    } else if (currentHour < 18) {
        greeting = "Goedemiddag";
    } else {
        greeting = "Goedenavond";
    }

    // Begroeting aanpassen
    greetingText.textContent = `${greeting}, welkom bij mijn portfolio, Mijn naam is Sami Ainashe. Neem een kijkje naar mijn werk en ontdek wat ik voor jou kan betekenen!`;

    // Thema wisselen
    const themeToggle = document.getElementById('theme-toggle');
    const main = document.querySelector("main");

    // Controleer of een thema is opgeslagen in localStorage
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        main.classList.add(savedTheme);
        console.log(`Thema hersteld: ${savedTheme}`);
        if (savedTheme === 'light-mode') {
            themeToggle.textContent = 'Dark Mode';
        }
    }

    // Event listener voor de knop
    themeToggle.addEventListener('click', () => {
        main.classList.toggle('light-mode');
        const isLightMode = main.classList.contains('light-mode');

        // Knoptekst aanpassen
        themeToggle.textContent = isLightMode ? 'Dark Mode' : 'Light Mode';

        // Thema opslaan in localStorage
        localStorage.setItem('theme', isLightMode ? 'light-mode' : '');
        console.log(`Thema gewijzigd naar: ${isLightMode ? 'light-mode' : 'dark-mode'}`);
    });

    // Cookie-melding functionaliteit
    const cookieBanner = document.getElementById('cookie-banner');
    const acceptCookies = document.getElementById('accept-cookies');

    // Controleer of cookies al zijn geaccepteerd
    const cookiesAccepted = localStorage.getItem('cookiesAccepted');
    if (cookiesAccepted) {
        cookieBanner.classList.add('hidden');
        console.log('Cookies waren al geaccepteerd. Cookie-melding verborgen.');
    }

    // Event listener voor de accept-knop
    acceptCookies.addEventListener('click', () => {
        cookieBanner.classList.add('hidden');
        localStorage.setItem('cookiesAccepted', 'true');
        console.log('Cookies geaccepteerd. Cookie-melding verborgen.');
    });
    // hamburger menu
    const menuToggle = document.getElementById('menu-toggle');
    const menuItems = document.getElementById('menu-items');

    menuToggle.addEventListener('click', () => {
        menuItems.classList.toggle('hidden');
    });





</script>
</body>
</html>