<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_SERVER["REQUEST_METHOD"] == "POST") {


    require('session.php');


if ($type_check = "staff")
{
    // Gather form POST data and assign them to local variables
<<<<<<< HEAD
    $patronId = $_REQUEST["patronId"]; 
    $firstname = $_POST["firstname"]; 
    $lastname = $_POST["lastname"]; 
    $email = $_POST["email"];
    $phone = $_POST["phone"]; 
    $address = $_POST["address"]; 
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zipCode = $_POST["zipCode"];
    $status = $_POST["status"];


=======
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
>>>>>>> c9b649375c05c2cd5a60bee6b09f7a27c77b6257

    
    //See what copy number it is.
    //$sql = "SELECT * FROM group3.ItemCopies WHERE isbn = '$isbn';";
    //$result = mysqli_query($db,$sql);
    //$copyNumber = $result->num_rows + 1;

    //generate a barcode using Codabar 1D (https://en.wikipedia.org/wiki/Codabar)
    //$barcode = A . $isbn . $copyNumber . B;


    require('connection.php');

    //Check if patronId exists in table
<<<<<<< HEAD
    $sql = "SELECT * FROM group3.Paatron WHERE patronId = '$patronId';";
=======
    $sql = "SELECT * FROM group3.Patron WHERE patronId = '$patronId';";
>>>>>>> c9b649375c05c2cd5a60bee6b09f7a27c77b6257
    $result = mysqli_query($db,$sql);

    if($result->num_rows == 0) {
        //Create new patronId entry if patronId doesn't already exist
<<<<<<< HEAD
        $sql = "INSERT INTO `group3`.`Patron` (`patronId`, `firstName`, `lastName`, `email`, `phone`, `address`, `city`, `state`, `zipcode`, `status`) VALUES ('$patronId', '$firstName', '$lastName', '$email', '$phone', '$address', '$city', '$state', '$zipCode', '$status')";
=======
        $sql = "INSERT INTO `group3`.`Patron` ( `firstName`, `lastName`, `email`, `phone`, `address`, `city`, `state`, `zipcode`, `status`) VALUES ('$firstname', '$lastname', '$email', '$phone', '$address', '$city', '$state', '$zipCode', '$status')";
>>>>>>> c9b649375c05c2cd5a60bee6b09f7a27c77b6257
        echo $sql;
        //Create tags

        $result = mysqli_query($db,$sql);
   } 
   
    //$sql = "INSERT INTO `group3`.`ItemCopies` (`barCode`, `isbn`) VALUES ('$barcode', '$isbn');";

    //$result = mysqli_query($db,$sql);
    
<<<<<<< HEAD
   header("location:/staff/catalog.php");
=======
  // header("location:/staff/catalog.php");
>>>>>>> c9b649375c05c2cd5a60bee6b09f7a27c77b6257


} else {
        // not auth'd returning home.
        header("location:/staff/catalog.php");
     }

    } 

?>