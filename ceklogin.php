<?php
$username   = $_POST['userlogin'];
$pass       = $_POST['passlogin'];

include 'koneksi.php';

$user = mysqli_query($connect,"select * from user where username='$username' and password='$pass'");
$chek = mysqli_num_rows($user);
if($chek>0)
{
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
    header("location:menu.html");
}else
{
    header("location:login.php");
}
?>