
   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	
	$content = <<<EOT

 
      <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">Email</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Books Checked Out</th>
			<th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
                  <!-- Catalog data entry begins here -->
            <th scope="row">hankjohn@gmail.com</th>
                      <td>Hank</td>
			<td>Johnson</td>
  
            <td>417-343-3421</td>
            <td>1242 Racecar Ave</td>
            <td>3</td>
			<td><img class = "icon" src="../content/view.png"></img>    <a href="edit-user.php"><img class = "icon" src="../content/edit.png"></img></a></td>


          </tr>
          
        </tbody>
      </table>

      <div class = "container">
      </div>
      </div>
	  
EOT;
	
	$site->displayUserBar($content, $title);


?>
   