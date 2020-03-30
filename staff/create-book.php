
   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	$noTopBar = "true";
	
	$content = <<<EOT


        <h2 class ="center inputText">Create new Book</h2>

      </div>
      <div class = "formContainer">
      
      <form>
  <div class="form-group">
    <label for="isbn">ISBN</label>
    <input type="text" class="form-control" id="isbn" aria-describedby="isbn" placeholder="Enter ISBN">
  </div>
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" id="title" placeholder="Book Title">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <input type="text" class="form-control" id="author" placeholder="Author">
  </div>

  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" class="form-control" id="genre" placeholder="Genre">
  </div>
  <div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" class="form-control" id="tags" placeholder="Tags">
  </div>
  <div class="form-group">
    <label for="availability">Availability</label>
    <input type="text" class="form-control" id="availability" placeholder="Availability">
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