
   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	
	$content = <<<EOT


        <h2 class ="center inputText">Create new Book</h2>

      </div>
      <div class = "formContainer">
      
      <form method = "POST" action = "../classes/createBook.php">
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" id="isbn" name = isbn" aria-describedby="isbn" placeholder="Enter ISBN">
  </div>
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" id="title" name = "title" placeholder="Book Title">
  </div>
  <div class="form-group">
    <label for="author">Author's First Name</label>
    <input type="text" class="form-control" id="firstname" name = "firstname"placeholder="First Name">
  </div>
  <div class="form-group">
  <label for="author">Author's Last Name</label>
  <input type="text" class="form-control" id="lastname" name = "lastname" placeholder="Last Name">
</div>
  <div class="form-group">
    <label for="genre">Publisher</label>
    <input type="text" class="form-control" name = "publisher "id="publisher" placeholder="Publisher">
  </div>
  <div class="form-group">
    <label for="publishdate">Date Published</label>
    <input type="text" class="form-control" name = "publishdate" id="Date Published" placeholder="Publish Date">
  </div>
  <div class="form-group">
    <label for="availability">Summary</label>
    <input type="text" class="form-control" id="summary" placeholder="summary">
  </div>
  <div class ="center">
  <button type="submit" class="btn btn-warning">Discard Changes</button>
  <button type="submit" class="btn btn-primary">Create new user</button>
</div>
</form>
</div>


      </div>
	  
EOT;
	
	$site->displayNoTitleBar($content, $title);


?>