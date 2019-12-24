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
                    <h1>Communicatie</h1>
                    <h2>Designosource</h2>
                    <p>
                        Designosource heeft mij veel geleerd in verband met communicatie. Door de nauwe samenwerking met
                        klanten ben ik beter geworden in het aanpakken van moeilijke situaties. Zo weet ik nu
                        bijvoorbeeld hoe ik voorzichtig moet omgaan met een klant die een heel persoonlijk project wilt
                        maken. Ook heb ik geleerd dat het niet altijd het slimste idee is om alles direct op tafel te
                        smijten omdat dit klanten kan overweldigen afschrikken.
                        <img src="../img/skills/communicatie.png" alt="Bewijsstuk communicatie">
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