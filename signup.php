<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    require 'common.php';
    if(isset($_SESSION['email'])){
    header('location:DataEntry.php');
}
    ?>
<html>
    <head>
        <title>Signup </title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">E-mart IMS</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="banner_image1">
            <div class="container-fluid sos1">
             
      
      <div class="row col-xs-offset-4">
          <div class="col-sm-5 banner_content1">
              <h1 style="padding-bottom: 10px;">Sign Up form</h1>
              
              <form action="signup_script.php" method="POST">
                  
                  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" name="name" >
                      
                      </div>
                     <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control" name="email" >
                      
                      </div>
                     <div class="form-group">
                      <label for="name">password:</label>
                      <input type="password" class="form-control" name="password" >
                      
                      </div>
                     <div class="form-group">
                      <label for="name">Contact Details:</label>
                      <textarea  class="form-control" name="contact" ></textarea>
                     </div>
                  <div class="form-group">
                      <label for="name">Branch:</label>
                      <input  class="form-control" name="branch" ></textarea>
                     </div>
                  
                      
                     
                  <button type="submit" class="btn btn-primary " >Submit</button>
                      
                     
                  
              </form>
              
              
          </div>
          
          
          
       </div>
      
  </div>
        </div>
        
        
        
         <footer class="sample">
            <div >
                <p>Copyright E-mart. All Rights
                    Reserved </p>
            </div>
        </footer>
    </body>
</html>
