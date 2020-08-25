<<?php 

session_start();

if(isset($_SESSION['username'])) {

	$_SESSION['msg'] = "you must log in first";
	header("location: login.php");

}

if(isset($_GET['logout'])){

	session_destroy();
	unset($_SESSION['username']);
	header("location : login.php");
}




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title> Home Page
 	</title>
 </head>
 <body>

 	<h1> this is the home page </h1>

 	<?php

 	if(isset($_SESSION['success'])) :  ?>


 	<div>
 		
 		<h3>

 			<?php 

 			echo $_SESSION['success'];
 			unset($_SESSION['success']);

 			 ?>
 			

 		</h3>


 	</div>

 	<?php enndif ?>

 	//if user logs in print his info

 	<h3>welcome <strong> <?php echo $_SESSION['username']; ?></strong> </h3>

 	<button> <a href="index.php?logout='1'"></a> </button>

<?php endif ?>
 
 </body>
 </html>