<?php
require "connect.php";
$user_type=$_POST['user_type'];
if($user_type==2)
{
if(!empty($_POST['uid']) && !empty($_POST['pass']))
{	
$id=$_POST["uid"];
$password=$_POST["pass"];
$sql= $conn->prepare("SELECT * from signup WHERE id=? AND password= ?");
$sql->bind_param('ss', $id,$password);
$sql->execute();
$result = $sql->get_result();
$message = '';
if($result->num_rows>0)
{	
	session_start();
	$row=$result->fetch_assoc();
	$_SESSION['id'] = $row['id'];
	header("Location:employee.php");
}
else										
$message = 'Incorrect username and password';
echo "<script type='text/javascript'> alert('$message');</script>";
include "login.php";
}
}
else
{	
$id=$_POST["uid"];
$password=$_POST["pass"];
$sql= $conn->prepare("SELECT * from signup_employer WHERE id=? AND password= ?");
$sql->bind_param('ss', $id,$password);
$sql->execute();
$result = $sql->get_result();
$message = '';
if($result->num_rows>0)
{	
	session_start();
	$row=$result->fetch_assoc();
	$_SESSION['id'] = $row['id'];	
	header("Location:employer.php");	
}
else										
{ 
$message = 'Incorrect username and password';
echo "<script type='text/javascript'> alert('$message');</script>";
include "login.php";
}
}
?>
