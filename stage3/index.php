<?php
$loginError = null;
if (!empty($_REQUEST["error"])) {
    $error = $_REQUEST["error"];

    if ($error == "login") {
        $loginError = "error";
        // require "./component/login-error.html";
    }
}

$menuBarContent = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage3 · Bienvenue</title>
    <link rel="stylesheet" href="./reset.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <div class="ui-controller">

        <?php require "./component/navbar.php"; ?>

        <?php require "./component/menu-bar.php"; ?>

        <div class="ui-standard">
            <?php
            if ($loginError == "error") {
                require "./component/login-error.php";
                echo $_REQUEST['username'] . ' and ' . $_REQUEST['password'];
            }
            ?>
        </div>

    </div>

</body>
</html>