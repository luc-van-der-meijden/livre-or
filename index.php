<?php
	session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" media="screen and (min-device-width: 480px)" href="style.css"/>
		<title>Accueil - Livre d'or</title>
	</head>
	
	<body>
		<div class="body">
			<header>
				<?php
					include("header.php");
				?>
			</header>
		
		
			<div id="accueil">
				<?php
					if(isset($_SESSION['login']) || isset($_SESSION['password']))
					{
						echo "<h2>Bienvenue ".$_SESSION['login']." <br/> sur le site</h2>";
					}
					else{
						echo "<h2>Bienvenue sur le site</h2>";
					}
				?>
				
				<img id="img_accueil" src="Images/logo-serre-chevalier.png">
			</div>
		
			<footer>
				<?php
					include("header.php");
				?>
			</footer>
		</div>
	</body>	
</html>