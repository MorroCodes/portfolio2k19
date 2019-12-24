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
                <a href="/skills" class="skills_back_link">	&lt;Terug naar skillsoverzicht</a>

                    <h1>Levenslang & levensbreed leren</h1>
                    <h2>Hackathon</h2>
                    <p>
                        Door jaarlijks deel te nemen aan de hackathon leer ik elk jaar bij over de specifieke thema’s.
                        Het is een goede oefening op snel concepten bedenken, omgaan met nieuwe mensen en efficiënt
                        verdelen van taken. Dit jaar ben ik voor de eerste keer in de prijzen gevallen. Mijn team
                        behaalde de 3e plaats met Radar: een app die videogame elementen toevoegt aan echte spellen
                        zoals paintball.
                        <img src="../img/skills/levenslang-leren.png" alt="Bewijsstuk levenslang leren">
                    </p>
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