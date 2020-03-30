
   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	$noTopBar = "true";
	
	$content = <<<EOT

<div class ="container">
        <h2 class ="center inputText">Create new user</h2>

      </div>
      <div class = "formContainer">
      
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="First Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Phone">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>
  <div class ="center">
  <button type="submit" class="btn btn-warning">Discard Changes</button>
  <button type="submit" class="btn btn-primary">Create new user</button>
</div>
</form>
</div>
</div>

      </div>
	  
EOT;
	
	$site->displayNoTitleBar($content, $title);


?>
     