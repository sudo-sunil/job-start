<?php

$mysqli = new mysqli("localhost", "root", "", "jobstart");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$job_id=$_POST['job_id'];
$employee_id=$_POST['employee_id'];
$status=$_POST['status'];




 
$sql = "UPDATE `applyjob` SET `status`='$status' WHERE employee_id='$employee_id' and job_id='$job_id'";


if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

header("Location: viewcandidate.php");


?>