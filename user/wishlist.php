
   
   <?php

include("config.php");

$isbn = $_GET["isbn"];

  $bookDetails = new bookDetails($isbn);

  
  $title = "LiMe 0.1 - Viewing $bookDetails->title";
  
  $noTopBar = "true";
  
  $data = json_decode(
    file_get_contents("https://www.googleapis.com/books/v1/volumes?q=isbn:$isbn")
);

if ($data->items[0]->volumeInfo->imageLinks->thumbnail != null)
$cover =  $data->items[0]->volumeInfo->imageLinks->thumbnail;
else {
  $cover = "../content/cover.png";
}

  $content = <<<EOT

  
  <div class ="container">
  <h2 class ="center inputText">$bookDetails->title</h2>
<img class = "center cover" src = "$cover" />

<div class = " bookDetails center">
<h2>ISBN: $bookDetails->isbn</h2>
<h2>Book Title: $bookDetails->title</h2>
<h2>Author: $bookDetails->author</h2>
<h2>Genre: $bookDetails->genre</h2>
<h2>Summary: $bookDetails->summary</h2>
<h2>Tags: $bookDetails->tags</h2>
<h2>Availability: $bookDetail->availability</h2>
</div>
<div class = "center copies">
<h2>Copies Available</h2> 
<table class="table table-hover table-sm ">
<tbody>

    
EOT;
  

$additionalContent = <<<EOT

</tbody>
</table>
</div>
    
    
EOT;

  $site->displayCopies($content, $additionalContent, $title, $bookDetails->isbn);


?>
    
  