<?php

function __autoload($class) {
	
		include "../classes/".$class.".php";
	
	}

	$site = new site;
	
	$site->addHeader("header.php");
				
   $site->addTopbar("toolbars/topbar.php");
   
   $site->addUserbar("toolbars/topbarUser.php");
			
	$site->addFooter("footer.php");


	
	$page = new page;
	
?>