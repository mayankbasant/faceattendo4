<?php
session_start();
header('location:loginandregister.php');
$connection=mysqli_connect('localhost','root','shivakesh2');
//$connection=mysqli_connect('localhost','root','write your password here')

mysqli_select_db($connection,'loginandregistrationform');

$name=$_POST['user'];
$emailid=$_POST['email_id'];
$password=$_POST['password'];

$select="select * from register_table where email_id='$emailid'and password='$password'";
$result=mysqli_query($connection,$select);
$num=mysqli_num_rows($result);
if($num==1)
{
    echo" user already exists";
}
else
{
    $reg="insert into register_table(name,email_id,password) values('$name','$email','$password')";
    mysqli_query($connection,$reg);
}
?>
