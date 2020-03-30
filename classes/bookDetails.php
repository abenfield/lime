<?php

	class bookDetails {
    
        public $isbn;
        public $title;
        public $author;
        public $genre;
        public $tags;
        public $availability;



        public function __construct($isbn) {
            
            require('connection.php');
            $sql = "SELECT * FROM group3.LibraryInventoryItem WHERE isbn = '$isbn'" ;
            $result = mysqli_query($db,$sql);
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
  
            
            $this->barcode= $row[0];

            $this->isbn = $row[1];

            $this->title = $row[2];

            $this->firstname = $row[3];

            $this->lastname = $row[4];
            
            $this->publisher = $row[5];

            $this->publishdate = $row[6];




            $this->genre = "horror,scary";

            $this->tags = "sick,twisted";

            $this->availability = "null";


        }



        
		}


	
	







?>