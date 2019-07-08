<?php

$mysqli = new mysqli("localhost", "root", "", "jobstart");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

session_start();
$id=$_SESSION['id'];
$job_id=$_POST['job_id'];
$status=0;


$sql = "Insert into applyjob (employee_id,job_id,status) VALUES ('$id','$job_id','$status')";


if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

header("Location: applyjob.php");







?>
