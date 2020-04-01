<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "staff")
{
    // Gather form POST data and assign them to local variables
    $isbn = $_REQUEST["isbn"]; 
    $title = $_REQUEST["title"]; 
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
    $publisher = $_POST["publisher"]; 
    $publishdate = $_POST["publishdate"]; 
    $summary = $_POST["summary"]; 
    //$tags = "$_POST["tags"]; "


    //generate a barcode using Codabar 1D (https://en.wikipedia.org/wiki/Codabar)
    $barcode = "A" . $isbn . "B";



    require('connection.php');
    $sql = "INSERT INTO `group3`.`LibraryInventoryItem` (`barCode`, `isbn`, `title`, `authorFirstName`, `authorLastName`, `publisher`, `datePublished`, `summary`) VALUES ('8', '8', '8', '8', '8', '8', '2002-02-01', '8');
    UPDATE `group3`.`LibraryInventoryItem` SET `summary` = '3' WHERE (`barCode` = '3');";
    
    $result = mysqli_query($db,$sql);



} else {
        // not auth'd returning home.
        header("location:catalog.php");
     }

    } 

?>