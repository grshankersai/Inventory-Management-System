<?php
    require 'common.php';
?>
<html>
    <head>
        <title>Inventory Management System</title>
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
                         <?php
                                if (isset($_SESSION['email'])) {
                         ?>
                        <li><a href="DataEntry.php"><span class="glyphicon glyphicon glyphicon-new-window"></span>Go to DashBoard</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon glyphicon glyphicon-log-out"></span>Logout</a></li>
                        
                        ?>
                        <?php
                                }else {?>
                        
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <?php
                                }?>
                        
                    </ul>
                </div>
            </div>
        </nav>
        
        <div id="banner_image">
            <div class="container">
                <div class="col-xs-offset-2 banner_content">
                   
                    <h3>Inventory Management System</h3>
                </div>
                
                
            </div>
            
            
        </div>
        <footer class="sample">
            <div >
                <p>Copyright E-mart. All Rights
                    Reserved  </p>
            </div>
        </footer>
        
        
    </body>
</html>
