<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
        require 'common.php';
        $select_query = "select pid,pname,sid from store";
        $select_query_result = mysqli_query($con, $select_query) or die(mysqli_errno($con));
        $number_of_rows = mysqli_num_rows($select_query_result);
        
        $select_query_2 = "select * from cart";
        $result = mysqli_query($con, $select_query_2);
        $num = mysqli_num_rows($result);
        
        
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
            <a href="alerts.php">Alerts</a>
            <a href="warehouse.php">Warehouse</a>
            <a href="logout.php">logout</a>
        </div>
        <div class="container">
            <div class="row">
                  <div class="col-12 col-sm-12 " >
                        <div class="alert alert-info " style="text-align: center; padding: 50px" role="alert">
                            <h2><b> E-mart Store.</b></h2>
                        </div>
                    </div>
            </div>
           
            <?php if( $number_of_rows == 0) {?>
            <div class="alert alert-warning" role="alert" style="margin:60px;text-align: center">
                <h3> The store is empty time to bring some goods from the warehouse..!!<h3>
            </div>
            
            
            
            
            <?php }else {?>
                 <div class="row">
               <div class="col-sm-2">
               </div>
              
               <div class=" col-sm-8 ">
                   <table class="table table-hover" style="text-align:center">
               <thead >
                     <tr >
                            
                            <th scope="col" style="text-align:center">Product ID</th>
                            <th scope="col" style="text-align:center">Product Name</th>
                            <th scope="col" style="text-align:center">Proceed to sales</th>
                            
                    </tr>
                   
               </thead>
               <tbody>
                    <?php while($row = mysqli_fetch_array($select_query_result)){?>
                   <tr>
                       <td><?php echo $row[0]; ?></td>
                       <td> <?php echo $row[1]; ?></td>
                       <td> <a role="button" class="btn btn-success" href="sales.php?msg=<?php echo $row[2]?>">Sales</a></td>
                   </tr>
                  <?php } ?>
               </tbody>
           </table>
                   
               </div>
           </div>
            <?php } ?>
            
            <?php if($num !=0)
            {?>
            <div class="row">
                <div class="col-sm-5">
                </div>
                <div class="col-sm-2">
                    <a role="button" class="btn btn-primary" href="cart.php">Go to cart </a>
                </div>
            </div>
            
            
                
            <?php } ?>
           
        </div>
            
                
  
        
    </body>
</html>

