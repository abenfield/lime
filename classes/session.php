<?php
  
  require('connection.php');
  
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $type_check = $_SESSION['auth'];



   if ($type_check == "staff")    
   $sql = "SELECT firstName FROM group3.Librarian WHERE email = '$user_check'" ;
   else
   $sql = "SELECT firstName FROM group3.Patron WHERE email = '$user_check'" ;

   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result, MYSQLI_NUM);

   
   $login_session = $row[0];
  
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");

      die();
   }
?>