<?php
$hostname="localhost";
$username="root";
$password="";
$db_name="moonlight";
$conn=mysqli_connect($hostname,$username,$password,$db_name);
if(!$conn){
	echo "connection error";
}


?>