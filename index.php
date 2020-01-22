<!DOCTYPE html>
<html>
<head>
	<link href="https://github.com/Chaitanyassr/pandakit-1/blob/master/assets/css/pandakit.css" rel="stylesheet"/>
	<?php include 'class.php';?>
	<title>password validation</title>
</head>
<body>
	<form action= "<?php $_PHP_SELF ?>" method = "POST">
		<div class="FormV" class="tan">
				<label>Enter your username</label>
			<input for="username" placeholder="Enter your username" required>
			<label>Enter your password</label>
			<input for="password" placeholder="enter your password" required>
			<button type="submit">submit</button>
		</div>
			  <div class="container signin" class="blue-water">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
		</div>
	</form>
</body>
</html>>