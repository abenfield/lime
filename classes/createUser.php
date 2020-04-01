<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "staff")
{
    // Gather form POST data and assign them to local variables
    $patronId = 5;
    $email = $_POST["email"];
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
    $phone = $_POST["phone"]; 
    $address = $_POST["address"]; 
   # $city = $_POST["city"];
    #$state = $_POST["state"];
  #  $zipCode = $_POST["zipCode"];
    #$status = $_POST["status"];

    $city = "null";
$state = "MO";
   $zipCode = "11111";
    $status = '1';

    
    //See what copy number it is.
    //$sql = "SELECT * FROM group3.ItemCopies WHERE isbn = '$isbn';";
    //$result = mysqli_query($db,$sql);
    //$copyNumber = $result->num_rows + 1;

    //generate a barcode using Codabar 1D (https://en.wikipedia.org/wiki/Codabar)
    //$barcode = A . $isbn . $copyNumber . B;


    require('connection.php');

    //Check if patronId exists in table
    $sql = "SELECT * FROM group3.Patron WHERE patronId = '$patronId';";
    $result = mysqli_query($db,$sql);

    if($result->num_rows == 0) {
        //Create new patronId entry if patronId doesn't already exist
        $sql = "INSERT INTO `group3`.`Patron` ( `firstName`, `lastName`, `email`, `phone`, `address`, `city`, `state`, `zipcode`, `status`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$address', '$city', '$state', '$zipCode', '$status')";
        echo $sql;
        //Create tags

        $result = mysqli_query($db,$sql);
   } 
   
    //$sql = "INSERT INTO `group3`.`ItemCopies` (`barCode`, `isbn`) VALUES ('$barcode', '$isbn');";

    //$result = mysqli_query($db,$sql);
    
  // header("location:/staff/catalog.php");


} else {
        // not auth'd returning home.
        header("location:/staff/catalog.php");
     }

    } 

?>