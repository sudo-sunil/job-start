<?php 
require "connect.php"; 
$id=$_POST['id'];
$pass=$_POST['pass'];
$user_type=$_POST['user_type'];
if($user_type==2)
{
$sql= $conn->prepare("SELECT * from signup WHERE id=?");
$sql->bind_param('s', $id);
$sql->execute();
$result = $sql->get_result();
$message = '';
if($result->num_rows==0)
{		
$sql= $conn->prepare("INSERT into signup set id=?,password=?");
$sql->bind_param('ss', $id,$pass);
$sql->execute();
header("Location: login.php");
}
else
{
	$message="USER ID already exists,Choose different USER ID";
	echo "<script type='text/javascript'> alert('$message');</script>";
	include('signupp.php');
}	
}
else
{		
$sql= $conn->prepare("SELECT * from signup_employer WHERE id=?");
$sql->bind_param('s', $id);
$sql->execute();
$result = $sql->get_result();
$message = '';
if($result->num_rows==0)
{		
$sql= $conn->prepare("INSERT into signup_employer set id=?,password=?");
$sql->bind_param('ss', $id,$pass);
$sql->execute();
header("Location: login.php");
}
else
{
	$message="USER ID already exists,Choose different USER ID";
	echo "<script type='text/javascript'> alert('$message');</script>";
	include('signupp.php');
}	
}
?>