<?php
  require('connection.php');

$sqlListQuery= "select * from group3.Patron;";

 $sqlUsers = mysqli_query($db,$sqlListQuery);
 

   

?>