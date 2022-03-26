<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage3 · Connection</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./page.css">
</head>
<body>

    <div class="ui-controller">

        <?php require "../component/navbar.html"; ?>

        <?php require "../component/menu-bar.html"; ?>

        <div class="ui-standard">
            <p class="title">Connection</p>
            <div class="group">
                <form action="login-sys.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="text-input" type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input class="text-input" type="password" name="password" id="password" required>
                    </div>
                    <input class="btn-submit" type="submit" value="Se connecter">
                </form>
            </div>
        </div>

    </div>

</body>
</html>