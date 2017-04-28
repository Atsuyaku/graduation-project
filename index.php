<!DOCTYPE HTML>
<html lang=fr>
	<head>
		<title>Projet SIN</title>
		<?php require_once('./templates/head.php');?>
	</head>
	<body>
		<header>
			<h1>Smart House</h1>
		</header>
		<div class="bordure">
			<section>

			</section>
		</div>
		<nav>
			<?php
			session_start();
			if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
				require_once('./templates/nav.php');
			}
			?>
		</nav>
		<div id="text">
			<ul>
				<li>Contôlez votre maison depuis n'importe où en quelques clics</li>
				<li>Soyez au courant de la température intérieure et de la luminosité extérieure</li>
				<li>Obtenez un historique de ces données dans le temps</li>
			</ul>
		</div>
		<div class="inscription">
			<p><a href="./users/login.html">Inscription</a></p>
		</div>
		<div class="connexion">
			<p><a href="./users/login.html">Connection</a></p>
		</div>
		<footer>
			<h5>Site développé en 2016/2017 par des élèves de Terminale STI2D SIN: Mediavilla, Beaubestre, Bonnet, Magueur, Baqué </h5>
		</footer>
	</body>
</html>
