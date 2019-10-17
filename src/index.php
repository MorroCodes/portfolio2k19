<html lang="en">
<?php require_once 'includes/head.inc.php'; ?>
<body data-router-wrapper>
    <div class="layout__grid" data-router-view="home">
    <a href="" class="logo mobile"></a>
        <?php include 'includes/nav.inc.php'; ?>
        <main>
            <div class="logo large desktop"></div>
            <h1>Mauro Esposito</h1>
            <h2>Creative Web Developer</h2>
            <a href="work" class="cta">See my creations</a>
            <div class="gradient"></div>
            <div class="animation">
                <div class="square stripes"></div>
                <div class="square stripes reverse"></div>
            </div>
            <div class="instafeed">
            </div>
        </main>
    </div>
    <script src="js/main.js"></script>
</body>
</html>