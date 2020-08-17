<?php
require 'common.php';
$query="truncate table cart";
$result= mysqli_query($con, $query);
header('location: store.php');
?>
