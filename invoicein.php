<?php
require 'common.php';
if(isset($_POST['name']))
{
$n = $_POST['name'];
$select_query="SELECT * FROM storage ORDER BY pid DESC"; 
          
      
$select_query_result= mysqli_query($con, $select_query) ;}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
            
            <a href="DataEntry.php">Data Entry</a>
            
            <a href="logout.php">logout</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-5 ">
                    <form method="POST" action="invoicein.php">
                        <div class="form-group">
                                <label for="name">Invoice for last number of items:</label>
                                <input type="number" class="form-control" name="name" required>
                        </div>  
                        <button class="btn btn-primary" type="submit" style="margin-bottom:30px;"> SUBMIT </button>
                    </form>
                </div>
            </div>
        
        
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-6">
                <?php if(isset($_POST['name']) and $n <= mysqli_num_rows($select_query_result))
                {?>
                <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col">PID</th>
                    <th scope="col">PNAME</th>
                    <th scope="col">COST</th>
                    
                    </tr>
                </thead>
               <?php }?>
                <tbody>
                     <?php 
        if(isset($_POST['name']))
        {
            
            $i=0;
            
            
            $sum=0;
            if($n > mysqli_num_rows($select_query_result))
            {
                echo "<h3> Warehouse doesnt have that many items.. </h3> ";
            }
            else
            {
            
            while($i<$n and  $row= mysqli_fetch_array($select_query_result))
            {
                $i++;
                $sum=$sum+$row[4];
                ?>
                
       
                    <tr>
                   
                    <td><?php echo $row[1] ?></td>
                    <td><?php echo $row[2] ?></td>
                    <td><?php echo $row[4] ?></td>
                    </tr>
                            
                            
       <?php      }
            
        }
        }
        
        ?>
                    
                    <?php
                    if(isset($_POST['name']) and $n <= mysqli_num_rows($select_query_result) )
                    {
                        
                    ?>
                    <tr>
                        
                   
                  
                        <td colspan="2">TOTAl OUTSTANDING</td>
                    <td><?php if(isset($_POST['name'])){ echo $sum;}?></td>
                    </tr>
                </tbody>
                <?php
                    }?>
            </div>
        </div>
        
        
        
        
       
            
            </div>
        
    </body>
</html>
