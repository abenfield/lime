<?php
include('../classes/session.php');
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>LiMe 0.1</title>
      <link rel="stylesheet" href="../css/catalog.css" />
      <link rel="stylesheet" href="../css/global.css" />
	  <link rel="stylesheet" href="../css/input.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../css/mdb.min.css">      <link rel="icon" href="images/favicon.png" />
  <link rel="stylesheet" type="text/css" href="../css/jquery.tagsinput.css" />

   </head>
   <body>
   
      <nav class="navbar navbar-expand-lg navbar-custom ">
        <img src = "../content/logo.png" class = "logo-index"/>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a href ="catalog.php"class="nav-link">Library Catalog</a>
          </li>
          <li class="nav-item">
            <a href ="checkouts.php"class="nav-link">Your Checkouts
          </li>
          <li class="nav-item">
            <a href ="wishlist.php"class="nav-link">Wishlist
          </li>
          <li class="nav-item">
            <a href ="suggestions.php"class="nav-link">Suggestions
          </li>
        </ul>
   
			   <li class="nav-item">
            <a class="nav-link">Hello, <?php echo $login_session ?>!</a><a href = "../classes/logout.php"><span class = "logout"></a>
			
          </li>
      </nav>