<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<div class= "container">
		
		<div class="header">

			<h2>Register</h2>
			
		</div>

		<form action="registration.php" method="post">
			<div>
				<label for="Full Name">Full Name</label>
				<input type="text" name="Full Name" required>
			</div>

			<div>
				<label for="NID">Email</label>
				<input type="text" name="NID" required >
			</div>
			<div>
				<label for="DOB">DOB</label>
				<input type="text" name="DOB" required >
			</div>
			<div>
				<label for="Gender">Gender</label>
				<input type="text" name="Gender" required>
			</div>
			<div>
				<label for="Phone">Phone</label>
				<input type="text" name="Phone" required>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" required>
			</div>
			<div>
				<label for="Address">Address</label>
				<input type="text" name="Address">
			</div>
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

			<button type= "submit" name= "reg_user" > Submit </button>
			
			<p> Already a user? <a href="login.php"> <b> Log in </</a> </p>

		</form>


	</div>

</body>
</html>