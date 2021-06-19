<?php 
include"dbcon.php";
$a=$_POST['name'];
$b=$_POST['amount'];
$data="insert into branch(name,amount_patient)value('$a','$b')";
mysqli_query($con,$data);
header('location:branch.php');
?>