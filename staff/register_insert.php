<?php 
include"dbcon.php";
$a=$_POST['name'];
$b=$_POST['phone'];
$c=$_POST['age'];
$d=$_POST['dob'];
$data="insert into register(name,phone,age,dob)value('$a','$b','$c','$d')";
mysqli_query($con,$data);
header('location:register.php');
?>