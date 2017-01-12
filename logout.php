<?php
	session_start();
	session_destroy();
	header("location: /fingerprinting/index1.php");
?>