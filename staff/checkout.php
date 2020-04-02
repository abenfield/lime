 <?php

include("config.php");

$title = "LiMe 0.1 - Check outs";


$content = <<<EOT


<h2 class ="center inputText">Check In/Out User</h2>

</div>
<div class = "formContainer">

<form>
<div class="form-group">
<label for="username">User's Name:</label>
<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter ISBN">
</div>
<div class="form-group">
<label for="title">ISBN or Book Title</label>
<input type="text" class="form-control" id="title" placeholder="##### - Book Title">
</div>

<button type="submit" class="btn btn-warning">Discard Changes</button>
<button type="submit" class="btn btn-primary">Save Changes</button>
<button type="submit" class="btn btn-danger">Delete Book</button>

</div>
EOT;

$site->displayNoTitleBar($content, $title);


?>
