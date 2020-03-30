
   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	
	$content = <<<EOT


    <div class ="container">
        <h2 class ="center inputText">Editing existing user: Jimbo</h2>

      </div>
      <div class = "formContainer">
      
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="jimbo@neutron.com">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="Jimbo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="Neutron">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="417-434-3423">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="3423 Rainbow Road">
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
      
 