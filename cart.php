<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'common.php';
$select_query="select pid,pname,mrp from cart";
$select_query_result= mysqli_query($con, $select_query);
//$row= mysqli_fetch_array($select_query_result);
$sum=0;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
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
            
            <a href="store.php">Store</a>
            
            <a href="logout.php">logout</a>
        </div>
        
        <div class="container">
            <div class="row">
                              <div class="col-12 col-sm-12 " >
                        <div class="alert alert-info " style="text-align: center; padding: 50px" role="alert">
                            <h2><b> Cart.</b></h2>
                        </div>
                    </div>
            </div>

                <div class="row">
                        <div class="col-sm-2">
                        </div>
                 <div class="col-sm-6">
                     <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th scope="col">PID</th>
                        <th scope="col">PNAME</th>
                        <th scope="col">COST</th>
                    
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($row= mysqli_fetch_array($select_query_result))
                            {
               
                            $sum=$sum+$row[2];
                            ?>
                
       
                            <tr>
                   
                            <td><?php echo $row[0] ?></td>
                            <td><?php echo $row[1] ?></td>
                            <td><?php echo $row[2] ?></td>
                            </tr>
                    
                            <?php } ?>
                            <tr>                  
                    
                            <td colspan="2">TOTAl OUTSTANDING</td>
                            <td><?php echo $sum;?></td>
                            </tr>
                        </tbody>
                     </table>
                     
                            
                            
                
                
                     
                     
                 </div>
                 
        </div>
            
                <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-2">
                    <a role="button" class="btn btn-primary" href="clearcart.php" >Sales </a>
                </div>
            
            
        
            
            
     </div>
        
      
    </body>
</html>
