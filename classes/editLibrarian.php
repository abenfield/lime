<?php


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "admin")
{
    // Gather form POST data and assign them to local variables
    $employeeid = $_REQUEST["employeeid"]; 
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
    $email = $_POST["email"];
    $phone = $_POST["phone"]; 
	
    $tags = $_POST["tags"];
    require('connection.php');
    $randomInt = rand();
    $sql = "UPDATE `group3`.`Librarian`  SET `employeeId` = '$employeeid', `firstName` = '$firstname',`lastName` = '$lastname',`email` = '$email',`phone` = '$phone' WHERE (`employeeId` = '$employeeid') ;    ";
    $result = mysqli_query($db,$sql);
    echo $sql;



} else {
        // not auth'd returning home.
        header("location:catalog.php");
     }

    } 

?>