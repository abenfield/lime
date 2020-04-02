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

    

    
    //See what copy number it is.
    $sql = "SELECT * FROM group3.ItemCopies WHERE isbn = '$isbn';";
    $result = mysqli_query($db,$sql);
    $copyNumber = $result->num_rows + 1;

    //generate a barcode using Codabar 1D (https://en.wikipedia.org/wiki/Codabar)
    $barcode = A . $isbn . $copyNumber . B;


    require('connection.php');

    //Check if isbn exists in table
    $sql = "SELECT * FROM group3.ItemCopies WHERE isbn = '$isbn';";
    $result = mysqli_query($db,$sql);

    if($result->num_rows == 0) {
        //Create new isbn entry if isbn doesn't already exist
        $sql = "INSERT INTO `group3`.`LibraryInventoryItem` (`isbn`, `title`, `authorFirstName`, `authorLastName`, `publisher`, `datePublished`, `summary`, `genre`) VALUES ('$isbn', '$title', '$firstname', '$lastname', '$publisher', '$publishdate', '$summary', '$genre')";
        echo $sql;
        //Create tags

        $result = mysqli_query($db,$sql);
   } 
   
    $sql = "INSERT INTO `group3`.`ItemCopies` (`barCode`, `isbn`) VALUES ('$barcode', '$isbn');";

    $result = mysqli_query($db,$sql);
    
   header("location:/staff/catalog.php");


} else {
        // not auth'd returning home.
        header("location:/staff/catalog.php");
     }

    } 

?>