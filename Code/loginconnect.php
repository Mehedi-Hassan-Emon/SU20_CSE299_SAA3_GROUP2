<?php 


    
     $host="localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "cse299";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT email From patient Where email = ? Limit 1";
         $INSERT = "INSERT Into patient (email, password) values(?, ?)";
     }

if(isset($_POST['email'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql="select * from patients where email='".$email."'AND password='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>