<html lang="en">
    <?php require_once '../includes/head.inc.php'; ?>
    <body>
        <div class="layout__grid">
        <a href="" class="logo mobile"></a>
            <?php include '../includes/nav.inc.php'; ?>
                <main class="work__detail">
                    <div data-router-wrapper>
                    <div data-router-view="work">
                        <h2>Pocket</h2>
                        <p>
                            This is a project that I made in collaboration with 2 fellow students. It is a closed platform on which students with a living wage can earn additional income. It's built up from scratch using PHP and JQuery for AJAX calls.                            
                            <img src="../img/pocket_jobs.png" alt="Pocket">
                            <a class="cta block" target="_blank" href="http://pocketapp.be/">Visit website</a>
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