<!DOCTYPE html>
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
                <a href="<?=$url; ?>/works" class="cta">See my creations</a>
                <h3>I can help you translate your story to a <strong>digital platform</strong>. I'm a <strong>web developer</strong> with an eye for detail. Using the different <strong>web development frameworks</strong> like <strong>Laravel</strong> for <strong>PHP</strong> or <strong>NodeJS</strong> for <strong>JavaScript</strong>, I aim to create <strong>web platforms</strong> that fit <strong>your needs</strong>. I'm based in <strong>Geel</strong> and would love to meet to listen to your ideas.</h3>
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