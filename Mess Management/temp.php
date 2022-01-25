<?php
if(isset($_POST['log']))
{
	$Email=$_POST['email'];
	$Password=$_POST['pass'];
	$sql="SELECT * FROM tbl_registrations where email='".$Email."'AND password='".$Password."'";
	//echo "$sql";
	$result=mysqli_query($conn,$sql);
	if($row = mysqli_fetch_array($result))
	{
		$type=$row["type"];
		$_SESSION["user_id"]=$row["id"];
		$_SESSION["user_name"]=$row["user_name"];
		switch ($type) 
		{
			case "student":
							header("Location:student_dashboard.php");
							exit(0);
							break;

			case "admin":
				 			header("Location:admin_dashboard.php");
							exit(0);	 
							break;

			case "super":
							header("Location:super_dashboard.php");
							exit(0);	
							break;		
		}
	}
	 else
	{
	 	echo "You have entered incorrect password";
	}
}
?>