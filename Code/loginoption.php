
<!DOCTYPE HTML>
<html>
<head>
  <title> Option </title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
</head>
<body>
 <form action="logintry.php" method="POST">
  <div class="container">

    <div class="row">
        <div class="col-sm-3">

        	<br>

        <h2>Login as: </h2>

        
         <tr>
           <hr class="mb-3"> <input class="btn btn-primary" type="submit" value="Patient / Visitor"> </tr>

      </div>
    </div>
  </div>
 </form>

 <br>

  <form action="psychologistlogin.php" method="POST">
  <div class="container">

    <div class="row">
        <div class="col-sm-3">        
         <tr>

           <input class="btn btn-primary" type="submit" value="psychologist"> </tr>

      </div>
    </div>
  </div>
 </form>
 <br>

  <form action="adminform.php" method="POST">
  <div class="container">

    <div class="row">
        <div class="col-sm-3">        
         <tr>

           <input class="btn btn-primary" type="submit" value="Admin"> </tr>

          <hr class="mb-3">

         
          <tr> <p> Already a user? <a href="login.php"> <b> Log in </a> </p> </tr>

      </div>
    </div>
  </div>
 </form>
</body>
</html>