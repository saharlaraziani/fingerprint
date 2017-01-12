<?php
session_start();
error_reporting("E-NOTICE");


?>
<!DOCTYPE html>
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
<body class="tm-gray-bg">
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
                            <li><a href="index1.php" class="active">Accueil</a></li>

                            <li><a href="account.php">Login </a></li>

                        </ul>

                        <?php
                    } else{
                        ?>
                        <ul>
                            <li><a href="index1.php">Accueil</a></li>
                            <li><a href="status.php">Voir votre Fingerprint </a></li>
                            <li><a href="message_admin.php">Envoyer nous un message </a></li>
                        </ul>
                        <a href="logout.php">Se déconnecter </a>
                        <?php
                    }
                    ?>
                </nav>
            </div>
            <img src="img/fingerprint_process.png" alt="Image" />
        </div>
    </div>
    <?php

        include 'includes/config.php';

   session_start();

    $_SESSION["userAgent"] = $_SERVER["HTTP_USER_AGENT"];

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $_SESSION['userIP'] = $_SERVER["REMOTE_ADDR"];
    $_SESSION['userIPCountry'] = $_SERVER["HTTP_CF_IPCOUNTRY"];
    $_SESSION['HTTP_ACCEPT']=$_SERVER["HTTP_ACCEPT"];

    $userAgent = $_SESSION['userAgent'];
    $userIP = $_SESSION['userIP'];
    $userIPCountry = $_SESSION['userIPCountry'];
    $_SESSION['HTTP_ACCEPT_ENCODING']=$_SERVER["HTTP_ACCEPT_ENCODING"];
     $encodingHttp=$_SESSION['HTTP_ACCEPT_ENCODING'];
    $_SESSION['HTTP_ACCEPT_LANGUAGE']=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
    $languageHttp=$_SESSION['HTTP_ACCEPT_LANGUAGE'];
    $_SESSION['HTTP_HOST']=$_SERVER["HTTP_HOST"];
    $hh = $_SESSION['HTTP_HOST'];
    $_SESSION['HTTP_ACCEPT']=$_SERVER["HTTP_ACCEPT"];
    $hac = $_SESSION['HTTP_ACCEPT'];
    $_SESSION['HTTP_REFERER']=$_SERVER["HTTP_REFERER"];
    $hr = $_SESSION['HTTP_REFERER'];
    $_SESSION['HTTP_DNT']=$_SERVER['HTTP_DNT'];
    $dnt = $_SESSION['HTTP_DNT'];

    $_COOKIE["userAgent"] = $_SERVER["HTTP_USER_AGENT"];

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $_COOKIE['userIP'] = $_SERVER["REMOTE_ADDR"];
    $_COOKIE['userIPCountry'] = $_SERVER["HTTP_CF_IPCOUNTRY"];
    $_COOKIE['HTTP_ACCEPT']=$_SERVER["HTTP_ACCEPT"];

    $userAgent = $_COOKIE['userAgent'];
    $userIP = $_COOKIE['userIP'];
    $userIPCountry = $_COOKIE['userIPCountry'];
    $_COOKIE['HTTP_ACCEPT_ENCODING']=$_SERVER["HTTP_ACCEPT_ENCODING"];
    $encodingHttp=$_COOKIE['HTTP_ACCEPT_ENCODING'];
    $_COOKIE['HTTP_ACCEPT_LANGUAGE']=$_SERVER["HTTP_ACCEPT_LANGUAGE"];
    $languageHttp=$_COOKIE['HTTP_ACCEPT_LANGUAGE'];
    $_COOKIE['HTTP_HOST']=$_SERVER["HTTP_HOST"];
    $hh = $_COOKIE['HTTP_HOST'];
    $_COOKIE['HTTP_ACCEPT']=$_SERVER["HTTP_ACCEPT"];
    $hac = $_COOKIE['HTTP_ACCEPT'];
    $_COOKIE['HTTP_REFERER']=$_SERVER["HTTP_REFERER"];
    $hr = $_COOKIE['HTTP_REFERER'];
    $_COOKIE['HTTP_DNT']=$_SERVER['HTTP_DNT'];
    $dnt = $_COOKIE['HTTP_DNT'];




    $timezone= date_default_timezone_get();
    echo "<script type = \"text/javascript\">

