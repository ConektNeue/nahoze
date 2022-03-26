<!DOCTYPE html>
<html lang="fr">
<head>
        <link rel="apple-touch-icon" sizes="180x180" href="./img/logo-abeille.jpg">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/logo-abeille.jpg">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/logo-abeille.jpg">
        <!-- og -->
        <meta property="og:url" content="undefined">
        <meta property="og:title" content="Website - Le rapport de stage chez Abeille">
        <meta property="og:image" content="./img/logo-abeille.jpg">
        <meta property="og:description" content="Website - Le rapport de stage">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Website - Le rapport de stage chez Abeille">
        <meta name="description" content="Website - Le rapport de stage chez Abeille">
        <!-- endsection -->
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>404 - Stage3</title>
        <link rel="stylesheet" href="https://stage3.abeille.com/css/reset.css">
        <link rel="stylesheet" href="https://stage3.abeille.com/css/main.css">
        <link rel="stylesheet" href="https://stage3.abeille.com/css/tooltip.css">
</head>
<body>

<div class="tooltip"></div>

        <div class="ui-controller">
                <?php require './components/burger-menu.html'; ?>
                <?php require './components/menu-bar.html'; ?>
                <div class="ui-standard-shadow"></div>
                <div id="ui-standard" class="ui-standard">
                        <div class="center">
                                <p class="title">Page inexistante</p>

                                <p class="content">
                                La page que vous recherchez n'existe malheuresement pas 🤷‍♀️. Vous pouvez toujours
                                revenir à la page principale ou découvrir Poogle, notre librairie en développement.
                                <br><br>
                                </p>
                                <br>
                                <button onclick="location.href = './index.php';">Revenir à la page principale</button>
                                <button onclick="location.href = './poogle/index.php';">Découvrir Poogle</button>
                                <!-- <figure>
                                        <img src="https://brekor.com/wp-content/themes/brekor/imagenes/impulsamos.png">
                                </figure> -->
                                <br><br>
                        </div>
                </div>
        </div>

    <script src="./script.js"></script>
    <script src="./tooltip.js"></script>
</body>
</html>