<?php 

session_start():

//initializing variables

$username = "";
$email = "";

$error = array();

//connect to database

$db = mysqli_connect('localhost', 'root','','patients') or die("could not connect")

//register users

$fullname = mysqli_real_escape_string($db, $_POST['fullname'] );
$NID = mysqli_real_escape_string($db, $_POST['NID'] );
$DOB = mysqli_real_escape_string($db, $_POST['DOB'] );
$gender = mysqli_real_escape_string($db, $_POST['gender'] );
$phone = mysqli_real_escape_string($db, $_POST['phone'] );
$email = mysqli_real_escape_string($db, $_POST['email'] );
$address = mysqli_real_escape_string($db, $_POST['address'] );
$username = mysqli_real_escape_string($db, $_POST['username'] );
$password_1 = mysqli_real_escape_string($db, $_POST['password'] );
$password_2 = mysqli_real_escape_string($db, $_POST['username'] );

if (empty($username)) { array_push($errors, "Username is required")};
//do for all the other ones
//check for password
if($password_1 != $password_2) {array_push($errors, "passwords do not match")};


//check for user with same username

$user_check_query = " SELECT *FROM user WHERE username = '$username' or email = '$email' LIMIT 1 ";

















































 ?>