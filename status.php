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
    ?>

    <section class="caption">
        <h2 class="caption" style="text-align: center">Your Device Fingerprint</h2>
        <h3 class="properties" style="text-align: center"> Could reveal your identity</h3>

    </section>
</section><!--  end hero section  -->

<?php

$_SESSION["userAgent"] = $_SERVER["HTTP_USER_AGENT"];

if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$_SESSION['userIP'] = $_SERVER["REMOTE_ADDR"];
$_SESSION['userIPCountry'] = $_SERVER["HTTP_CF_IPCOUNTRY"];
$_SESSION['HTTP_ACCEPT']=$_SERVER["HTTP_ACCEPT"];

$userAgent = $_SESSION['userAgent'];
// echo("<p><b>UserAgent:</b> $userAgent</p>");


$cos = $_COOKIE['height'];
//echo("<p><b>test:</b> $cos</p>");
$userIP = $_SESSION['userIP'];
//echo("<p><b>User IP Address:</b> $userIP</p>");
$userIPCountry = $_SESSION['userIPCountry'];
//echo("<p><b>User IP Address Country:</b> $userIPCountry</p>");
$_SESSION['HTTP_ACCEPT_ENCODING']=$_SERVER["HTTP_ACCEPT_ENCODING"];

$_SESSION['HTTP_ACCEPT_LANGUAGE']=$_SERVER["HTTP_ACCEPT_LANGUAGE"];

$_SESSION['HTTP_HOST']=$_SERVER["HTTP_HOST"];
$hh = $_SESSION['HTTP_HOST'];
//echo("<p><b>Http host:</b> $hh</p>");

