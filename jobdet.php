

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "jobstart");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

session_start();
$employer_id=$_SESSION['id'];
$title = $_POST['title'];
$company = $_POST['company'];
$job_type = $_POST['job_type'];
$location = $_POST['location'];
$description = $_POST['description'];


// Attempt insert query execution
$sql = "INSERT INTO jobdet(employer_id,title, company, job_type, location, description) VALUES ('$employer_id','$title','$company','$job_type','$location','$description')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
 
header("Location: employer.php"); 

 
// Close connection
$mysqli->close();
?>