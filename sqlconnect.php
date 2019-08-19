<?php

$dbServername="localhost";
$dbUsername="agasteesh";
$dbPassword="12345678";
$dbName="waitso";

$conn=mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
$sql="SELECT count(id) AS total FROM rpi_data";
$result=mysqli_query($con,$sql);
$values=mysqli_fetch_assoc($result);
$num_rows=$values['total'];
echo $num_rows;
?>