<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

if (!empty($firstname) || !empty($lastname) || !empty($age) || !empty($gender) || !empty($email) || !empty($phone) || !empty($password)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cse299";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From patient Where email = ? Limit 1";
     $INSERT = "INSERT Into patient (firstname, lastname, age, gender, email, phone, password) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param( "ssissis", $firstname, $lastname, $age, $gender, $email, $phone, $password);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>