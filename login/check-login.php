<?php

session_start();

if (!empty($_REQUEST["username"]) && !empty($_REQUEST["password"])) {
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    $accountsUrl = '../database/accounts.json';
    $accountsContent = file_get_contents($accountsUrl);
    $accounts = json_decode($accountsContent, true);

    $isLoggedIn = false;

    for($i = 0; $i < count($accounts); $i++) {
        if ($accounts[$i]["username"] == $username && $accounts[$i]["password"] == $password) {
            $isLoggedIn = true;
            $_SESSION['logged'] = 'true';
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            for ($j = 0; $j < count($accounts[$i]["groups"]); $j++) {
                $fileName = $accounts[$i]["groups"][$j]['file_group_title'];

                $currentGroupMetadataUrl = "../groups/$fileName/metadata.json";
                $currentGroupeMetadataContent = file_get_contents($currentGroupMetadataUrl);
                $currentGroupeMetadata = json_decode($currentGroupeMetadataContent, true);

                $menuBarContent[] = $currentGroupeMetadata["title"];
            }
            $_SESSION["menuBarContent"] = $menuBarContent;
            header("Location: ../user/");
        }
        // if (isset($accounts[$i][$username]) && $accounts[$i][$username]["password"] == $password) {
        //     $_SESSION["username"] = $username;
        //     $_SESSION["password"] = $password;
        //     $isLoggedIn = true;
        //     header("Location: ../index.php");
        // }
    }

    if ($isLoggedIn == null) {
        header("Location: ../index.php?error=login&username=$username&password=$password");
    }

    // date_default_timezone_set('Europe/Paris');

    // $data[] = ['username' => $username, 'content' => $content, 'time' => date("H:i d.m.Y")];
    // $dataEncoded = json_encode($data);
    // file_put_contents($dataUrl, $dataEncoded);

    // if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
        // $url = "https://";
    // else
        // $url = "http://";

    // $url .= $_SERVER['HTTP_HOST'];
    // $url .= $_SERVER['REQUEST_URI'];
    // $url = strtok($url, '?');

    // function redirect($url, $statusCode = 303) {
        // header('Location: ' . $url, true, $statusCode);
        // die();
    // }
    // Redirect($url);
}

?>