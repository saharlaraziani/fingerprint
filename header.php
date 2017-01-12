<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Device Fingerprint</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['mot_de_passe'])){
					?>
					<ul>
						<li><a href="index1.php">Accueil</a></li>
						
						<li><a href="#">A propos</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<a href="account.php">S'inscrire</a>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="index1.php">Accueil</a></li>
								<li><a href="status.php">Voir votre Fingerprint</a></li>
								<li><a href="message_admin.php">Envoyer nous un message </a></li>
							</ul>
					<a href="logout.php">Se déconnecter </a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>