
   
   <?php

  include("config.php");

  $isbn = $_GET["isbn"];

	$bookDetails = new bookDetails($isbn);

	
	$title = "LiMe 0.1 - Create new Book";
	
	$noTopBar = "true";
	
	$content = <<<EOT

    
       <div class ="container">
        <h2 class ="center inputText">Edit existing Book : $bookDetails->title</h2>

      </div>
      <div class = "formContainer">
      
      <form   action = "../classes/editBook.php" method = "POST">
      <div class="form-group">
      <label for="barcode">Barcode</label>
      <input type="text" class="form-control" name = "barcode"  aria-describedby="barcode" value="$bookDetails->barcode">
    </div>
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" name = "isbn"  aria-describedby="isbn" value="$bookDetails->isbn">
  </div>
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" name="title" value="$bookDetails->title">
  </div>
  <div class="form-group">
    <label for="firstname">Author's First Name</label>
    <input type="text" class="form-control" name="firstname" value=" $bookDetails->firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Author's Last Name</label>
    <input type="text" class="form-control" name="lastname" value=" $bookDetails->lastname">
  </div>
  <div class="form-group">
    <label for="publisher">Publisher</label>
    <input type="text" class="form-control" name="publisher" value = "$bookDetails->publisher">
  </div>
  <div class="form-group">
    <label for="publishdate">Publish Date</label>
    <input type="text" class="form-control" name="publishdate" value = "$bookDetails->publishdate">
  </div>
  <div class="form-group">
    <label for="Genre">Genre</label>
    <input type="text" class="form-control" id = "tags" name="genre" value= "$bookDetails->genre">
  </div>
  <div class="form-group">
  <label for="tags">Tags</label>
  <input type="text" class="form-control" id = "tags" name="tags" value= "$bookDetails->tags">
</div>

  <div class ="center">
  <button type="cancel" class="btn btn-warning">Discard Changes</button>
  <button type="submit" class="btn btn-primary">Save Changes</button>
  <button type="delete" class="btn btn-danger">Delete Book</button>
</div>
</form>
</div>
</div>

      </div>


      <script type="text/javascript">
      $(tags).tagsInput({
        'defaultText':'add...',
        'height':'50px',
        'width':'100%',

      });
      </script>
      
	  
EOT;
	
	$site->displayNoTitleBar($content, $title);


?>
      
    