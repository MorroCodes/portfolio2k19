<html lang="nl">
    <?php require_once '../includes/head.inc.php'; ?>
    <body>
        <?php require_once '../includes/tagmanager_body.php'; ?>
        <div class="layout__grid">
        <a href="" class="logo mobile"></a>
            <?php include '../includes/nav.inc.php'; ?>
                <main class="work__detail blogpost">
                    <div data-router-wrapper>
                    <div data-router-view="work">
                        <h1>5 lightweight content management systemen voor front-end developers</h1>
                        <p>Een content management systeem laat je toe om eenvoudig de content op een website aan te passen/toe te voegen. Grote CMS-systemen zoals WordPress en Drupal hebben veel features maar een hoge opstapdrempel voor front-end developers. Daarom heb ik een lijstje samengesteld van 5 content management systemen waarmee jij vlug aan de slag kunt.</p>
                        <h2>GetSimple</h2>
                        <p>
                            GetSimple is een flat file content management systeem wat betekent dat het geen gebruik maakt van een database. Om een thema te maken met GetSimple kan je gewoon HTML/CSS gebruiken zoals je dat al kende. Door het toevoegen van enkele korte PHP tags komt het thema al snel tot leven. 
                            <a href="http://get-simple.info/">Klik hier om naar de website van GetSimple te gaan!</a>
                            <img src="../img/getsimple.jpg" alt="GetSimple">
                        </p>
                        <h2>Grav CMS</h2>
                        <p>
                            Ook Grav CMS is een flat file CMS maar in een moderner jasje. Om aan de slag te kunnen met Grav moet je kunnen werken met de command line interface. Thema’s zijn te bouwen met Twig, een erg populaire templating language. Hierdoor is Grav een goed beginpunt voor front-end developers die willen doorstromen naar Drupal.
                            <a href="https://getgrav.org/">Klik hier om naar de website van Grav te gaan!</a>
                            <img src="../img/grav.png" alt="Grav CMS">
                        </p>
                        <h2>Pico CMS</h2>
                        <p>
                            Pico CMS is het laatste flat file CMS van de lijst en gaat nog een stapje verder dan Grav. Het maakt namelijk gebruik van de populaire dependency manager Composer. In Pico ontwikkel je templates in Twig met eenvoudige variabelen waardoor je al snel een thema kunt opbouwen. 
                            <a href="http://picocms.org/">Klik hier om naar de website van Pico te gaan!</a>
                            <img src="../img/picoCMS.png" alt="Pico CMS">
                        </p>
                        <h2>Bolt CMS</h2>
                        <p>
                            Heb je echt nood aan een database? Dan is Bolt misschien meer jouw ding! Je kan er eenvoudig templates in bouwen met Twig en de eenvoudige backend heeft weinig uitleg nodig. Je kan ook kiezen om te werken met populaire CSS preprocessoren zoals Sass en Less. 
                            <a href="https://bolt.cm/">Klik hier om naar de website van Bolt te gaan!</a>
                            <img src="../img/boltCMS.png" alt="Bolt CMS">
                        </p>
                        <h2>ButterCMS</h2>
                        <p>
                            ButterCMS is een headless content management systeem. Dat betekent dat er geen standaard front-end aan verbonden is. Hierdoor kan je zelf kiezen hoe je je front-end opbouwt. Als je graag werkt met React, VueJs of Angular is ButterCMS dus perfect voor jou. Een basiskennis van API’s komt wel van pas als je kiest voor Butter.
                            <a href="https://buttercms.com/">Klik hier om naar de website van ButterCMS te gaan!</a>
                            <img src="../img/butterCMS.png" alt="ButterCMS">
                        </p>
                        <p>Er is niet één systeem dat het beste is voor iedereen. Als beginnend front-end developer zijn bovenstaande CMS-systemen zeker een goed instappunt. Het is zeker een goed idee om bij je volgend project de vraag te stellen of een Drupal of WordPress wel echt nodig is. De kans is reëel dat een lichter content management systeem een eenvoudiger en evenwaardig alternatief biedt.</p>
                    </div>
                    </div>
                </main>
                <div class="gradient"></div>
                <div class="animation">
                    <div class="square stripes"></div>
                    <div class="square stripes reverse"></div>
                </div>
        </div>
    </body>
    <script src="../js/main.js"></script>
</html>