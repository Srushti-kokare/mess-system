<?php

 if($_SERVER['request_method']=='POST'){

 include 'DatabaseConfig.php';
 
 $conn = mysqli_connect($HostName,$HostUser,$HostPass,$DatabaseName);
 
 $email = $_POST['Email'];
 $password = $_POST['Password'];
 
 $Sql_Query = "SELECT * FROM user WHERE user_email = '$email' and user_password = '$password' ";
 
 $check = mysqli_fetch_array(mysqli_query($con,$Sql_Query));
 
 if(isset($check)){
 
 echo "Data Matched";
 }
 else
 {
 echo "Invalid Username or Password Please Try Again";
 }
 
 }
 else
 {
 echo "Check Again";
 }
mysqli_close($conn);

?>