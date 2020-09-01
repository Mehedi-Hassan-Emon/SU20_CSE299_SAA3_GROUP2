
<!DOCTYPE HTML>
<html>
<head>
  <title>Register Form</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
</head>
<body>
 <form action="insert.php" method="POST">
  <div class="container">

    <div class="row">
        <div class="col-sm-3">

        <h1>Registration</h1>
        <hr class="mb-3">
        <table>
         <label for="firstname"><b>First Name</b></label>
          <input class="form-control" id="firstname" type="text" name="firstname" required>

          <label for="lastname"><b>Last Name</b></label>
          <input class="form-control" id="lastname" type="text" name="lastname" required>

          <label for="age"><b>age</b></label>
          <input class="form-control" id="age" type="text" name="age" required>

          <label for="gender"><b>Gender <br> </b></label>
          <br>
          <input type="radio" name="gender" value="m" required> Male
          <input type="radio" name="gender" value="f" required>Female

          <label for="email"><b>Email Address</b></label>
          <input class="form-control" id="email"  type="email" name="email" required>

          <label for="phone"><b>Phone Number</b></label>
          <input class="form-control" id="phone"  type="text" name="phone" required>

          <label for="password"><b>Password</b></label>
          <input class="form-control" id="password"  type="password" name="password" required>

         <tr>

           <hr class="mb-3"> <input class="btn btn-primary" type="submit" value="Submit"> </tr>


          <br> <br>
          <tr> <p> Already a user? <a href="login.php"> <b> Log in </a> </p> </tr>

         
        </table>
      </div>
    </div>
  </div>
 </form>
</body>
</html>