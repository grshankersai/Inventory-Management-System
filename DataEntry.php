<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
require 'common.php';
?>
<html>
    <head>
        <title>Inventory Entry</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="style.css" type="text/css">

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 200px; /* Same as the width of the sidenav */
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
    </head>
    <body>
        <div class="sidenav">
            
            <a href="index.php">E-mart IMS</a>
            <a href="alerts.php">Alerts</a>
            <a href="warehouse.php">WareHouse</a>
            <a href="store.php">Stock in Store</a>
            <a href="logout.php">logout</a>
        </div>
        <div class="main">
            
            <div class="container">
                <div class="row ">
                    <div class="col-12 col-sm-7 " >
                        <div class="alert alert-info " style="text-align: center; padding: 50px" role="alert">
                            <h2><b> Enter the Incoming Inventories here.</b></h2>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <img src="img1.jpg" alt="not awailable" width="63%" >
                    </div>
                    
                   
                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="panel panel-primary">
                        
                        <div class="panel-heading">
                            Inventory Entry.
                        </div>
                        
                        <div class="panel-body">
                            <form method="POST" action="dataentryscript.php">
                            
                                <label for="pid">Product ID :</label><br>
                                <input type="text" style="width:100%; margin-bottom:  10px;"  name="pid" required>
                                <br>
                                <label for="pname">Product Name:</label><br>
                                <input type="text" style="width:100%;"  name="pname" required>
                                <br><br>
                                <label for="pname">Expires In:</label><br>
                                <input type="text" style="width:100%;"  name="exp" required>
                                <br><br>
                                <label for="cp">Cost Price:</label><br>
                                <input type="number" style="width:100%;"  name="cp" required>
                                <br><br>
                                <label for="pname">Sales Price (MRP)</label><br>
                                <input type="number" style="width:100%;"  name="mrp" required>
                                <br><br>
                            
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                            <?php
                            if(isset($_GET['msg']))
                            {?>
                            
                            <div class="alert alert-success " style="margin-top:20px" role="alert">
                                Entry Successfull..!!
                            </div>
                            
                                                    
                                
                            <?php } ?>
                        </div>
                        <div class="panel-footer">
                            
                            Have a good day!
                        </div>
                    </div>
                    
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-offset-5 col-sm-3 ">
                        <a role="button" class="btn btn-primary" href="invoicein.php">Invoice management</a>
                    </div>
                </div>
                
  
        </div>
    </body>
</html>
