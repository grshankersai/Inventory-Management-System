<?php
require 'common.php';
$id = $_GET['msg'];
$select_query = "select p_id,pname,mrp from storage where pid='$id'";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_errno($con));
$row= mysqli_fetch_array($select_query_result);
$insert_query = "insert into store(pid,pname,mrp) values ('$row[0]','$row[1]','$row[2]')";
$insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
$delete_query = "delete from storage where pid='$id'";
$delete_query_result= mysqli_query($con, $delete_query);


header('location: warehouse.php?msg1=Sussess');
?>


