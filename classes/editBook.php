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
    $genre = $_POST["genre"];

    $tags = $_POST["tags"];
    require('connection.php');
    $randomInt = rand();
    $sql = "UPDATE `group3`.`LibraryInventoryItem`  SET `isbn` = '$isbn',`title` = '$title', `authorFirstName` = '$firstname',`authorLastName` = '$lastname',`publisher` = '$publisher',`datePublished` = '$publishdate',`genre` = '$genre' WHERE (`isbn` = '$isbn') ;    ";
    $result = mysqli_query($db,$sql);
    echo $sql;
    //header("location:../staff/catalog.php");



} else {
        // not auth'd returning home.
        header("location:catalog.php");
     }

    } 

?>