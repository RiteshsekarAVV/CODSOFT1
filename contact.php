<?php
$n=$_POST['name'];
$e=$_POST['email'];
$a=$_POST['message'];
$con=mysqli_connect("localhost","root","","portfolio");
$sql="INSERT INTO contactme(name,email,message) values('$n','$e','$a')";
$r=mysqli_query($con,$sql);
if($r)
{
echo " Details registered successfully . Thank you";
}
else
{
echo"Couldn't add details";
}
?>