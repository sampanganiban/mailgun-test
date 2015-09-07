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
	
	<div class="container">
		<form action="index.php" method="post">
			
			<h1>Sign up with us!</h1>

			<div class="row">
				<div class="six columns">
					<label for="username">Username: </label>
					<input type="text" id="username" name="username" class="u-full-width">
				</div>

				<div class="six columns">
					<label for="email">Email: </label>
					<input type="email" id="email" name="email" class="u-full-width">
				</div>
			
				<div>
					<input type="submit" value="Sign up" name="register-account" class="button-primary">
				</div>	
			</div>

		</form>
	</div>

</body>
</html>