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

                    <h1>Sociale en culturele vaardigheden</h1>
                    <p>In mijn ogen is deze skill mijn absolute flopper. Ik zou graag meer culturele activiteiten doen (zoals bijvoorbeeld Us by Night) of meer betrokken geraken in de politiek om een impact te hebben op mijn leefwereld.</p>
                    <h2>Medewerker pukkelpop</h2>
                    <p>
                        Festivals zijn een belangrijk deel van de Belgische cultuur. Ik ga al 2 jaar als vrijwilliger
                        helpen op Pukkelpop, een van de grootste festivals in ons land. Samen met een groep verzorgen we
                        voor het middageten van alle andere vrijwilligers op het festival.
                        <img src="../img/skills/sociaal-culturele-vaardigheden.jpg"
                            alt="Bewijsstuk Sociaal culturele vaardigheden">
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