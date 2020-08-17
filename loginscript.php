<?php
require 'common.php';

$username= $_POST['email'];

$pass = $_POST['password'];
//$pass = md5($pass1); 

$email = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $pass);

$users_products_query = "SELECT  * FROM users WHERE email = '$username' and pass ='$password' ";
  $users_products_result = mysqli_query($con, $users_products_query);
  $number_of_products = mysqli_num_rows($users_products_result);
  
  
  
 if($number_of_products == 0)
      
  {
     header('location: login.php?error1=no user found');
      echo "no user found";
  
 }
  else{
      $row = mysqli_fetch_array($users_products_result);
        $_SESSION['email'] = $email;
       $_SESSION['id']=$row['id'];
      header('location: DataEntry.php');
      //echo "user found";
  }
?>