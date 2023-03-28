<?php
  // Create Database Connection
  $dbhost = "localhost" ;
  $dbuser = "root" ;
  $dbpass = "" ;
  $dbname = "attendance" ;

   $conn = $lastid = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   
    // Check Database Connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }
  // echo "Connected successfully";
?>