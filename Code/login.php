<!DOCTYPE html>
<html>
<head>
	<title>Log In</title>
</head>
<body>

	<div class= "container">
		
		<div class="header">

			<h2>Log In</h2>
			
		</div>

		<form action="registration.php" method="post">

			<div>
				<label for="Username">Username</label>
				<input type="text" name="Username" required>
			</div>
			<div>
				<label for="Password">password</label>
				<input type="text" name="Passwor_1" required>
			</div>
			<div>
				<label for="Password">Confirm password</label>
				<input type="text" name="Password_2" required>
			</div>

			<button type= "submit" name= "login" > login </button>
			 <p> Not a user? <a href="registration.php"> <b> Register here </</a> </p>

		</form>


	</div>

</body>
</html>