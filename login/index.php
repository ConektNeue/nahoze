<?php

$menuBarContent = null;
// header("Access-Control-Allow-Origin: *");

// $username = $_REQUEST["email"];
// $password = $_REQUEST["password"];

// $data = file_get_contents('https://blockchain.info/ticker');
// $url = 'https://entpp.conekt.repl.co/accounts.json';
//     $ch = curl_init($url);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     $response = curl_exec($ch);
//     curl_close($ch);
//     $data = json_decode($response, TRUE); // passing true parameter
//     return $data;
// $decodedData = json_decode($data);
// var_dump($decodedData->USD);

// if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
//     $username = $_REQUEST["username"];
//     $password = $_REQUEST["password"];

//     if (file_exists("./username/{$username}.txt")) {
//         $username = file_get_contents("./username/{$username}.txt");
//     } else {
//         exit("Aucun utilisateur trouvé.<br>Revenez à la page précédente.");
//     }

//     $dataUrl = './data.json';
//     $dataContent = file_get_contents($dataUrl);
//     $data = json_decode($dataContent, true);

//     date_default_timezone_set('Europe/Paris');

//     $data[] = ['username' => $username, 'content' => $content, 'time' => date("H:i d.m.Y")];
//     $dataEncoded = json_encode($data);
//     file_put_contents($dataUrl, $dataEncoded);

//     if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
//         $url = "https://";
//     else
//         $url = "http://";

//     $url .= $_SERVER['HTTP_HOST'];
//     $url .= $_SERVER['REQUEST_URI'];
//     $url = strtok($url, '?');

//     function redirect($url, $statusCode = 303) {
//         header('Location: ' . $url, true, $statusCode);
//         die();
//     }
//     Redirect($url);
// }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stage3 · Connection</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <div class="ui-controller">

        <?php require "../component/navbar.php"; ?>

        <?php require "../component/menu-bar.php"; ?>

        <div class="ui-standard">
            <p class="title">Connection</p>
            <div class="group">
                <form action="./check-login.php" method="get">
                    <div class="form-group">
                        <label for="username">Nom d'utilisateur</label>
                        <input class="text-input" type="text" name="username" id="username" required>
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