<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "jobstart");

 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

session_start();
	
$id=$_SESSION['id'];

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$pno = $_POST['pno'];
$email = $_POST['email'];
$addr = $_POST['addr'];

$institute_name1 = $_POST['institute_name1'];
$university1 = $_POST['university1'];
$yoc1 = $_POST['yoc1'];
$yop1 = $_POST['yop1'];
$avg_grade1 = $_POST['avg_grade1'];
$achievements1 = $_POST['achievements1'];

$institute_name2 = $_POST['institute_name2'];
$university2 = $_POST['university2'];
$yoc2 = $_POST['yoc2'];
$yop2 = $_POST['yop2'];
$avg_grade2 = $_POST['avg_grade2'];
$achievements2 = $_POST['achievements2'];

$institute_name3 = $_POST['institute_name3'];
$university3 = $_POST['university3'];
$yoc3 = $_POST['yoc3'];
$yop3 = $_POST['yop3'];
$avg_grade3 = $_POST['avg_grade3'];
$achievements3 = $_POST['achievements3'];

$jobexp = $_POST['jobexp'];
$aoi = $_POST['aoi'];
$lksw = $_POST['lksw'];
$lkcomm = $_POST['lkcomm'];
$certi = $_POST['certi'];
$dp = addslashes(file_get_contents($_FILES['dp']['tmp_name']));
$resume = addslashes(file_get_contents($_FILES['resume']['tmp_name']));

// Attempt insert query execution
/*
$sql = "INSERT INTO eyedet(fname, lname, dob, pno, email, addr, institute_name1, university1, yoc1, yop1, avg_grade1, achievements1,institute_name2, university2, yoc2, yop2, avg_grade2, achievements2,institute_name3, university3, yoc3, yop3, avg_grade3, achievements3, jobexp, aoi, lksw, lkcomm, certi, dp, resume) VALUES ('$fname','$lname','$dob','$pno','$email','$addr','$institute_name1','$university1','$yoc1','$yop1','$avg_grade1','$achievements1','$institute_name2','$university2','$yoc2','$yop2','$avg_grade2','$achievements2','$institute_name3','$university3','$yoc3','$yop3','$avg_grade3','$achievements3','$jobexp','$aoi','$lksw','$lkcomm','$certi','$dp','$resume')";
*/


$sql="Update signup SET pfillstatus=1,fname='$fname',lname='$lname',dob='$dob',pno='$pno',email='$email',addr='$addr',institute_name1='$institute_name1',university1='$university1',yoc1='$yoc1',yop1='$yop1',avg_grade1='$avg_grade1',achievements1='$achievements1',institute_name2='$institute_name2',university2='$university2',yoc2='$yoc2',yop2='$yop2',avg_grade2='$avg_grade2',achievements2='$achievements2',institute_name3='$institute_name3',university3='$university3',yoc3='$yoc3',yop3='$yop3',avg_grade3='$avg_grade3',achievements3='$achievements3',jobexp='$jobexp',aoi='$aoi',lksw='$lksw',lkcomm='$lkcomm',certi='$certi',dp='$dp',resume='$resume' where id='$id'";


if($mysqli->query($sql) === true){
$message = 'Records Inserted Successfully';
echo "<script type='text/javascript'> alert('$message');</script>";

} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}


header("Location: employee.php"); 
// Close connection
$mysqli->close();
?>