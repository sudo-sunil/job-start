<?php

require "connect.php";

$sql = "SELECT job_id FROM jobdet WHERE job_id NOT IN (SELECT jobdet.job_id FROM jobdet,applyjob WHERE applyjob.job_id=jobdet.job_id)";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
			
				
				// output data of each row
				while($row = $result->fetch_assoc()) 
				{	
					echo $row['title'];
				}
}
?>
