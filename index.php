<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <meta http-equiv="x-ua-compatible" content="ie=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>LiMe 0.1</title>
      <link rel="stylesheet" href="css/main.css" />
      <link rel="stylesheet" href="css/global.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="icon" href="images/favicon.png" />
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-custom">
         <img src = "content/logo.png" class = "center logo-index"/>
      </nav>

	 
      <div class = "container">
         <div class = "container-login">
            <h2 class ="accountText">Select user account type</h2>
            <div class="row">
               <div class="col-xs-6 login-box">
                  <a href = "user/login.php">
                     <img src ="content/user.png" class = "icon-image"/>
                     <p class ="icon-label">User</p>
                  </a>
               </div>
               <div class="col-xs-6 login-box">
                  <a href = "staff/login.php">
                     <img src ="content/staff.png" class = "icon-image"/>
                     <p class ="icon-label">Staff</p>
                  </a>
               </div>
            </div>
            <p class = "tinyText">
            <a  href= "#">Contact IT Department</a>
            </p>
      
         </div>
      </div>
 
	  
      <!-- Footer -->
      <footer class="page-footer font-small blue footer fixed-bottom">
         <!-- Copyright -->
         <div class="footer-copyright text-center py-3">Powered by LiME
            <img src = "content/lime.jpg" class="footer-logo"/>
         </div>
         <!-- Copyright -->
      </footer>
      <!-- Footer -->
   </body>
    <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</html>