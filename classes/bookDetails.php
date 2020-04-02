<?php

	class bookDetails {
    
        public $isbn;
        public $title;
        public $author;
        public $genre;
        public $tags;
        public $availability;
        public $publisher;


        public function __construct($isbn) {
            
            require('connection.php');
            $sql = "SELECT * FROM group3.LibraryInventoryItem WHERE isbn = '$isbn'" ;
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
  
 

            $this->isbn = $row[0];

            $this->title = $row[1];

            $this->firstname = $row[2];

            $this->lastname = $row[3];
            $this->publisher = $row[4];
            $this->publishdate = $row[5];
            
      






            $this->genre = $row[7];

            $this->tags = "sick,twisted";

            $this->availability = "null";


        }



        
		}


	
	







?>