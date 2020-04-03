<?php


	class page {
	

		public function display($content) {			
			echo $content;		
		}
		
		public function displayCopies($content, $additionalContent, $isbn){
			echo $content;
			$isbn = $isbn;
			include("listCopies.php");
			while ($row = mysqli_fetch_assoc($sqlCopies)) {
				$count = 1;
				$barcode = $row['barCode'];
				echo "<tr>";
				echo  "<td>" . $barcode . "</td>";
				echo  "<td>" . $count . "</td>";
				echo  "<td>" . "null". "</td>";
				echo  "<td>" . "null". "</td>";
				echo "<td><a href = \"\"><img class = \"icon\" src=\"../content/view.png\"></a></img> <a href = \"\"><img class = \"icon\" src=\"../content/trash.png\"></img> </a></td>";
				echo "</tr>";

			}
			echo $additionalContent;
		}

		public function displayBooks($content) {

			include("listBooks.php");

			echo $content;


			while ($row = mysqli_fetch_assoc($sqlBooks)) {
				$isbn = $row['isbn'];
				$title = $row['title'];
				$author = $row['authorFirstName'] . " " .$row['authorLastName'];
				$genre = $row['genre'];
				$summary = $row['summary'];
				$tags = $row['tags'];
				$availability = $row['availability'];
				
				echo "<tr>";
					echo  "<td>" .$isbn . "</td>";
					echo  "<td>" .$title . "</td>";
					echo  "<td>" .$author . "</td>";
					echo  "<td>" .$genre . "</td>";
					echo " <td ><textarea readonly class=\"form-control rounded-0\" id=\"exampleFormControlTextarea2\" rows=\"4\"> $summary</textarea></td>";
					echo " <td style = \"pointer-events:none\"><textarea readonly class=\"readOnlyTags form-control rounded-0\" id=\"exampleFormControlTextarea2\" rows=\"3\"> nice </textarea></td>";

					//echo  "<td style = \"pointer-events:none\"><input class = \"readOnlyTags\" value = \" test,test\">" . "</input></td>";
					echo  "<td>" ."null availability" . "</td>";
				echo "<td><a href = \"view-book.php?isbn=$isbn\"><img class = \"icon\" src=\"../content/view.png\"></a></img> <a href = \"edit-book.php?isbn=$isbn\"><img class = \"icon\" src=\"../content/edit.png\"></img> </a></td>";
				echo "</tr>";
				


			}

			
	

		
		}


	
	
	
	}






?>