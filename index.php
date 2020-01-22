<!DOCTYPE html>
<html>
<head>
	<link href="https://github.com/Chaitanyassr/pandakit-1/blob/master/assets/css/pandakit.css" rel="stylesheet"/>
	<?php include 'class.php';?>
	<title>password validation</title>
</head>
<body>
	<form action= "index.php" method = "POST">
		<div class="FormV" class="tan">
				<label>Enter your username</label>
			<input for="username" name="name" placeholder="Enter your username" required>
			<label>Enter your password</label>
			<input for="password" name="password" type="password" value="<?php echo $password; ?>" placeholder="enter your password" required>
			<button type="submit" value="Check Password Strength">submit</button>
		</div>
	</form>
			  <div class="container signin" class="blue-water">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
		</div>
	</form>
	<?php
$password = "";
$status = "";
if(isset($_POST["password"])){
	$password = $_POST["password"];
	include_once("class.php");
	$isvalidpassword = new isvalidpassword();
	$response = $isvalidpassword->check($password);
	if($response != "OK"){
		$status = $response;
	} else {
		$status = "Password is strong.";
	}
}
?>
</body>
</html>>
