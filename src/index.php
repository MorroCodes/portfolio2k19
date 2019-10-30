<html lang="en">
<?php require_once 'includes/head.inc.php'; ?>
<body>
<?php require_once 'includes/tagmanager_body.php'; ?>
    <div class="layout__grid">
    <a href="" class="logo mobile"></a>
        <?php include 'includes/nav.inc.php'; ?>
            <main>
                <div data-router-wrapper>
                <div data-router-view="home">
                <div class="logo large desktop"></div>
                <h1>Mauro Esposito</h1>
                <h2>Creative Web Developer</h2>
                <a href="<?=$url; ?>/work/" class="cta">See my creations</a>
                </div>
                </div>
                <div class="gradient"></div>
                <div class="animation">
                    <div class="square stripes"></div>
                    <div class="square stripes reverse"></div>
                </div>
            </main>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>