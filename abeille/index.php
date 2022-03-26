<!DOCTYPE html>
<html lang="fr">
<head>
        <link rel="apple-touch-icon" sizes="180x180" href="./img/logo-abeille.jpg">
        <link rel="icon" type="image/png" sizes="32x32" href="./img/logo-abeille.jpg">
        <link rel="icon" type="image/png" sizes="16x16" href="./img/logo-abeille.jpg">
        <!-- og -->
        <meta property="og:url" content="undefined">
        <meta property="og:title" content="Abeille Informatique">
        <meta property="og:image" content="https://stage3.abeille.com/img/atelier.jpg">
        <meta property="og:description" content="Abeille Informatique">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="Abeille Informatique">
        <meta name="description" content="Abeille Informatique">
        <!-- endsection -->
        <meta charset="UTF-8">  
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Introduction - Website</title>
        <link rel="stylesheet" href="./css/reset.css">
        <link rel="stylesheet" href="./css/main.css">
        <link rel="stylesheet" href="./css/tooltip.css">
</head>
<body>

        <div class="tooltip"></div>
        <canvas id="snowCanvas"></canvas>

        <div class="ui-controller">
        <div id='content'></div>

                <?php require './components/menu-bar.html'; ?>
                <div id="ui-standard" class="ui-standard">
                        <div class="center">
                                <p class="title">Résumé</p>

                                <p class="content">Abeille Informatique est une société créée en 1998 par Lilian Coupat. Elle est spécialisée en ingénierie réseau et en hébergement web. La principale activité de la société consiste à proposer des solutions d'hébergements sur des serveurs dédiés. Les employés de la société possèdent également une expertise dans l’intégration de services, le développement logiciel et la gestion/création de bases de données.
                                <br><br>
                                L'équipe est constituée de sept salariés : Lilian Coupat, le gérant d'abeille informatique, Bruno Hernandez, un technicien administratif, Jérôme Crécy, un développeur specialisé dans l'hébergement, Pierre Colombier, un développeur réseau, Alexandre Rocha, un technicien et développeur réseau, Julien Paput, un technicien en téléphonie et Rachel Guilhot qui est en apprentissage pour deux ans.
                                <br><br>
                                </p>
                                <br>
                                <figure>
                                        <img src="./img/atelier.jpg">
                                        <figcaption>Atelier</figcaption>
                                </figure>
                                <figure>
                                        <img src="./img/bornes-esca.jpg">
                                        <figcaption>Bornes escamotables</figcaption>
                                </figure>
                                <figure>
                                        <img src="./img/laboratoire.jpg">
                                        <figcaption>Laboratoire</figcaption>
                                </figure>
                                <figure>
                                        <img src="./img/plaque-dehors.jpg">
                                        <figcaption>Plaque dehors</figcaption>
                                </figure>
                                <figure>
                                        <img src="./img/entrée.jpg">
                                        <figcaption>Entrée</figcaption>
                                </figure>
                                <figure>
                                        <img src="./img/antenne.jpg">
                                        <figcaption>Antenne</figcaption>
                                </figure>
                                <br><br>
                        </div>
                </div>
                <!-- <iframe name="embed_readwrite" src="https://mensuel.framapad.org/p/jppezity2t-9rop?showControls=true&showChat=true&showLineNumbers=true&useMonospaceFont=false" width="100%" height="600" frameborder="0"></iframe> -->
                <!-- <iframe name="embed_readonly" src="https://mensuel.framapad.org/p/r.76918610361339ba8963d8f9e0752dc1?showControls=true&showChat=true&showLineNumbers=true&useMonospaceFont=false" width="100%" height="600" frameborder="0"></iframe> -->
                </div>

                <div class="disclaimer">
                        <p class="content">
                                Les développeurs indiquent qu'une mise à jour d'interface arrivera
                                dans quelques semaines. <br> <span style="font-family: 'Inter SemiBold';">Stage3</span>
                        </p>
                </div>

    <script src="./script.js"></script>
    <script src="./tooltip.js"></script>
    <!-- <script src="./snow.js"></script> -->
    <script src="./rain.js"></script>
</body>
</html>