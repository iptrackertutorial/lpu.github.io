<?php
$db_host="localhost:3307";
$db_user="root";
$db_password="";
$db_name="lms_db";

// craeyte connection
$mysqli=mysqli_connect($db_host,$db_user,$db_password,$db_name);
//check connection
//if($mysqli->connect_error){
  //  die("connection failed");
//}
//echo "connected successfully<hr>";
?>