<?php
function conString1()
{
   $servername = "us-cdbr-east-06.cleardb.net";
   $username = "bc5a6610020748";
   $password = "6f4a7ba9";
   $dbname = "heroku_6448b240f03cac3";
   // $servername = "localhost";
   // $username = "root";
   // $password = "";
   // $dbname = "hpla";

   // connect the database with the server
   $conn = new mysqli($servername, $username, $password, $dbname);

   // if error occurs 
   if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
      exit();
   }
   return $conn;
}
