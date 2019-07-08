<?php
require "connect.php";
if(!empty($_POST['uid']) && !empty($_POST['pass']))
{	
$id=$_POST["uid"];
$password=$_POST["pass"];
$sql= $conn->prepare("SELECT * from admin WHERE username=? AND password= ?");
$sql->bind_param('ss', $id,$password);
$sql->execute();
$result = $sql->get_result();
$message = '';
if($result->num_rows>0)
{	
	session_start();
	$row=$result->fetch_assoc();
	$_SESSION['id'] = $row['id'];
	header("Location:report.php");
}
else										
$message = 'Incorrect username and password';
echo "<script type='text/javascript'> alert('$message');</script>";
include "adminlogin.php";
}

?>