$_SESSION['HTTP_ACCEPT_CHARSET']=$_SERVER["HTTP_ACCEPT_CHARSET"];
$hac = $_SESSION['HTTP_ACCEPT_CHARSET'];
//echo("<p><b>Http accept charset:</b> $hac</p>");
$_SESSION['HTTP_REFERER']=$_SERVER["HTTP_REFERER"];
$hr = $_SESSION['HTTP_REFERER'];
//echo("<p><b>Http referer:</b> $hr</p>");
$cos = $_COOKIE['cookiesen'];
$plu = $_COOKIE['plugins'];
$navplat = $_COOKIE['navplat'];
$geo = $_COOKIE['geo'];
$scre = $_COOKIE['screenr'];
//echo("<p><b>Http referer:</b> $cos</p>");
//echo("<p><b>Http referer:</b> $plu</p>");
//echo("<p><b>Http referer:</b> $navplat</p>");
//echo("<p><b>Http referer:</b> $geo</p>");
//echo("<p><b>Http referer:</b> $scre</p>");
?>
?>
<section class="listings">
    <div class="wrapper">
        <h2 style="text-decoration:underline">Your fingerprint</h2>
        <ul class="properties_list">
            <?php
            include 'includes/config.php';
            $sel = "SELECT * FROM user u,fingerprint f , device d  WHERE u.email = '$_SESSION[email]'and u.ID_user=d.ID_user and d.ID_device=f.ID_device ";
            $rs = $conn->query($sel);
            $rws = $rs->fetch_assoc();
            ?>
            <li>
                <h2"><span style="font-size:25px; color: #282133 ;font-weight: bold;">Fingerprint:</span> <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['ID_fingerprint'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">timeZone:</span>
                <!--?php
                echo date_default_timezone_get();
                ?-->
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['timeZone'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">browser_plugins:</span>
                <!--?php echo "<script type = \"text/javascript\">
                 var len = navigator.plugins.length;
                  for(var i = 0; i < len; i++){
             document.write(\"<p>\" + navigator.plugins[i].description + \"</p>\");
                            }
</script>";
                ?-->
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['browser_plugins'];?></span>
                <?php
                echo get_browser(null,true);
                ?>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">nav_platform:</span>
                <!--?php echo "<script type = \"text/javascript\">
                                document.write(navigator.platform);

                                </script>";
                    ?-->
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['nav_platform'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">cookies_enabled:</span>
                <!--span style="color:#003333;
                    font-weight: bold; font-size: 25px;"><!--?php echo $rws['cookies_enabled'];?></span!-->

                    <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['cookies_enabled'];?></span>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">do_not_track:</span>
                <!--span style="color:#003333;
                    font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['do_not_track'];?></span!-->
                   <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['dntJS'];?></span>
                <br>
                <!--span style="font-size:25px; color: #282133 ;font-weight: bold;">fonts_list:</span-->
                <!--span style="color:#003333;
                    font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['using_adblock'];?></span!-->
                <br>
                <!--?php echo "<script type = \"text/javascript\">
                 function getFonts() {

        // get list of fonts, and sort alphabetically
        var allFonts = [];
        for (var loop=1; loop<dlgHelper.fonts.count+1; loop++) allFonts[loop-1] = dlgHelper.fonts(loop);
        allFonts.sort();

        // create output list, and include samples of each font
        var outputStr = '';
        var fontTestString = 'ABC abc 123';
        for (var loop=0; loop<allFonts.length; loop++) {
            outputStr += '<span style=\"font-family: ' + allFonts[loop] + ';\">' + allFonts[loop] + '</span><br />\n';
        }
        document.getElementById('fontList').innerHTML = outputStr;
    }


                   </script>

                   ";?-->

                <!--span style="font-size:25px; color: #282133 ;font-weight: bold;">using_adblock:</span>
                 <span style="color:#003333;
                     font-weight: bold; font-size: 25px;"><!--?php echo $rws['using_adblock'];?></span>
                 <br-->
                <!--span style="font-size:25px; color: #282133 ;font-weight: bold;">webGL_vendor:</span>
                <span style="color:#003333;
                    font-weight: bold; font-size: 25px;"><!--?php echo $rws['webGL_vendor'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">WebGL_renderer:</span>
                <span style="color:#003333;
                    font-weight: bold; font-size: 25px;"><!--?php echo $rws['WebGL_renderer'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">user_agent:</span-->
                <!--span style="color:#003333;
                    font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['user_agent'];?></span!-->
                <!--?php

                $userAgent = $_SESSION['userAgent'];
                echo("<p><b>UserAgent:</b> $userAgent</p>");
                ?-->
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">User agent:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['user_agent'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">Operating system:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['os'];?></span>
                <br>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">fonts:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['fonts'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">localJS:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['localJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">dntJS:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['dntJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">acceptHttp:</span>
                <!-span style="color:#003333;
                font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['acceptHttp'];?></span!-->
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['acceptHttp'];?></span>
                <!--?php
                $httpaccept=$_SESSION['HTTP_ACCEPT'];
                echo("<p> $httpaccept </p>");?-->
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">hostHttp:</span>
                    <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['hostHttp'];?></span>
                <!--?php
                $hh = $_SESSION['HTTP_HOST'];
                echo("<p><b></b> $hh</p>");?-->
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">connectionHttp:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['connectionHttp'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">encodingHttp:</span>
                <!-span style="color:#003333;
                font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['encodingHttp'];?></span!-->
                <!--?php
                $httpaccepte=$_SESSION['HTTP_ACCEPT_ENCODING'];
                echo("<p> $httpaccepte </p>");?-->
                    <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['encodingHttp'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">languageHttp:</span>
                <!--span style="color:#003333;
                    font-weight: bold; font-size: 25px;"!--><!--?php echo $rws['languageHttp'];?></span!-->
                <!--?php
                $httpacceptl=$_SESSION['HTTP_ACCEPT_LANGUAGE'];
                echo("<p> $httpacceptl </p>");?-->
                     <span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['languageHttp'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">orderHttp:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['orderHttp'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">resolutionJS:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['resolutionJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">user ip country:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['userIPCountry'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">user ip:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['userIP'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">appnamejs:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['appnameJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">appcodenamejs:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['appcodenameJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">versionflashjs:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['versionFlashJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">javaenablesjs:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['javaenabledJS'];?></span>
                <br>
                <span style="font-size:25px; color: #282133 ;font-weight: bold;">sessionJS:</span>
					<span style="color:#003333;
						font-weight: bold; font-size: 25px;"><?php echo $rws['sessionJS'];?></span>

                </h2>
            </li>
        </ul>
        <img src="img/fingerprint-internet.jpg" alt="image" />
    </div>
</section>	<!--  end listing section  -->




</body>
</html>