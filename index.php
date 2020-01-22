<!DOCTYPE html>
<html>
<head>
	<link href="https://github.com/Chaitanyassr/pandakit-1/blob/master/assets/css/pandakit.css" rel="stylesheet"/>
	<?php include 'class.php';?>
	<title>password validation</title>
	<style type="text/css">
		input {display: block;
		}
		#status {color : red;}
	</style>
</head>
<body>
	<form action= "index.php" method = "POST">
		<div class="FormV">
				<label>Enter your username</label>
			<input for="username" name="name" placeholder="Enter your username" required>
			<label>Enter your password</label>
			<span id='status'></span>
			<input name="password" type="password" value="" placeholder="enter your password" required>
			<button type="submit" value="Check Password Strength">submit</button>
		</div>
	</form>
			  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
		</div>
	</form>
	 <?php
$password = "";
$status = "";
if(isset($_POST["password"])){
	$password = $_POST["password"];

	$isvalidpassword = new isvalidpassword();
	$response = $isvalidpassword->check($password);
	if($response != "OK"){
		$status = $response;
	} else {
		$status = "Password is strong.";
	}
	echo "<script> document.getElementById('status').innerHTML = '".$status."';</script>";
	?>
	<?php
}
?> 
</body>
</html>>
