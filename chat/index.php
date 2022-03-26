<?php
	if(!empty($_POST['text'])) {
		$text = $_POST['text'];
		$webhookUrl = "https://discord.com/api/webhooks/952552979985207306/9zPzsP_HxdB9xvjdTNCS0Sw1vT0AaLbRGqSglC1dGtmOTwE6nmVNpnnkoZ-PcaSaWzWU";

		$curl = curl_init($webhookUrl);
		curl_setopt($curl, CURL_POST, 1);
		curl_setopt($curl_POSTFIELDS, json_encode(array("content" => "test")));

		echo curl_exec($curl);

		$file = __DIR__ . DIRECTORY_SEPARATOR . 'sandisk.js';
		if ($text[0] === '<'){
			file_put_contents($file, "createSms(\"Quelqu'un a appelé une commande.\", true);", FILE_APPEND);
		} else {
			file_put_contents($file, "createSms(\"$text\");", FILE_APPEND);
		}
		$text = null;
	}
?>

<html lang="fr">
  <head>
	<meta property="og:title" content="Middle Point · Le chat anonyme de WentLab">
    <meta property="og:description" content="Enfin une messagerie instantanée simple et moderne ! (Pour envoyer un message, appuyez sur Entrée)">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Middle Point Chat · Went Lab">
    <meta name="author" content="kct_wl">
    <meta name="description" content="Enfin une messagerie instantanée simple et moderne ! (Pour envoyer un message, appuyez sur Entrée)">
	<meta charset="UTF-8">
	<!-- Image n manifest -->  
	<meta property="og:image" content="https://i2.wp.com/sis1302.aprend-is.net/wp-content/uploads/2019/01/image-1.png?w=400&ssl=1">
	<meta property="og:image:width" content="500">
	<meta property="og:image:height" content="500">
	<link rel="manifest" href="./identity/site.webmanifest">
	<link rel="apple-touch-icon" sizes="57x57" href="./identity/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./identity/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./identity/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./identity/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./identity/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./identity/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./identity/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./identity/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./identity/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./identity/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./identity/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./identity/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#7f7f7fbf">
	<meta name="msapplication-TileImage" content="./identity/ms-icon-144x144.png">
	<meta name="theme-color" content="#7f7f7fbf">
    <!-- endsection -->
    <title>Middle Point · Le chat anonyme par WentLab</title>
	<link id="style" rel="stylesheet" href="./style.css">
	<link id="darkTheme" rel="stylesheet" href="./dark-theme.css" disabled="disabled">
	<script>
        window.addEventListener("load", () => {
            if ("serviceWorker" in navigator) {
                navigator.serviceWorker.register('./sw1.js');
            }
        })
    </script>
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="refresh" content="30">
  </head>
  <body>

	<!--<div class="loading-interface">
		<div class="one"></div>
		<div class="two"></div>
	</div>-->

	<div class="ui-controller">

    <?php require './components/navbar.html'; ?>

		<div class="burger-menu">
			
			<div class="frame-one">
				<div id="btnOpenAppareanceFrameTwo">Apparence</div>
				<div id="btnOpenAcercadeFrameTwo">A propos</div>
			</div>

			<div class="frame-two appearenceBox">
				<div id="btnBackFrameTwoAppareance" class="btn-back"><img src="./img/back_96px.png"></div>
				<div class="title">Apparence</div>
				
				<div class="settings-item"><p>Theme sombre</p></div>
				<div id="toggleDarkTheme" class="togglement-area">
					<img src="./img/toggle_off_96px.png">
				</div>
				
				<!-- <div class="settings-item">
					<p>Barre de texte</p>
				</div>
				<div id="btnChangeStyleTextbar" class="togglement-area">
					<p>Squared</p>
				</div>

				<div id="dropdownChangeStyleTextbar" class="dropdown">
					<div id="squared">Squared</div>
					<div id="rounded">Rounded</div>
				</div> -->
			</div>

			<div class="frame-two acercadeBox">
				<div id="btnBackFrameTwoAcercade" class="btn-back"><img src="./img/back_96px.png"></div>
				<div class="title">A propos</div>

				<div class="settings-item"><p>Changelog</p></div>
				<div id="btnOpenChangelogFrameThree" class="togglement-area">
					<p>1</p>
				</div>

				<div class="settings-item"><p>Hub de commentaires</p></div>
				<div id="btnChangeStyleTextbar" class="togglement-area" herf="https://discord.gg/z6b6auxA37">
					<img class="regulment-toggarea-img" src="./img/ask_question_96px.png">
				</div>

				<div id="dropdownChangeStyleTextbar" class="dropdown">
					<div id="squared">Squared</div>
					<div id="rounded">Rounded</div>
				</div>
			</div>

        <div class="frame-two changelogBox">
          
            <div id="btnBackFrameTwoChangelogBox" class="btn-back"><img src="./img/back_96px.png"></div>
            
            <div class="title">Changelog</div>

            <div class="settings-item changelog-si">
                <p>
                    [V1.0.0.0] 2022.1.1
                    <br>
                    - Insertion d'image
                    <br>
                    - Reconnaissance faciale
                    <br>
                    - Gestion de la météo
                </p>
            </div>

            <div class="settings-item">
                <p>
                    [V1.0.0.0] 2022.1.1
                    <br>
                    - Insertion d'image
                    <br>
                    - Reconnaissance faciale
                    <br>
                    - Gestion de la météo
                </p>
            </div>
          
        </div>
		
		</div>

		<div class="messages">

			<!--<div class="sms">
		
    		<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.</p>
		
    	</div> -->

   		<!--<div class="sms warnsms">

				<p>
		
    		    🚧 <b class="sms-object">Image</b>
		
    			<br>
		
    			Picture insertion is in development
		
    			<!--<img src="./assets/img/piano.jpg" tabindex="0" onclick="displayImage('./assets/img/piano.jpg');">
		
    			<img src="./assets/img/no-wifi.svg" tabindex="0" onclick="displayImage('./assets/img/no-wifi.svg');">
		
    		</p>
		
    	</div> -->

		</div>
		
		<form action="./index.php" method="post" class="submit-form">
			<input type="text" name="text" class="textbar" maxlength="199" style="border: none !important;" require>
			<button id="smsSubmitBtn" tabindex="1" type="submit"><img src="./img/paper_plane_96px.png"></img></button>
		</form>

		<div class="black-screen"></div>

    <div class="disclaimer">
      <p class="content">
        Les insultes sont interdites. Merci d'éviter de s'amuser ici.
      </p>
    </div>

		<div class="modal-mask">
			
			<div class="modal modal-deletefeature">
				<div class="header">
					<p>Fonctionnalitée obsolète</p>
				</div>
				<div class="main">
					<p>
						Cette fonctionnalitée sera retirée incessament sous peu.
						Elle est inutile ou ne fonctionne tout simplement pas.
						Si elle est encore là, c'est pour voir pouvoir tirer des conclusion
						et pour en coder d'autres plus performantes encore.
					</p>
				</div>
				<div class="footer">
					<div class="btn primary btn-close-modal-deletefeature">
						<p>Fermer</p>
					</div>
				</div>
			</div>
			
			<div class="modal modal-physiquechimie">
				<div class="header">
					<p>Qu'est-ce qu'un atome</p>
				</div>
				<div class="main">
					<p>
						Le rayon d'un atome est de l'ordre du dizième de nanomètre.
						Le rayon du noyau atomique est environ 100k fois plus petit 
						que le rayon de l'atome, il est donc de l'ordre du
						femtomètre.
						<br><br>
						Des électrons sont en orbites autour du noyau. Les électrons
						ont une charge électrique négative. Les nucléons, qui sont
						l'ensemble des protons, de charge électrique positive, et
						des neutrons, de charge électrique neutre, sont de charge
						électrique positive.
						<br><br>
						La charge électrique positive du noyau et négative des
						électrons se compensent : l'atome a une charge électrique
						neutre.
					</p>
				</div>
				<div class="footer">
					<div class="btn close btn-gotogooglescholar-modal-physiquechimie">
						<p>Google Scholar</p><img src="./img/external_link_128px.png">
					</div>
					<div class="btn close btn-close-modal-physiquechimie">
						<p>Fermer</p>
					</div>
				</div>
			</div>
		
		</div>

	</div>

	<script src="./sandisk.js"></script>
	<script src="./modal.js"></script>
  </body>
</html>