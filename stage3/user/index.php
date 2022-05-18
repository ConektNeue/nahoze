<?php

if (!session_id()){
    session_start();
}

// $_SESSION['menuBarContent'];
$menuBarContent = null;

foreach ($_SESSION['menuBarContent'] as $key => $value) {
    $menuBarContent[] = $value;
}

$uiStandardclass = '';
$currentGroup = null;

if (!empty($_REQUEST["group"])) {
    $currentGroup = $_REQUEST["group"];
    if (!empty($_REQUEST["msg_content"])) {

        $msg_content = $_REQUEST["msg_content"];
        $time = $_REQUEST["time"];

        $messagesUrl = "../groups/$currentGroup/messages.json";
        $messagesContent = file_get_contents($messagesUrl);
        $messages = json_decode($messagesContent, true);

        date_default_timezone_set('Europe/Paris');

        $messages[] = ["username" => $_SESSION["username"], 'content' => htmlspecialchars($_REQUEST["msg_content"]), 'time' => date("H:i d.m.Y")];
        $messagesEncoded = json_encode($messages);
        file_put_contents($messagesUrl, $messagesEncoded);

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";

        $url .= $_SERVER['HTTP_HOST'];
        $url .= $_SERVER['REQUEST_URI'];
        $url = strtok($url, '?');
        $url .= "?group=$currentGroup";

        function redirect($url, $statusCode = 303) {
            header('Location: ' . $url, true, $statusCode);
        }
        Redirect($url);
    }
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($_SESSION["username"]) ?> · Stage3</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body onkeypress="keyIsPressed();">

    <div class="ui-controller" <?php $uiStandardclass ?> >

        <?php require "../component/navbar.php"; ?>

        <?php require "../component/menu-bar.php"; ?>

        <div class="ui-standard">
            <?php
            if (!empty($_REQUEST["group"])) {
                $group = $_REQUEST["group"];
                require "../component/chat-box.php";
            } else {
                echo "<p class='title'>Hello " . htmlspecialchars($_SESSION["username"]) . " !</p>";
            }
            ?>
        </div>

    </div>

    <script>
        let textBar = document.getElementById("msg_content");
        function keyIsPressed() {
            textBar.focus();
        }
    </script>
</body>
</html>