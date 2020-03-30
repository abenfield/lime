<?php

function __autoload($class) {
	
		include "../classes/".$class.".php";
	
	}

	$site = new site;
	
	$site->addHeader("header.php");
				
   $site->addTopbar("topBar.php");
   
   $site->addCheckOutBar("topBarCheckOut.php");
     
	 $site->addWishBar("topBarWish.php");
			
	$site->addFooter("footer.php");
	
	$page = new page;
	
?>