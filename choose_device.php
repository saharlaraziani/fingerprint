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
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
                        $id=$_SESSION['ID_user'];
						$sel = "SELECT * FROM device where ID_user=$id";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			            		
			?> <li>

                    
                   
                    <div class="property_details">
                        <form method="post" class="tm-contact-form">
                            <table class=tm-contact-form-input">
                                <tr class="form-group">
                                    <td>Device:</td>
                                    <td>
                                        <select name="device" id="device">
                        <?php
                        while ($rws = mysqli_fetch_array($rs))
                        {
                        ?>
                        <!--h2> Nom: <span class="property_size"!--><option><?php echo $rws['Nom'];?></option><?php echo $rws['Nom'];?><!--/span></h2!-->
                            <?php
                        $idde=$rws['ID_device'];
                            echo("<p><b>Http referer:</b> $idde</p>");
                        }
                        ?>
                                        </select>
                                </td>
                                </tr>
                                <tr class="form-group">
                                    <td colspan="2" style="text-align:right"><input class="tm-submit-btn" type="submit" name="save" value="Choisir" ></td>
                                </tr>
                            </table>
                          
                        </form>

                    </div>
                </li>
				
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>

                    <a href="account.php">LOGIN</a>

				<?php
					} else
						{
                            $idsf=$_SESSION['ID_fingerprint'];
							include 'includes/config.php';

                            if(isset($_POST['save'])) {
                            $no= $_POST['device'];
                             $idu =   $_SESSION['ID_device'];
                            $qy = "SELECT ID_device  FROM device  WHERE Nom = '$no'";
                            $log = $conn->query($qy);
                            $num = $log->num_rows;
                            $row = $log->fetch_assoc();
                            if($num > 0) {
                                session_start();
                                $_SESSION['ID_device'] = $row['ID_device'];

                                $idd = $_SESSION['ID_device'];
                            






                                $qry = "UPDATE fingerprint
SET ID_device = '$idd'
WHERE ID_fingerprint = '$idsf' ";
                                $result = $conn->query($qry);

                                    echo "<script type = \"text/javascript\">
											window.location = (\"index1.php\")
											</script>";

                                }
                }
							
							?>

							<?php
						}
				?>
				
			</ul>
		</div>
	</section>	<!--  end listing section  -->


	
	
</body>
</html>