var adb = '';




function fingerprint_canvas() {
    \"use strict\";
    var strOnError, canvas, strCText, strText, strOut;

    strOnError = \"Error\";
    canvas = null;
    strCText = null;
    strText = \"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ`~1!2@3#4$5%6^7&8*9(0)-_=+[{]}|;:',<.>/?\";
    strOut = null;

    try {
        canvas = document.createElement('canvas');
        strCText = canvas.getContext('2d');
        strCText.textBaseline = \"top\";
        strCText.font = \"14px 'Arial'\";
        strCText.textBaseline = \"alphabetic\";
        strCText.fillStyle = \"#f60\";
        strCText.fillRect(125, 1, 62, 20);
        strCText.fillStyle = \"#069\";
        strCText.fillText(strText, 2, 15);
        strCText.fillStyle = \"rgba(102, 204, 0, 0.7)\";
        strCText.fillText(strText, 4, 17);
        strOut = canvas.toDataURL();
        return strOut;
    } catch (err) {
        return strOnError;
    }
}
var canvas = fingerprint_canvas();


function fingerprint_os() {
    \"use strict\";
    var strSep, strOnError, strUserAgent, strPlatform, strOS, strOSBits, strOut;

    strSep = \"|\";
    strOnError = \"Error\";
    strUserAgent = null;
    strPlatform = null;
    strOS = null;
    strOSBits = null;
    strOut = null;

    try {
        /* navigator.userAgent is supported by all major browsers */
        strUserAgent = navigator.userAgent.toLowerCase();
        /* navigator.platform is supported by all major browsers */
        strPlatform = navigator.platform.toLowerCase();
        if (strUserAgent.indexOf(\"windows nt 6.3\") !== -1) {
            strOS = \"Windows 8.1\";
        } else if (strUserAgent.indexOf(\"windows nt 6.2\") !== -1) {
            strOS = \"Windows 8\";
        } else if (strUserAgent.indexOf(\"windows nt 6.1\") !== -1) {
            strOS = \"Windows 7\";
        } else if (strUserAgent.indexOf(\"windows nt 6.0\") !== -1) {
            strOS = \"Windows Vista/Windows Server 2008\";
        } else if (strUserAgent.indexOf(\"windows nt 5.2\") !== -1) {
            strOS = \"Windows XP x64/Windows Server 2003\";
        } else if (strUserAgent.indexOf(\"windows nt 5.1\") !== -1) {
            strOS = \"Windows XP\";
        } else if (strUserAgent.indexOf(\"windows nt 5.01\") !== -1) {
            strOS = \"Windows 2000, Service Pack 1 (SP1)\";
        } else if (strUserAgent.indexOf(\"windows xp\") !== -1) {
            strOS = \"Windows XP\";
        } else if (strUserAgent.indexOf(\"windows 2000\") !== -1) {
            strOS = \"Windows 2000\";
        } else if (strUserAgent.indexOf(\"windows nt 5.0\") !== -1) {
            strOS = \"Windows 2000\";
        } else if (strUserAgent.indexOf(\"windows nt 4.0\") !== -1) {
            strOS = \"Windows NT 4.0\";
        } else if (strUserAgent.indexOf(\"windows nt\") !== -1) {
            strOS = \"Windows NT 4.0\";
        } else if (strUserAgent.indexOf(\"winnt4.0\") !== -1) {
            strOS = \"Windows NT 4.0\";
        } else if (strUserAgent.indexOf(\"winnt\") !== -1) {
            strOS = \"Windows NT 4.0\";
        } else if (strUserAgent.indexOf(\"windows me\") !== -1) {
            strOS = \"Windows ME\";
        } else if (strUserAgent.indexOf(\"win 9x 4.90\") !== -1) {
            strOS = \"Windows ME\";
        } else if (strUserAgent.indexOf(\"windows 98\") !== -1) {
            strOS = \"Windows 98\";
        } else if (strUserAgent.indexOf(\"win98\") !== -1) {
            strOS = \"Windows 98\";
        } else if (strUserAgent.indexOf(\"windows 95\") !== -1) {
            strOS = \"Windows 95\";
        } else if (strUserAgent.indexOf(\"windows_95\") !== -1) {
            strOS = \"Windows 95\";
        } else if (strUserAgent.indexOf(\"win95\") !== -1) {
            strOS = \"Windows 95\";
        } else if (strUserAgent.indexOf(\"ce\") !== -1) {
            strOS = \"Windows CE\";
        } else if (strUserAgent.indexOf(\"win16\") !== -1) {
            strOS = \"Windows 3.11\";
        } else if (strUserAgent.indexOf(\"iemobile\") !== -1) {
            strOS = \"Windows Mobile\";
        } else if (strUserAgent.indexOf(\"wm5 pie\") !== -1) {
            strOS = \"Windows Mobile\";
        } else if (strUserAgent.indexOf(\"windows\") !== -1) {
            strOS = \"Windows (Unknown Version)\";
        } else if (strUserAgent.indexOf(\"openbsd\") !== -1) {
            strOS = \"Open BSD\";
        } else if (strUserAgent.indexOf(\"sunos\") !== -1) {
            strOS = \"Sun OS\";
        } else if (strUserAgent.indexOf(\"ubuntu\") !== -1) {
            strOS = \"Ubuntu\";
        } else if (strUserAgent.indexOf(\"ipad\") !== -1) {
            strOS = \"iOS (iPad)\";
        } else if (strUserAgent.indexOf(\"ipod\") !== -1) {
            strOS = \"iOS (iTouch)\";
        } else if (strUserAgent.indexOf(\"iphone\") !== -1) {
            strOS = \"iOS (iPhone)\";
        } else if (strUserAgent.indexOf(\"mac os x beta\") !== -1) {
            strOS = \"Mac OSX Beta (Kodiak)\";
        } else if (strUserAgent.indexOf(\"mac os x 10.0\") !== -1) {
            strOS = \"Mac OSX Cheetah\";
        } else if (strUserAgent.indexOf(\"mac os x 10.1\") !== -1) {
            strOS = \"Mac OSX Puma\";
        } else if (strUserAgent.indexOf(\"mac os x 10.2\") !== -1) {
            strOS = \"Mac OSX Jaguar\";
        } else if (strUserAgent.indexOf(\"mac os x 10.3\") !== -1) {
            strOS = \"Mac OSX Panther\";
        } else if (strUserAgent.indexOf(\"mac os x 10.4\") !== -1) {
            strOS = \"Mac OSX Tiger\";
        } else if (strUserAgent.indexOf(\"mac os x 10.5\") !== -1) {
            strOS = \"Mac OSX Leopard\";
        } else if (strUserAgent.indexOf(\"mac os x 10.6\") !== -1) {
            strOS = \"Mac OSX Snow Leopard\";
        } else if (strUserAgent.indexOf(\"mac os x 10.7\") !== -1) {
            strOS = \"Mac OSX Lion\";
        } else if (strUserAgent.indexOf(\"mac os x\") !== -1) {
            strOS = \"Mac OSX (Version Unknown)\";
        } else if (strUserAgent.indexOf(\"mac_68000\") !== -1) {
            strOS = \"Mac OS Classic (68000)\";
        } else if (strUserAgent.indexOf(\"68K\") !== -1) {
            strOS = \"Mac OS Classic (68000)\";
        } else if (strUserAgent.indexOf(\"mac_powerpc\") !== -1) {
            strOS = \"Mac OS Classic (PowerPC)\";
        } else if (strUserAgent.indexOf(\"ppc mac\") !== -1) {
            strOS = \"Mac OS Classic (PowerPC)\";
        } else if (strUserAgent.indexOf(\"macintosh\") !== -1) {
            strOS = \"Mac OS Classic\";
        } else if (strUserAgent.indexOf(\"googletv\") !== -1) {
            strOS = \"Android (GoogleTV)\";
        } else if (strUserAgent.indexOf(\"xoom\") !== -1) {
            strOS = \"Android (Xoom)\";
        } else if (strUserAgent.indexOf(\"htc_flyer\") !== -1) {
            strOS = \"Android (HTC Flyer)\";
        } else if (strUserAgent.indexOf(\"android\") !== -1) {
            strOS = \"Android\";
        } else if (strUserAgent.indexOf(\"symbian\") !== -1) {
            strOS = \"Symbian\";
        } else if (strUserAgent.indexOf(\"series60\") !== -1) {
            strOS = \"Symbian (Series 60)\";
        } else if (strUserAgent.indexOf(\"series70\") !== -1) {
            strOS = \"Symbian (Series 70)\";
        } else if (strUserAgent.indexOf(\"series80\") !== -1) {
            strOS = \"Symbian (Series 80)\";
        } else if (strUserAgent.indexOf(\"series90\") !== -1) {
            strOS = \"Symbian (Series 90)\";
        } else if (strUserAgent.indexOf(\"x11\") !== -1) {
            strOS = \"UNIX\";
        } else if (strUserAgent.indexOf(\"nix\") !== -1) {
            strOS = \"UNIX\";
        } else if (strUserAgent.indexOf(\"linux\") !== -1) {
            strOS = \"Linux\";
        } else if (strUserAgent.indexOf(\"qnx\") !== -1) {
            strOS = \"QNX\";
        } else if (strUserAgent.indexOf(\"os/2\") !== -1) {
            strOS = \"IBM OS/2\";
        } else if (strUserAgent.indexOf(\"beos\") !== -1) {
            strOS = \"BeOS\";
        } else if (strUserAgent.indexOf(\"blackberry95\") !== -1) {
            strOS = \"Blackberry (Storm 1/2)\";
        } else if (strUserAgent.indexOf(\"blackberry97\") !== -1) {
            strOS = \"Blackberry (Bold)\";
        } else if (strUserAgent.indexOf(\"blackberry96\") !== -1) {
            strOS = \"Blackberry (Tour)\";
        } else if (strUserAgent.indexOf(\"blackberry89\") !== -1) {
            strOS = \"Blackberry (Curve 2)\";
        } else if (strUserAgent.indexOf(\"blackberry98\") !== -1) {
            strOS = \"Blackberry (Torch)\";
        } else if (strUserAgent.indexOf(\"playbook\") !== -1) {
            strOS = \"Blackberry (Playbook)\";
        } else if (strUserAgent.indexOf(\"wnd.rim\") !== -1) {
            strOS = \"Blackberry (IE/FF Emulator)\";
        } else if (strUserAgent.indexOf(\"blackberry\") !== -1) {
            strOS = \"Blackberry\";
        } else if (strUserAgent.indexOf(\"palm\") !== -1) {
            strOS = \"Palm OS\";
        } else if (strUserAgent.indexOf(\"webos\") !== -1) {
            strOS = \"WebOS\";
        } else if (strUserAgent.indexOf(\"hpwos\") !== -1) {
            strOS = \"WebOS (HP)\";
        } else if (strUserAgent.indexOf(\"blazer\") !== -1) {
            strOS = \"Palm OS (Blazer)\";
        } else if (strUserAgent.indexOf(\"xiino\") !== -1) {
            strOS = \"Palm OS (Xiino)\";
        } else if (strUserAgent.indexOf(\"kindle\") !== -1) {
            strOS = \"Kindle\";
        } else if (strUserAgent.indexOf(\"wii\") !== -1) {
            strOS = \"Nintendo (Wii)\";
        } else if (strUserAgent.indexOf(\"nintendo ds\") !== -1) {
            strOS = \"Nintendo (DS)\";
        } else if (strUserAgent.indexOf(\"playstation 3\") !== -1) {
            strOS = \"Sony (Playstation Console)\";
        } else if (strUserAgent.indexOf(\"playstation portable\") !== -1) {
            strOS = \"Sony (Playstation Portable)\";
        } else if (strUserAgent.indexOf(\"webtv\") !== -1) {
            strOS = \"MSN TV (WebTV)\";
        } else if (strUserAgent.indexOf(\"inferno\") !== -1) {
            strOS = \"Inferno\";
        } else {
            strOS = \"Unknown\";
        }
        if (strPlatform.indexOf(\"x64\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"wow64\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"win64\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"win32\") !== -1) {
            strOSBits = \"32 bits\";
        } else if (strPlatform.indexOf(\"x64\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"x32\") !== -1) {
            strOSBits = \"32 bits\";
        } else if (strPlatform.indexOf(\"x86\") !== -1) {
            strOSBits = \"32 bits*\";
        } else if (strPlatform.indexOf(\"ppc\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"alpha\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"68k\") !== -1) {
            strOSBits = \"64 bits\";
        } else if (strPlatform.indexOf(\"iphone\") !== -1) {
            strOSBits = \"32 bits\";
        } else if (strPlatform.indexOf(\"android\") !== -1) {
            strOSBits = \"32 bits\";
        } else {
            strOSBits = \"Unknown\";
        }
        strOut = strOS + strSep + strOSBits;
        return strOut;
    } catch (err) {
        return strOnError;
    }
}

var os = fingerprint_os();

function fingerprint_fonts() {
    \"use strict\";
    var strOnError, style, fonts, count, template, fragment, divs, i, font, div, body, result, e;

    strOnError = \"Error\";
    style = null;
    fonts = null;
    font = null;
    count = 0;
    template = null;
    divs = null;
    e = null;
    div = null;
    body = null;
    i = 0;

    try {
        style = \"position: absolute; visibility: hidden; display: block !important\";
        fonts = [\"Abadi MT Condensed Light\", \"Adobe Fangsong Std\", \"Adobe Hebrew\", \"Adobe Ming Std\", \"Agency FB\", \"Aharoni\", \"Andalus\", \"Angsana New\", \"AngsanaUPC\", \"Aparajita\", \"Arab\", \"Arabic Transparent\", \"Arabic Typesetting\", \"Arial Baltic\", \"Arial Black\", \"Arial CE\", \"Arial CYR\", \"Arial Greek\", \"Arial TUR\", \"Arial\", \"Batang\", \"BatangChe\", \"Bauhaus 93\", \"Bell MT\", \"Bitstream Vera Serif\", \"Bodoni MT\", \"Bookman Old Style\", \"Braggadocio\", \"Broadway\", \"Browallia New\", \"BrowalliaUPC\", \"Calibri Light\", \"Calibri\", \"Californian FB\", \"Cambria Math\", \"Cambria\", \"Candara\", \"Castellar\", \"Casual\", \"Centaur\", \"Century Gothic\", \"Chalkduster\", \"Colonna MT\", \"Comic Sans MS\", \"Consolas\", \"Constantia\", \"Copperplate Gothic Light\", \"Corbel\", \"Cordia New\", \"CordiaUPC\", \"Courier New Baltic\", \"Courier New CE\", \"Courier New CYR\", \"Courier New Greek\", \"Courier New TUR\", \"Courier New\", \"DFKai-SB\", \"DaunPenh\", \"David\", \"DejaVu LGC Sans Mono\", \"Desdemona\", \"DilleniaUPC\", \"DokChampa\", \"Dotum\", \"DotumChe\", \"Ebrima\", \"Engravers MT\", \"Eras Bold ITC\", \"Estrangelo Edessa\", \"EucrosiaUPC\", \"Euphemia\", \"Eurostile\", \"FangSong\", \"Forte\", \"FrankRuehl\", \"Franklin Gothic Heavy\", \"Franklin Gothic Medium\", \"FreesiaUPC\", \"French Script MT\", \"Gabriola\", \"Gautami\", \"Georgia\", \"Gigi\", \"Gisha\", \"Goudy Old Style\", \"Gulim\", \"GulimChe\", \"GungSeo\", \"Gungsuh\", \"GungsuhChe\", \"Haettenschweiler\", \"Harrington\", \"Hei S\", \"HeiT\", \"Heisei Kaku Gothic\", \"Hiragino Sans GB\", \"Impact\", \"Informal Roman\", \"IrisUPC\", \"Iskoola Pota\", \"JasmineUPC\", \"KacstOne\", \"KaiTi\", \"Kalinga\", \"Kartika\", \"Khmer UI\", \"Kino MT\", \"KodchiangUPC\", \"Kokila\", \"Kozuka Gothic Pr6N\", \"Lao UI\", \"Latha\", \"Leelawadee\", \"Levenim MT\", \"LilyUPC\", \"Lohit Gujarati\", \"Loma\", \"Lucida Bright\", \"Lucida Console\", \"Lucida Fax\", \"Lucida Sans Unicode\", \"MS Gothic\", \"MS Mincho\", \"MS PGothic\", \"MS PMincho\", \"MS Reference Sans Serif\", \"MS UI Gothic\", \"MV Boli\", \"Magneto\", \"Malgun Gothic\", \"Mangal\", \"Marlett\", \"Matura MT Script Capitals\", \"Meiryo UI\", \"Meiryo\", \"Menlo\", \"Microsoft Himalaya\", \"Microsoft JhengHei\", \"Microsoft New Tai Lue\", \"Microsoft PhagsPa\", \"Microsoft Sans Serif\", \"Microsoft Tai Le\", \"Microsoft Uighur\", \"Microsoft YaHei\", \"Microsoft Yi Baiti\", \"MingLiU\", \"MingLiU-ExtB\", \"MingLiU_HKSCS\", \"MingLiU_HKSCS-ExtB\", \"Miriam Fixed\", \"Miriam\", \"Mongolian Baiti\", \"MoolBoran\", \"NSimSun\", \"Narkisim\", \"News Gothic MT\", \"Niagara Solid\", \"Nyala\", \"PMingLiU\", \"PMingLiU-ExtB\", \"Palace Script MT\", \"Palatino Linotype\", \"Papyrus\", \"Perpetua\", \"Plantagenet Cherokee\", \"Playbill\", \"Prelude Bold\", \"Prelude Condensed Bold\", \"Prelude Condensed Medium\", \"Prelude Medium\", \"PreludeCompressedWGL Black\", \"PreludeCompressedWGL Bold\", \"PreludeCompressedWGL Light\", \"PreludeCompressedWGL Medium\", \"PreludeCondensedWGL Black\", \"PreludeCondensedWGL Bold\", \"PreludeCondensedWGL Light\", \"PreludeCondensedWGL Medium\", \"PreludeWGL Black\", \"PreludeWGL Bold\", \"PreludeWGL Light\", \"PreludeWGL Medium\", \"Raavi\", \"Rachana\", \"Rockwell\", \"Rod\", \"Sakkal Majalla\", \"Sawasdee\", \"Script MT Bold\", \"Segoe Print\", \"Segoe Script\", \"Segoe UI Light\", \"Segoe UI Semibold\", \"Segoe UI Symbol\", \"Segoe UI\", \"Shonar Bangla\", \"Showcard Gothic\", \"Shruti\", \"SimHei\", \"SimSun\", \"SimSun-ExtB\", \"Simplified Arabic Fixed\", \"Simplified Arabic\", \"Snap ITC\", \"Sylfaen\", \"Symbol\", \"Tahoma\", \"Times New Roman Baltic\", \"Times New Roman CE\", \"Times New Roman CYR\", \"Times New Roman Greek\", \"Times New Roman TUR\", \"Times New Roman\", \"TlwgMono\", \"Traditional Arabic\", \"Trebuchet MS\", \"Tunga\", \"Tw Cen MT Condensed Extra Bold\", \"Ubuntu\", \"Umpush\", \"Univers\", \"Utopia\", \"Utsaah\", \"Vani\", \"Verdana\", \"Vijaya\", \"Vladimir Script\", \"Vrinda\", \"Webdings\", \"Wide Latin\", \"Wingdings\"];
        count = fonts.length;
        template = '<b style=\"display:inline !important; width:auto !important; font:normal 10px/1 \'X\',sans-serif !important\">ww</b>' + '<b style=\"display:inline !important; width:auto !important; font:normal 10px/1 \'X\',monospace !important\">ww</b>';
        fragment = document.createDocumentFragment();
        divs = [];
        for (i = 0; i < count; i = i + 1) {
            font = fonts[i];
            div = document.createElement('div');
            font = font.replace(/['\"<>]/g, '');
            div.innerHTML = template.replace(/X/g, font);
            div.style.cssText = style;
            fragment.appendChild(div);
            divs.push(div);
        }
        body = document.body;
        body.insertBefore(fragment, body.firstChild);
        result = [];
        for (i = 0; i < count; i = i + 1) {
            e = divs[i].getElementsByTagName('b');
            if (e[0].offsetWidth === e[1].offsetWidth) {
                result.push(fonts[i]);
            }
        }
        // do not combine these two loops, remove child will cause reflow
        // and induce severe performance hit
        for (i = 0; i < count; i = i + 1) {
            body.removeChild(divs[i]);
        }
        return result.join('|');
    } catch (err) {
        return strOnError;
    }
}

var font = fingerprint_fonts();


function getFlashVersion(){
  // ie
  try {
    try {
      // avoid fp6 minor version lookup issues
      // see: http://blog.deconcept.com/2006/01/11/getvariable-setvariable-crash-internet-explorer-flash-6/
      var axo = new ActiveXObject('ShockwaveFlash.ShockwaveFlash.6');
      try { axo.AllowScriptAccess = 'always'; }
      catch(e) { return '6,0,0'; }
    } catch(e) {}
    return new ActiveXObject('ShockwaveFlash.ShockwaveFlash').GetVariable('$version').replace(/\D+/g, ',').match(/^,?(.+),?$/)[1];
  // other browsers
  } catch(e) {
    try {
      if(navigator.mimeTypes[\"application/x-shockwave-flash\"].enabledPlugin){
        return (navigator.plugins[\"Shockwave Flash 2.0\"] || navigator.plugins[\"Shockwave Flash\"]).description.replace(/\D+/g, \",\").match(/^,?(.+),?$/)[1];
      }
    } catch(e) {}
  }
  return '0,0,0';
}
 
var version = getFlashVersion().split(',').shift();
if(version < 10){
  alert(\"Lower than 10\");
}else{
  alert(\"10 or higher\");
}

 var navplat = navigator.platform;   
         var geo = navigator.geolocation;
         var  screenr = screen.width+\"x\"+screen.height+\"x\"+screen.colorDepth;
         var plugin = '';
                     var len = navigator.plugins.length;  
                      for(var i = 0; i < len; i++){
                 plugin +=  navigator.plugins[i].description ;
                                }
         var cookies= navigator.cookieEnabled;
          
var vend = navigator.vendor.toString() ;
var lang =navigator.language ;
//var ulang=navigator.userLanguage ;
//var navlang=navigator.browserLanguage ;
//var syslang= navigator.systemLanguage ;
var dntj= navigator.doNotTrack;

if(dntj != 'null' ) { dntj='enabled';}
else{
dntj='disabled';
}


var javaen = navigator.javaEnabled().toString();
var locstorage = '';    
if (typeof localStorage !== 'undefined') {
    try {
        localStorage.setItem('feature_test', 'yes');
        if (localStorage.getItem('feature_test') === 'yes') {
            localStorage.removeItem('feature_test');
            locstorage = 'enabled';
           
        } else {
            // localStorage is disabled
            locstorage ='disabled';
            
        }
    } catch(e) {
        // localStorage is disabled
        locstorage ='disabled';
    }
} else {
    // localStorage is not available
    locstorage='unavailable';
}
var sestorage='';
if (typeof sessionStorage !== 'undefined') {
    try {
        sessionStorage.setItem('feature_test', 'yes');
        if (sessionStorage.getItem('feature_test') === 'yes') {
            sessionStorage.removeItem('feature_test');
            sestorage = 'enabled';
           
        } else {
            
            sestorage ='disabled';
            
        }
    } catch(e) {
      
       sestorage ='disabled';
    }
} else {
    
    sestorage='unavailable';
}
      var ugent= navigator.userAgent;
            var appn= navigator.appName;
var appcn = navigator.appCodeName;
var appver=navigator.appVersion;
//var appmv =navigator.appMinorVersion ;
//var buildiD = navigator.buildID ;

//var cpuc = navigator.cpuClass ;
//var oscpu= navigator.oscpu ;
var prod= navigator.product ;
//alert(ugent);
//alert(appn);
//alert(appcn);
//alert(prod);
//alert(locstorage);
//alert(javaen);
//alert (version);
 createCookie(\"uagentjs\", ugent, \"100\");
// alert(ugent);
 
 createCookie(\"appn\", appn, \"100\");
 // alert(appn);
 createCookie(\"appcn\", appcn, \"100\");
// alert(appcn);
 createCookie(\"prod\", prod, \"100\");
 // alert(prod);
 createCookie(\"geo\", geo, \"100\");
// alert(geo);
 createCookie(\"navplat\", navplat, \"100\");
//alert(navplat);
 createCookie(\"cookiesen\", cookies, \"100\");
//alert(cookies);
 createCookie(\"plugins\", plugin, \"100\");
 //alert(plugin);
 createCookie(\"flashver\", version, \"100\");
// alert(version);
 createCookie(\"vendor\", vend, \"100\");
 alert(vend);
 createCookie(\"dntjs\", dntj, \"100\");
//alert(syslang);
 createCookie(\"javaen\", javaen, \"100\");
//alert(javaen);
 createCookie(\"localst\", locstorage, \"100\");
//alert(locstorage);
createCookie(\"sessionst\", sestorage, \"100\");
//alert(sestorage);
createCookie(\"fonts\",font, \"100\");
createCookie(\"os\",os, \"100\");

createCookie(\"adb\",adb, \"100\");
createCookie(\"canvas\",canvas, \"100\");
 function createCookie(name, value, seconds) {
 var expires;
 if (seconds) {
  var date = new Date();
  date.setTime(date.getTime() + ( seconds * 60 * 1000));  /*days * 24 * 60 **/
  expires = \"; expires=\" + date.toGMTString();
 } else {
  expires = \"\";
 }
  document.cookie = escape(name) + \"=\" + escape(value) + expires + \"; path=/\";
 }
 
 
</script> ";
    $cos = $_COOKIE['cookiesen'];
    $plu = $_COOKIE['plugins'];
    $navplat = $_COOKIE['navplat'];
    $geo = $_COOKIE['geo'];
    $scre = $_COOKIE['screenr'];
    $uagentjs=$_COOKIE['uagentjs'];
    $appn =$_COOKIE['appn'];
    $appcn =$_COOKIE['appcn'];
    $prod =$_COOKIE['prod'];
    $flashver=$_COOKIE['flashver'];
    $vend=$_COOKIE['vend'];
    $dntjs=$_COOKIE['dntjs'];
    $javaen=$_COOKIE['javaen'];
    $localst=$_COOKIE['localst'];
    $sessionst=$_COOKIE['sessionst'];
    $fonts=$_COOKIE['fonts'];
    $os=$_COOKIE['os'];
    $canvas=$_COOKIE['canvas'];
    $adb = $_COOKIE['adb'];


    $qry = "INSERT INTO fingerprint (time_Stamp,timeZone, browser_plugins, nav_platform, cookies_enabled, os, using_adblock, webGL_vendor, WebGL_renderer, Canvas, user_agent, fonts, date_creation, localJS, dntJS, acceptHttp, hostHttp, connectionHttp, encodingHttp, languageHttp, orderHttp, resolutionJS, sessionJS, IEDataJS, useragentJS, userIPCountry, userIP, refererHttp, appnameJS, appcodenameJS, versionFlashJS, javaenabledJS, vendorJS, productJS, dntHttp)
          VALUES(NOW(),'$timezone','$plu','$navplat','$cos','$os','$adb','$vend','$prod','$canvas','$userAgent','$fonts',NOW(),'$localst','$dntjs','$hac','$hh','$localst','$encodingHttp','$languageHttp','$hh','$scre','$sessionst','$hh','$uagentjs','$userIPCountry','$userIP','$hr','$appn','$appcn','$flashver','$javaen','$vend','$prod','$dnt')";
    $result = $conn->query($qry);
    if ($result === TRUE) {
        $last_id = $conn->insert_id;
        
        $_SESSION['ID_fingerprint'] = $last_id;
        
        

        //echo "New record created successfully. Last inserted ID is: " . $last_id;
        //echo "New record created successfully. Last inserted ID is: " . $_SESSION['ID_fingerprint'];
    } else {
        //echo "Error: <br>" . $conn->error;
    }




   


    ?>
</div>

</body>
</html>