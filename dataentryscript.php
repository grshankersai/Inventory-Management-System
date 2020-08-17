<?php
    require 'common.php';
    
    $productid = $_POST['pid'];
    $productname = $_POST['pname'];
    $expires = $_POST['exp'];
    $cost = $_POST['cp'];
    $sales_price=$_POST['mrp'];
    $query="INSERT INTO storage (p_id,pname,expires,cp,mrp ) values('$productid','$productname','$expires','$cost','$sales_price')";
    $query_result= mysqli_query($con, $query) or die(mysqli_errno($con));
    
    
    header('location: DataEntry.php?msg=Success');
   //  header('location: login.php?error1=no user found');
    ?>
    


