<?php
require 'common.php';
$id = $_GET['msg'];
$select_query = "select pid,pname,mrp from store where sid='$id'";
$select_query_result= mysqli_query($con, $select_query);
$row = mysqli_fetch_array($select_query_result);
$insert_query="insert into cart (pid,pname,mrp) values ('$row[0]','$row[1]','$row[2]') ";
$insert_query_result = mysqli_query($con, $insert_query);
$delete_query="delete from store where sid='$id'";
$delete_query_result= mysqli_query($con, $delete_query);


header('location: store.php');
?>



