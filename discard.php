<?php
require 'common.php';

$n = $_GET['msg1'];
$query="delete from storage where pid='$n'";
$quert_result= mysqli_query($con, $query);
header('location: warehouse.php?msg2=..');

?>

