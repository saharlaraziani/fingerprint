<!DOCTYPE html>
<html lang="en">
<html lang="en">
<head>
	<title>Device Fingerprint</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/templatemo-style.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>

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



	<section class="listings">
		<div class="wrapper">
			<div class="wrapper">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title"></h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
				</div>
			<ul>

				<form method="post" class="tm-contact-form">
					<table class="tm-contact-form-input">

						
						<tr class="form-group">
							<td colspan="2" style="text-align:right"><input class="tm-submit-btn"  type="submit" name="choose" value="Choisir"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['choose'])){
							include 'includes/config.php';
							
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	
</body>

</html>