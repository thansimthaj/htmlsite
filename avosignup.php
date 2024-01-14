
<?php
include("avoconnection.php");

if(isset($_POST['submit'])){
	$user=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * FROM avoin WHERE email='$email' ";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if($num>0){
		echo '<script>alert("account already exists!")</script>' ;
	}else{
		$mysql="INSERT INTO avoin(username,email,password) VALUES('$user','$email','$password')";
		mysqli_query($conn,$mysql);
		header("location:avosignin.php");
	}

}




?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>avodha signup</title>
</head>
<body>
	<div class="first" style="text-align: center;">
<form action="" method="POST">
	<h1>SIGN UP</h1>
	<input type="username" name="username" placeholder="enter the username" ><br>
	<input type="email" name="email" placeholder="enter the email" ><br>
	<input type="password" name="password" placeholder="enter the password"><br><br>
	<button type="submit" name="submit">sign up</button><br><br>
    Have an account?&nbsp;<a href="avosignin.php">Login Here</a>
</form>
</div>
</body>
</html>