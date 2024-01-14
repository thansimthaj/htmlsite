<?php
include ("connection.php");

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * FROM signup WHERE email='$email' ";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if($num>0){
		echo '<script>alert("Email already exists!")</script>' ;
	}else{
		$insert="INSERT INTO signup(email,password) VALUES('$email','$password')";
		mysqli_query($conn,$insert);
		header("location:signin.php");
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>sample webpage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main">
	<form action="" method="POST">
		<h1>SIGN UP</h1>
	 <input type="email" name="email" placeholder="enter your email id" required><br>
	 <input type="password" name="password" placeholder="enter the password" required><br>  
	 <button type="submit" name="submit">SIGN UP</button><br><br>
	 Have an account?&nbsp;<a href="signin.php">Login Here</a>
	</form>
</div>
</body>
</html>