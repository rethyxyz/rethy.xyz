<?php
	require once "vendor/autoload.php";
	
	$detect = new mobile_Detect;
	 
	if ( $detect->isMobile() ) {
		header("Location: home_mobile.php");
	} else {
		header("Location: home.php");
	}
?>
