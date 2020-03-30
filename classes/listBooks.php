<?php
  require('connection.php');

$sqlListQuery= "select * from group3.LibraryInventoryItem;";

 $sqlBooks = mysqli_query($db,$sqlListQuery);
 

   

?>