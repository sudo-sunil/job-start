<?php 
$servername="localhost";
$uname="root";
$pword="";
$dbname="jobstart";

$conn = new mysqli($servername,$uname,$pword,$dbname);
if($conn->connect_error){
die("connnection failed: ".$conn->connect_error);
}
?>