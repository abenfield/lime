<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "staff")
{
    // Gather form POST data and assign them to local variables
    $isbn = $_REQUEST["isbn"]; 
    $title = $_REQUEST["title"]; 
    $author = $_POST["author"]; 
    $genre = $_POST["genre"]; 
    //$tags = "$_POST["tags"]; "


    require('connection.php');
    $randomInt = rand();
   // $sql = "UPDATE `group3`.`LibraryInventoryItem` SET `isbn` = 'ok', `title` = $title,  WHERE (`barCode` = $randomInt);    ";
    $result = mysqli_query($db,$sql);



} else {
        // not auth'd returning home.
        header("location:catalog.php");
     }

    } 

?>