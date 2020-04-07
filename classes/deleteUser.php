<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "staff")
{
    // Gather form POST data and assign them to local variables
    $patronId = $_REQUEST["patronId"]; 
    echo $patronId;

    $tags = $_POST["tags"];
    require('connection.php');
    $sql = "DELETE FROM `group3`.`Patron` WHERE (`patronId` = '$patronId'); ";
    $result = mysqli_query($db,$sql);

    //$sql = "DELETE FROM `group3`.`ItemCopies` WHERE (`isbn` = '$isbn'); ";
    //$result = mysqli_query($db,$sql);

    header("location:../staff/catalog.php");



} else {
        // not auth'd returning home.
        header("location:catalog.php");
     }

    } 

?>



