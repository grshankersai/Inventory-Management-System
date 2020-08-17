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
            <a href="DataEntry.php">Data Entry</a>
            <a href="warehouse.php">WareHouse</a>
            <a href="store.php">Stock in Store</a>
            <a href="logout.php">logout</a>
        </div>
        <div class="container">
            <div class="row">
                 <div class="col-12 col-sm-12 " >
                        <div class="alert alert-info " style="text-align: center; padding: 50px" role="alert">
                            <h2><b> Alerts, Manage your Products</b></h2>
                        </div>
                    </div>
            </div>
            <?php
                $select_query = "select p_id,pname from storage where expires = '1' ";
                $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                $num_rows = mysqli_num_rows($select_query_result);
                if($num_rows > 0)
                {?>
             
            
            <div class="row">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <h4>Expires in 1 Day.</h4>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3>Product ID</h3>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3> Product name</h3>
                </div>
            </div>
            <?php }?>
            <?php
                $select_query = "select p_id,pname from storage where expires = '1' ";
                $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                while ($row = mysqli_fetch_array($select_query_result)){ ?>
                <div class="row">
                
                <div class="col-sm-6" style="text-align:center">
                    <h3><?php echo $row[0]; ?></h3>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3><?php echo $row[1]; ?></h3>
                </div>
            </div>
            
            
                <?php } ?>
            
            <?php
            $select_query = "select p_id,pname from storage where expires = '2' ";
                $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
                $number_of_rows= mysqli_num_rows($select_query_result);
                if($number_of_rows >0){?>
            <div class="row">
                <div class="alert alert-danger" role="alert" style="text-align:center">
                    <h4>Expires in 2 Days.</h4>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3>Product ID</h3>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3> Product name</h3>
                </div>
            </div>
            
            <?php
                
                while ($row = mysqli_fetch_array($select_query_result)){ ?>
                <div class="row">
                
                <div class="col-sm-6" style="text-align:center">
                    <h3><?php echo $row[0]; ?></h3>
                </div>
                <div class="col-sm-6" style="text-align:center">
                    <h3><?php echo $row[1]; ?></h3>
                </div>
            </div>
            
            
                <?php } }?>
            
            <div class="row">
                <div class="col-sm-8" >
                </div>
                <div class="col-sm-3" style="margin:40px">
                    <a role="button" href="warehouse.php" class="btn btn-primary">Manage the goods</a>
                </div>
            </div>
            
           
        </div>
                
  
        </div>
    </body>
</html>
