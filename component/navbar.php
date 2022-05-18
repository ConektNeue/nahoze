<div class="navbar">
    <p class="title">Stage3</p>
    <div class="right">
        <?php
            if (isset($_SESSION['logged']) && $_SESSION['logged'] == 'true') {
                echo "<div class='btn-account btn-disconnect' onclick='location.href = `./logout.php`;'>Se déconnecter</div>";
            } elseif (strstr($_SERVER['REQUEST_URI'], 'login') == false) {
                echo "<div class='btn-account btn-connect' onclick='location.href = `./login/`;'>Se connecter</div>";
            }
        ?>
        <!-- <div class="btn-account btn-signin" onclick="location.href = './page/login.php';">S'inscrire</div> -->
    </div>
</div>