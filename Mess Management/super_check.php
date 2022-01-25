<?php


include 'connection.php';
	$Name=$_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];

	$duplicate=mysqli_query($conn,"select * from tbl_registrations where email='$Email' ");
		if(mysqli_num_rows($duplicate)>0)
		{
				
					echo json_encode(array("statusCode"=>201));
		}
		else
		{
			$sql="INSERT INTO `tbl_registrations`(`user_name`, `email`, `password`,`type`) VALUES('".$Name."','".$Email."','".$Password."','SAdmin') ";
				if(mysqli_query($conn,$sql))
				{
					if(mysqli_affected_rows($conn)>0) {
						echo json_encode(array("statusCode"=>200));
					}
				}

				else{
					echo json_encode(array("statusCode"=>202));
				}
		}
		mysqli_close($conn);
	?>