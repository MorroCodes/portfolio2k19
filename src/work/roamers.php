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
                    <h2>Roamers</h2>                    
                    <p>
                        Roamers is a brand created for a group project in collaboration with <a href="http://www.ameliemathijs.be/" target="_blank">Amelie Mathijs</a>, <a href="https://www.develmode.be/" target="_blank">Develmode</a> and <a href="https://arcode.be/" target="_blank">Arcode</a>.<br>With Roamers, we wanted to make walking more accessible and exciting for students. I mainly worked on the animations and merchandising. 
                            <img src="../img/roamers.png" alt="Roamers">
                            <a class="cta block" target="_blank" href="http://roamers.mauroesposito.be/">Visit website</a>
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
