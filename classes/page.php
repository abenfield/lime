<?php


	class page {
	

		public function display($content) {
			

			
			echo $content;
			
	

		
		}
		
	

		public function displayBooks($content) {

			include("listBooks.php");

			echo $content;


			while ($row = mysqli_fetch_assoc($sqlBooks)) {
				$isbn = $row['isbn'];
				$title = $row['title'];
				$author = $row['authorFirstName'] . " " .$row['authorLastName'];
				$genre = $row['genre'];
				$tags = $row['tags'];
				$availability = $row['availability'];
				
				echo "<tr>";
					echo  "<td>" .$isbn . "</td>";
					echo  "<td>" .$title . "</td>";
					echo  "<td>" .$author . "</td>";
					echo  "<td style = \"pointer-events:none\"><input class = \"readOnlyTags\" value = \" horror,scary\">" . "</input></td>";
					echo  "<td style = \"pointer-events:none\"><input class = \"readOnlyTags\" value = \" test,test\">" . "</input></td>";
					echo  "<td>" ."null availability" . "</td>";
				echo "<td><img class = \"icon\" src=\"../content/view.png\"></img> <a href = \"edit-book.php?isbn=$isbn\"><img class = \"icon\" src=\"../content/edit.png\"></img> </a></td>";
				echo "</tr>";
				


			}

			
	

		
		}


	
	
	
	}






?>