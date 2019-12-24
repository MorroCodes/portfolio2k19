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
                        <h2>ChatApp</h2>
                        <p>
                            ChatApp is a live chatapplication I developed in collaboration with <a href="https://www.develmode.be/" target="_blank">Develmode</a>.<br>It was built using NodeJS/Express and Primus for WebSockets. ChatApp boasts a simple yet elegant design with nice features like a list of registered users and a secure login.
                            <img src="../img/chatapp.png" alt="ChatApp">
                            <a class="cta block" target="_blank" href="https://secret-savannah-51030.herokuapp.com/">Visit website</a>
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