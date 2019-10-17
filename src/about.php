<html lang="en">
<?php require_once 'includes/head.inc.php'; ?>
<body>
    <div class="layout__grid">
    <a href="" class="logo mobile"></a>
        <?php include 'includes/nav.inc.php'; ?>
            <main class="about">
                <div data-router-wrapper>
                <div data-router-view="about">
                <img class="avatar" src="img/avatar.png" alt="Picture of Mauro Esposito">
                <h2>Hi, I'm Mauro Esposito</h2>
                <p>I'm a creative Web Development student at Thomas More Mechelen in Belgium. I enjoy making projects that are unique but at the same remain intuitive. In my day-to-day life I enjoy things like drawing and making music. If you have any questions or you'd like to work with me feel free to <a href="contact">contact me</a>!</p>
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