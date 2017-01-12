<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
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
				<a href="#" class="tm-site-name">Device fingerprint</a>
			</div>
			<div class="col-lg-8 col-md-10 col-sm-11">
				<div class="mobile-menu-icon">
					<i class="fa fa-bars"></i>
				</div>
				<nav class="tm-nav">
					<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
						?>
						<ul>
							<li><a href="index1.php">Accueil</a></li>
							<li><a href="account.php" class="active">Login</a></li>
							
						</ul>

						<?php
					} else{
						?>
						<ul>
							<li><a href="index1.php" >Accueil</a></li>
							<li><a href="status.php">Voir votre fingerprint</a></li>
							<li><a href="message_admin.php" class="active">Envoyer nous un message </a></li>
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


	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Envoyez nous votre message</h2>
			<ul class="properties_list">
			<form method="post" class="tm-contact-form">
				<table class="tm-contact-form-input" >
					<tr class="form-group">
						<td style="color: #003300; font-weight: bold; font-size: 24px">Entrer votre message ici:</td>
					</tr>
					<tr class="form-group" >
						<td>&nbsp;</td>
					</tr>
					<tr class="form-group">
						<td>
							<textarea name="message" placeholder="Entrer le message" class="txt"></textarea>
						</td>
					</tr>
					<tr class="form-group" >
						<td><input type="submit" name="send" value="Envoyer messsage" class="btn-group-vertical tm-submit-btn"></td>
					</tr>
				</table>
			</form>
				<?php
					if(isset($_POST['send'])){
						include 'includes/config.php';
						
						$message = $_POST['message'];
						
						$qry = "INSERT INTO message (message,user_id,time,status)
							VALUES('$message','$_SESSION[email]',NOW(),'Unread')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Message Successfully Send\");
											window.location = (\"success.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Message Not Send. Try Again\");
											window.location = (\"message_admin.php\")
											</script>";
							}
					}
				?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


	
	
</body>
</html>