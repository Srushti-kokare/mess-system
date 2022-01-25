<?php


include 'connection.php';
	$Name=$_POST['fname'].' '.$_POST['mname'].' '.$_POST['lname'];
	$Address=$_POST['address'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	$Mobno=$_POST['mblno'];
	$Licenseno=$_POST['Licenseno'];

	$duplicate=mysqli_query($conn,"select * from tbl_registrations where email='$Email'");
	$duplicate1=mysqli_query($conn,"select * from tbl_registrations where mbl_no='$Mobno'");
	$duplicate2=mysqli_query($conn,"select * from tbl_registrations where food_license_no='$Licenseno'");

		if(mysqli_num_rows($duplicate)>0)
		{
				
					echo json_encode(array("statusCode"=>201));
		}
		else if(mysqli_num_rows($duplicate1)>0)
		{
				
					echo json_encode(array("statusCode"=>202));
		}
		else if(mysqli_num_rows($duplicate2)>0)
		
		{
				
					echo json_encode(array("statusCode"=>203));
		}
		else
		{
			$sql="INSERT INTO `tbl_registrations`(`user_name`,  `address`,`mbl_no`,`email`, `password`,`food_license_no`,`type`) VALUES('".$Name."','".$Address."','".$Mobno."','".$Email."','".$Password."','".$Licenseno."','SAdmin') ";
				if(mysqli_query($conn,$sql))
				{
					if(mysqli_affected_rows($conn)>0)
					{
						echo json_encode(array("statusCode"=>200));
					}
				}

				else
				{
					echo json_encode(array("statusCode"=>204));
				}
		}
	

		mysqli_close($conn);
	?>