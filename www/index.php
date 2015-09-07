<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mailgun Test</title>

	<link rel="stylesheet" href="css/normalize.css">
  	<link rel="stylesheet" href="css/skeleton.css">

	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
</head>
<body>

	<?php

		if(isset($_POST['register-account'])) {
			echo 'hello';
		}


	?>
	
	<div class="container">
		<form action="index.php" method="post">
			
			<h1>Sign up with us!</h1>

			<div class="row">
				<div>
					<label for="name">Name: </label>
					<input type="text" id="name" name="name">
				</div>

				<div>
					<label for="message">Message: </label>
					<textarea name="message" id="" cols="30" rows="10"></textarea>
				</div>
			
				<div>
					<input type="submit" value="Sign up" name="register-account" class="button-primary">
				</div>	
			</div>

		</form>
	</div>

</body>
</html>