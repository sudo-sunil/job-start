<?php




$employee_id=$_POST['employee_id'];

$db = mysqli_connect("localhost","root","","jobstart"); //keep your db name
$sql = "SELECT * FROM signup WHERE id = '$employee_id'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<embed width="100%" height="100%" src="data:application/pdf;base64,'.base64_encode( $result['resume'] ).'"/>';

?>
