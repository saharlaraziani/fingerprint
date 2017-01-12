<!DOCTYPE html>
<html lang="en">
<head>
	<title>Device Fingerprint</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="Plateforme de location des voitures"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		echo "<script type = \"text/javascript\">
			 window.location.href = \"index1.php?nav=\" + navigator.platform;
									
									</script>";
		$navplat = $_GET['nav'];
		echo "<script type = \"text/javascript\">
                     
              window.location.href = \"index1.php?cookies=\" + navigator.cookieEnabled;
                                
                       </script>";
		$cookies = $_GET['cookies'];
		echo "<script type = \"text/javascript\">
                     
              window.location.href = \"index1.php?screenr=\" + screen.width + \"x\" + screen.height;
                                
                       </script>";
		echo "<script type = \"text/javascript\">
                     
              window.location.href = \"index1.php?geo=\" + navigator.geolocation;
                                
                       </script>";
		echo "<script type = \"text/javascript\">
                    var plugin = '';
                     var len = navigator.plugins.length;  
                      for(var i = 0; i < len; i++){
                 plugin +=  navigator.plugins[i].description ;
                                }
             window.location.href = \"index1.php?name=\" + plugin; }</script>";

		?>

		<section class="caption">
			<h2 class="caption" style="text-align: center">le fingerprint de votre device</h2>
			<h3 class="properties" style="text-align: center"> Une façon de connaître votre identité réelle </h3>
		</section>
	</section>



	


	<section class="listings">
		<div class="wrapper">
			
				<h3>S'enregistrer</h3>
				<form method="post">
					<table>
						<tr>
							<td>Nom et prénom:</td>
							<td><input type="text" name="nom" required></td>
						</tr>
						
						<tr>
							<td>Adresse email:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>Mot de passe:</td>
							<td><input type="text" name="mot_de_passe" required></td>
						</tr>
						<!--tr>
							<td>Device:</td>
							<td>
							<a href="add_device.php" class="add-button"><span>Ajouter  Appareil </span></a>
							<div class="cl">&nbsp;</div>
							</td>
							
						</tr!-->
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Envoyer"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$nom = $_POST['nom'];
							$device = $_POST['device'];
							$email = $_POST['email'];
							$mot_de_passe = $_POST['mot_de_passe'];
							
							
							$qry = "INSERT INTO user (nom,email,mot_de_passe,date_creation)
							VALUES('$nom','$email','$mot_de_passe',NOW())";
							$result = $conn->query($qry);

							
							

							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Inscrit avec succés.\");
											window.location = (\"add_device.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
	</section>	<!--  end listing section  -->


	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">


				</li>
				<li class="links">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</li>


				<li class="about">


	</footer><!--  end footer  -->
	
</body>
</html>