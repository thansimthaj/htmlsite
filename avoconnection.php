<?php
$hostname="localhost";
$username="root";
$password="";
$database="avobase";
$conn=mysqli_connect($hostname,$username,$password,$database);
if(!$conn){
	echo "connection failed!";
}





 ?>