

   
   <?php

	include("config.php");
	
	$title = "LiMe 0.1 - Create new Book";
	
	$noTopBar = "true";
	
	$content = <<<EOT


    <table class="table table-hover">
        <thead class="thead-light">
          <tr>
            <th scope="col">ISBN</th>
            <th scope="col">Book Title</th>
            <th scope="col">Author</th>
            <th scope="col">Genre</th>
            <th scope="col">Tags</th>
            <th scope="col">Availability</th>
          </tr>
        </thead>
        <tbody>
          <tr>
			<a href = "addwishlist.php?id=$bookDetails->isbn"> <img class = "icon" src="content/favorite_unchecked.png"></img> </a></td>



          </tr>
          
        </tbody>
      </table>

      <div class = "container">
      </div>
      </div>
	  
EOT;
	
	$site->display($content, $title);


?>
      
 



