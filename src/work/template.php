<!DOCTYPE html>
<html lang="en">
    <?php require_once '../includes/head.inc.php'; ?>
    <body>
    <?php require_once '../includes/tagmanager_body.php'; ?>
        <div class="layout__grid">
        <a href="" class="logo mobile"></a>
            <?php include '../includes/nav.inc.php'; ?>
                <main class="work__detail">
                    <div data-router-wrapper>
                    <div data-router-view="work">
                    <h2>Template</h2>
                    <p>Here come dat boi template</p>
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