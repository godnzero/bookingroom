<?php
   $serverName = "localhost";  //ชื่อ server
   $userName = "root"; //ไอดี
   $userPassword = ""; //pass
   $dbName = "bookingroom"; //database
   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName); //connect
   mysqli_set_charset($conn, 'utf8'); //รองรับ utf8 thai code
?>