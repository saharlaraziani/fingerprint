
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
	<title>Device fingerprint</title>
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

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<?php
session_start();
error_reporting("E-NOTICE");


?>
<!-- Header -->
<div class="tm-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-2 col-sm-1 tm-site-name-container">
				<a href="#" class="tm-site-name">Device Fingerprint</a>
			</div>
			<div class="col-lg-8 col-md-10 col-sm-11">
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="tm-nav">
					<?php
					if(!$_SESSION['email'] && (!$_SESSION['mot_de_passe'])){
						?>
						<ul>
							<li><a href="index1.php">Accueil</a></li>

							<li><a href="account.php" class="active">Login</a></li>

						</ul>

						<?php
					} else{
						?>
						<ul>
							<li><a href="index1.php" class="active">Accueil</a></li>
							<li><a href="status.php">Voir votre fingerprint </a></li>
							<li><a href="message_admin.php">Envoyer nous un message </a></li>
						</ul>
						<a href="logout.php">Se déconnecter </a>
						<?php
					}
					?>
				</nav>
			</div>
		</div>
	</div>
</div>
<section>

		<div class="wrapper">
			<div class="tm-section-header section-margin-top">
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
				<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Login </h2></div>
				<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
			</div>
			<div id="fom">
			<form method="post"  class="tm-contact-form">
				<table class="tm-contact-form-input">
					<tr class="form-group">

						<td>Adresse email:</td>
						<td><input type="email" name="email" placeholder="Entrer Email " required class="form-control"></td>
					</tr>
					<tr class="form-group">
						<td>Password:</td>
						<td><input type="password" name="mot_de_passe" placeholder="Enter mot de passe" required class="form-control"></td>
					</tr>

					
					<tr class="form-group ">

						<td><input type="submit" name="log" value="Se connecter" class="btn-group-vertical tm-submit-btn"></td>

                        <td style="text-align:end;"><a href="signup.php">S'inscrire</a></td>
					</tr>
				</table>
			</form>
			<?php
            $idsf=$_SESSION['ID_fingerprint'];

            echo $idsf ;
				if(isset($_POST['log'])){
					include 'includes/config.php';




					$email = $_POST['email'];
					$mot_de_passe = $_POST['mot_de_passe'];
					
					$qy = "SELECT * FROM user WHERE email = '$email' AND mot_de_passe = '$mot_de_passe'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['mot_de_passe'] = $row['mot_de_passe'];
						$_SESSION['ID_user'] = $row['ID_user'];
						$_SESSION['nom']=$row['nom'];

						$idu=$_SESSION['ID_user'] ;


						

						$qry = "UPDATE fingerprint
SET ID_user = '$idu'
WHERE ID_fingerprint = '$idsf' ";
						$result = $conn->query($qry);	
						

						echo "<script type = \"text/javascript\">
									alert(\"Bienvenue\");
									window.location = (\"add_device.php\")
									</script>";
						
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Connexion échouée, réessayer !\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>

	</section><!--  end search section  -->


</body>
</html>