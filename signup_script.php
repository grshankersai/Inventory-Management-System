<?php
    require 'common.php';
    $name = $_POST['name'];
    $name = mysqli_real_escape_string($con , $name);

    $email = $_POST['email'];
    $email = mysqli_real_escape_string($con , $email);

    $password = $_POST['password'];
    $password = mysqli_real_escape_string($con , $password);
    //$password = md5($password);

    $contact = $_POST['contact'];
    $contact = mysqli_real_escape_string($con , $contact);
    
    $branch = $_POST['branch'];
    $branch = mysqli_real_escape_string($con, $branch);
    
    $select_query = "SELECT * from users WHERE email = '$email'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    $select_rows = mysqli_num_rows($select_query_result);
    
     if($select_rows!=0){
       // $error = "<span class='red'>Email Already Exists</span>";
        //header('location:signup.php?m1='.$error);
         echo "Fuck u it already exist..";
    }
    else
    {
        $insert_query = "INSERT INTO users (name,email,pass,contact,branch) VALUES ('$name','$email','$password','$contact','$branch')";
         $inser_query_result = mysqli_query($con , $insert_query) or die(mysqli_error($con));
         $user_id = mysqli_insert_id($con);
         $_SESSION['id'] = $user_id;
        $_SESSION['email'] = $email;
        echo " Inseerted";
        
        
    }
    
    



?>
