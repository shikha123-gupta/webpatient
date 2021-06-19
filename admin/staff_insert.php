<?php 
include"dbcon.php";
$a=$_POST['username'];
$b=$_POST['email'];
$c=$_POST['password'];
$d=$_POST['phone'];
$e=$_POST['role'];
 $data="insert into staff(username,email,password,phone,role)value('$a','$b','$c','$d','$e')";
mysqli_query($con,$data);
header('location:staff.php');

?>