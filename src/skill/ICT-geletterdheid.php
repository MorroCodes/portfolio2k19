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
                    <h1>ICT-geletterdheid</h1>
                    <h2>Workshop WordPress</h2>
                    <p>
                        Workshop WordPress van Dielan heeft me geholpen om te starten met het maken van mijn eigen
                        thema’s. Als je het zelf moet uitzoeken kan het een beetje overwelmend zijn. Met behulp van de
                        workshop werden de concepten echter snel duidelijk. Met dank aan Dielan Ophals!
                        <img src="../img/skills/ICT-geletterdheid.jpg" alt="Bewijsstuk kritisch denken">
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