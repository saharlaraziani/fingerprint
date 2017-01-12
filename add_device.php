<?php
	include 'includes/config.php';
?>
<?php
session_start();
error_reporting("E-NOTICE");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Ajouter Device</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>


<div id="container">
	<div class="shell">
		
		<div class="small-nav">

			<a href="index1.php">Acceuil</a>
			<span>&gt;</span>
			Ajouter Device
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				<div class="box">
                    <h2>User id
                       <?php
				
                        $email=$_SESSION['email'];
                        $sel = "SELECT ID_user FROM user WHERE email = $email";
                        $rs = $conn->query($sel);
                        echo $rs ;?>
                    </h2>
                    <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rs;?></span>
					<div class="box-head">
                        <?php
                        if(!$_SESSION['email'] && (!$_SESSION['mot_de_passe'])){
                        ?>
                            <a href="account.php">Login</a>
                            <?php
                        } else {
                        ?>

                        <a href="choose_device.php" >Choisir</a>

						<h2>Ajouter Device</h2>


					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 symboles</span>
									<label>Nom Device <span>(Requis)</span></label>
									<input type="text" class="field size1" name="Nom" required />
								</p>	
								
							
						</div>
						
						<div class="buttons">
							<input type="button" class="button" value="preview" />
							<input type="submit" class="button" value="envoyer" name="send" />
						</div>
						
					</form>
					<?php


                    if(isset($_POST['send'])) {


						$idsf=$_SESSION['ID_fingerprint'];


								$device = $_POST['Nom'];

                                

								$qr = "INSERT INTO device (Nom,ID_user,date_creation) 
													VALUES ('$device','$_SESSION[ID_user]' ,NOW())";
								$res = $conn->query($qr);
								if($res === TRUE){
									$device_id = $conn->insert_id;
									echo "<script type = \"text/javascript\">
											alert(\"Appareil Ajoutée\");
											window.location = (\"index1.php\")
											</script>";
									$qry = "UPDATE fingerprint
SET ID_device = '$device_id'
WHERE ID_fingerprint = '$idsf' ";
									$result = $conn->query($qry);
								}
							
							else 'Failed';
					}
						?>
				</div>
                <?php
                }
                ?>

			</div>
			
			
			
		
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> </span>
		<span class="right">
			</a>
		</span>
	</div>
</div>
	
</body>
</html>