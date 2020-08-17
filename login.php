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
        <title>Login to E-mart IMS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
        
         <div class="container sos ">
            <div class="row">
                <div class="  col-sm-6 col-sm-offset-3 center-allign-this">
                    <div class="panel panel-primary">
                        
                        <div class="panel-heading">
                            Login
                        </div>
                        
                        <div class="panel-body">
                            <form method="POST" action="loginscript.php">
                            
                                <label for="userid"> Email:</label><br>
                                <input type="email" style="width:100%; margin-bottom:  10px;"  name="email">
                                <br>
                                <label for="password">Password:</label><br>
                                <input type="password" style="width:100%;"  name="password">
                                <br><br>
                            
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                            <?php
                            if(isset($_GET['error1']))
                            {
                                echo "<div class='alert alert-danger' role='alert'> Invalid Password Plaese try again </div>";                                                 
                            }

                            
                           ?>
                            
                        </div>
                        <div class="panel-footer">
                            
                            Have a good day!
                        </div>
                            
                        
                        
                        
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>
        <footer class="sample">
            <div >
                <p>Copyright E-mart IMS. All Rights
                    Reserved. </p>
            </div>
        </footer>
    </body>
</html>
