<!DOCTYPE html>
<html lang="nl">
<?php require_once 'includes/head.inc.php'; ?>

<body>
    <?php require_once 'includes/tagmanager_body.php'; ?>
    <div class="layout__grid">
        <a href="" class="logo mobile"></a>
        <?php include 'includes/nav.inc.php'; ?>
        <main class="contact">
            <div data-router-wrapper>
                <div data-router-view="work">
                    <h2>21st century skills</h2>
                    <p style="color: rgb(219, 219, 219);">Dit zijn mijn 21st skills eind 2019. Ze zijn geordend van beste (Topper) naar meeste werk aan (Flopper)</p>
                    <div class="contact__flex skills">
                        <a href="skill/creativiteit" class="contact__item">
                            <span class="rank">1</span>
                            <span>(Topper)</span>
                            <span>Creativiteit</span>
                        </a>
                        <a href="skill/communicatie" class="contact__item">
                            <span class="rank">2</span>
                            <span>Communicatie</span>
                        </a>
                        <a href="skill/samenwerken" class="contact__item">
                            <span class="rank">3</span>
                            <span>Samenwerken</span>
                        </a>

                        <a href="skill/kritisch-denken" class="contact__item">
                            <span class="rank">4</span>
                            <span>Kritisch denken</span>
                        </a>

                        <a href="skill/levenslang-leren" class="contact__item">
                            <span class="rank">5</span>
                            <span>Levenslang en levensbreed leren</span>
                        </a>
                        <a href="skill/ICT-geletterdheid" class="contact__item">
                            <span class="rank">6</span>
                            <span>ICT-geletterdheid</span>
                        </a>
                        <a href="skill/sociale-culturele-vaardigheden" class="contact__item">
                            <span class="rank">7</span>
                            <span>(flopper)</span>
                            <span>Sociale en culturele vaardigheden</span>

                        </a>

                    </div>
                </div>
            </div>
            <div class="gradient"></div>
            <div class="animation">
                <div class="square stripes"></div>
                <div class="square stripes reverse"></div>
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>

</html>