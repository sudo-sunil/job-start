<?php

$id='ram';

$db = mysqli_connect("localhost","root","","jobstart"); //keep your db name
$sql = "SELECT * FROM signup WHERE id = '$id'";
$sth = $db->query($sql);
$result=mysqli_fetch_array($sth);
echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['dp'] ).'"/>';

?>
