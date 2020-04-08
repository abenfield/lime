   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Edit existing Librarian";
	
	
	$content = <<<EOT
    <div class ="container">
        <h2 class ="center inputText">Editing existing librarian: Jimbo</h2>
      </div>
      <div class = "formContainer">
      
      <form>
  <div class="form-group">
    <label for="exampleInputFirstName1">First Name</label>
    <input type="text" class="form-control" id="exampleInputFirstName1" value="Jimbo">
  </div>
  <div class="form-group">
    <label for="exampleInputLastName1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputLastName1" value="Neutron">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="jimbo@neutron.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPhone1">Phone</label>
    <input type="text" class="form-control" id="exampleInputPhone1" value="417-434-3423">
  </div>
  <div class ="center">
  <button type="submit" class="btn btn-warning">Discard Changes</button>
  <button type="submit" class="btn btn-success">Save Changes</button>
</div>
</form>
</div>
</div>
      </div>
	  
EOT;
	
	$site->displayNoTitleBar($content, $title);


?>
