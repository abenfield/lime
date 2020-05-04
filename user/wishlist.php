 <?php
 
 include("config.php")
 $isbn = $_GET["isbn"];

 $bookDetails = new bookDetails($isbn);
  
 include("connect.php");

  $isbn = isset($_REQUEST['isbn']) ? $_REQUEST['isbn'] : "";
  $booktitle = isset($_REQUEST['booktitle']) ? $_REQUEST['booktitle'] : "";
  $author = isset($_REQUEST['author']) ? $_REQUEST['author'] : "";
  $genre = isset($_REQUEST['genre']) ? $_REQUEST['genre'] : "";
  $summary = isset($_REQUEST['summary']) ? $_REQUEST['summary'] : ""; 
  $tags = isset($_REQUEST['tags']) ? $_REQUEST['tags'] : "";
  $availability = isset($_REQUEST['availability']) ? $_REQUEST['availability'] : "";

    $sql="SELECT * FROM LibraryInventoryItem";
    $result = mysql_query($sql);
   if($result>0){
    ?>

        <table border='1'>
            <tr>
            <th>ISBN</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
			<th>Summary</th>
			<th>Tags</th>
			<th>Availability</th>
        </tr>
   <?php

     while ($row = mysql_fetch_array($result)){


     ?>                  

    <tr>
        <td><?php echo ($row['isbn']); ?></td>
		<td><?php echo ($row['booktitle']); ?></td>
		<td><?php echo ($row['author']); ?></td>
		<td><?php echo ($row['genre']); ?></td>
		<td><?php echo ($row['summary']); ?></td>
		<td><?php echo ($row['tags']); ?></td>
		<td><?php echo ($row['availability']); ?></td>
        <td>
                <form method="POST" action="" >
                    <input type="hidden" name="isbn" value="<?php echo $row['isbn']; ?>" />
                    <input type="hidden" name="booktitle" value="<?php echo $row['booktitle']; ?>" />
                    <input type="hidden" name="author" value="<?php echo $row['author']; ?>" />
                    <input type="hidden" name="genre" value="<?php echo $row['genre']; ?>" />
					<input type="hidden" name="summary" value="<?php echo $row['summary']; ?>" />
					<input type="hidden" name="tags" value="<?php echo $row['tags']; ?>" />
					<input type="hidden" name="availability" value="<?php echo $row['availability']; ?>" />
                    <input id="submit" type="submit" name="submit" value='ADD'/>
                </form>
        </td>
    </tr>
            <?php
          }
             ?>
              </table>

               <?php
                  }
    if (isset($_REQUEST['submit']))
    {

       $insert = "INSERT INTO PatronWishLish(isbn, booktitle, author, genre, summary, tags, availability) VALUES ('$isbn',  '$booktitle','$author' '$genre', '$summary', '$tags', '$availability')";
        $insertQuery=mysql_query($insert);
     }
?>