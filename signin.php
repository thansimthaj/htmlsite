
<?php
include ("connection.php");

if(isset($_POST['submit'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$sql="SELECT * FROM signup WHERE email='$email' and password='$password' ";
	$result=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($result);

	if($num>0){
		header("location:new.php");
	}else{
		echo '<script>alert("email and password is incorrect")</script>' ;
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
		<h1>SIGN IN</h1>
	 <input type="email" name="email" placeholder="enter your email id" required><br>
	 <input type="password" name="password" placeholder="enter the password" required><br>  
	 <button type="submit" name="submit">SIGN IN</button><br><br>
	 Have an account?&nbsp;<a href="signup.php">signup here</a>
	</form>
</div>
</body>
</html>